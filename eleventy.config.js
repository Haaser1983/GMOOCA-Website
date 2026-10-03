import markdownIt from "markdown-it";

const md = markdownIt({ html: true, linkify: false, typographer: true });

export default function (eleventyConfig) {
  md.renderer.rules.table_open = () => '<div class="table-scroll"><table>\n';
  md.renderer.rules.table_close = () => "</table></div>\n";
  // id on every h2/h3 in Markdown so sections can be linked (/about/#where-gmooca-fits)
  md.renderer.rules.heading_open = (tokens, i, opts, env, self) => {
    const t = tokens[i];
    if (["h2", "h3"].includes(t.tag) && !t.attrGet("id")) {
      const text = tokens[i + 1].children.map((c) => c.content).join("");
      t.attrSet("id", text.toLowerCase().replace(/[^a-z0-9]+/g, "-").replace(/^-|-$/g, ""));
    }
    return self.renderToken(tokens, i, opts);
  };
  eleventyConfig.setLibrary("md", md);
  // inline markdown for short strings in data files (links, emphasis)
  eleventyConfig.addFilter("md", (s) => md.renderInline(s || ""));
  eleventyConfig.addPassthroughCopy({ "src/assets": "assets" });
  eleventyConfig.addPassthroughCopy({ "src/static": "/" });

  // "2026-10-02" -> "Oct 2, 2026"
  // Dates arrive as "YYYY-MM-DD" strings (JSON data) or Date objects (YAML front matter)
  const toDate = (v) => (v instanceof Date ? v : new Date(String(v).slice(0, 10) + "T12:00:00Z"));
  eleventyConfig.addFilter("readableDate", (v) => {
    const d = toDate(v);
    return d.toLocaleDateString("en-US", { month: "short", day: "numeric", year: "numeric", timeZone: "UTC" });
  });

  // Most recent "updated" date across all projects
  eleventyConfig.addFilter("latestUpdate", (projects) =>
    projects.map((p) => String(p.updated)).sort().at(-1)
  );

  eleventyConfig.addFilter("dateIso", (v) => toDate(v).toISOString().slice(0, 10));

  eleventyConfig.addFilter("phaseIndex", (project) => project.phases.indexOf(project.phase));

  return {
    dir: { input: "src", output: "_site", includes: "_includes", data: "_data" },
    htmlTemplateEngine: "njk",
    markdownTemplateEngine: "njk",
  };
}

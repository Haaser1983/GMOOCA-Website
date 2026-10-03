# Notes for Claude

This is the gmooca.org website (Eleventy 3, Nunjucks + Markdown, PHP form handlers, deployed to cPanel over FTPS by GitHub Actions on push to `main`). See README.md for the file map.

## Updating project progress (the most common request)

When the owner reports progress on Gaming Manager Pro 2, the EGM Module, or the forums:

1. Edit only that project's entry in `src/_data/projects.json`.
2. Set `phase` to one of its `phases`; rewrite `note` (1–2 plain sentences, present tense, no jargon); set `updated` to today (`YYYY-MM-DD`).
3. Prepend a `log` entry `{ "date": "YYYY-MM-DD", "text": "..." }`. Newest first. One sentence, past tense.
4. Run `npm run build` and confirm it succeeds.
5. Commit with a message like `Projects: EGM Module moves to Build`. Push only when asked.

Write for owners and collectors, not engineers: say what changed and what's next, not part numbers or protocol internals.

## House rules for content

- No manufacturer or standards-body logos or scanned documents. Names in plain text only, factual use.
- No founder names, no social links (until the owner says otherwise).
- No legal advice; no instructions for bypassing machine security.
- Copy style: plain verbs, sentence case, no hype.
- Keep `site.trademarks` (in `src/_data/site.json`) current when a new company or standard is named on the site.

## Design system

Tokens at the top of `src/assets/css/main.css` (light and dark). One typeface: Archivo variable (self-hosted, `wdth` axis used for display). Brass (`--brass`) is the single accent. The homepage reels are the one decorative animation; don't add more.

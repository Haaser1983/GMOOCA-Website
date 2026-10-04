# GMOOCA brand: logo, icon and how they fit this site

Not published (`docs/` isn't part of the build). The asset files are in `src/assets/brand/`, which **is** published at `/assets/brand/`.

Source of truth: the `branding/` folder in the Gaming Manager repo (`GMOOCA-Gaming-Manager`). Its `build_brand.py` regenerates every file. If a color or shape changes, regenerate there and copy the results here; don't hand-edit these files.

**Current copy:** Gaming Manager commit `ba7ff0d` (2026-10-03). The app and the site use the same artwork.

| Website file (`src/assets/brand/`) | Copied from `branding/` |
|---|---|
| `gmooca-logo.svg`, `gmooca-logo-no-ring-text.svg`, `gmooca-lockup-{dark,light}-transparent.svg` | `logo/` |
| `gmooca-logo-{512,1024}.png`, `gmooca-lockup-{dark,light}-transparent.png` | `logo/png/` |
| `icon/gmooca-mark.svg`, `icon/gmooca-icon-small.svg` | `icon/` |
| `icon/favicon.ico`, `favicon.svg`, `favicon-32.png`, `apple-touch-icon.png`, `icon-192.png`, `icon-512.png`, `icon-maskable-512.png` | `web/` |
| `og-image.png` | Not in `branding/`. Built here by `tools/make-og-image.py` from the dark lockup. Rerun it after refreshing. |

The SVGs carry embedded Content Credentials (C2PA metadata recording that Claude produced them). Leave it in; it matches the site's AI disclosure (`/ai/`). It makes the SVGs larger, so don't inline them in templates. Use `<img>` or a CSS mask instead.

## The marks

| Mark | What it is | Where it goes |
|---|---|---|
| **Crest chip** (`gmooca-logo.svg`) | Casino chip with a crimson shield and three reels, with "Gaming Machine Owners · Operators / Collectors Association" around the ring | The logo. Large uses only (≥150 px): About page, social image, print |
| **Crest chip, no ring text** (`gmooca-logo-no-ring-text.svg`) | Same chip without the lettering | 32–150 px: site header, footer, cards |
| **Lockups** (`gmooca-lockup-light-transparent.svg`, `gmooca-lockup-dark-transparent.svg`) | Chip + "GMOOCA" wordmark + full name | Banners, partner pages, documents. Light version = black wordmark for paper backgrounds |
| **Reel chip icon** (`icon/…`) | Simplified gold chip with three reels on a dark tile | Favicon, home-screen and app icons only. Never as the site logo. At 16–32 px use the bold **small variant** (`icon/gmooca-icon-small.svg`), as the app's `.ico` does; the site's SVG favicon uses it |
| **Mark** (`icon/gmooca-mark.svg`) | The reel chip in one color | Tinted single-color uses (e.g. the footer), applied as a CSS `mask` so it takes any token color |
| **Social image** (`og-image.png`, 1200×630) | Dark lockup on cabinet black | `og:image` / Twitter card |

Rules:
- Use the files. Don't redraw the logo in CSS, recolor it, stretch it, or add shadows or glows.
- Ring text is unreadable below ~150 px, so use the no-ring-text chip there.
- The chip has its own black disc, so it sits fine on both `--paper` (light) and the dark theme. No theme-specific variant needed.
- Always give it `alt="GMOOCA"`, or `alt=""` when the word "GMOOCA" is already next to it.

## How the brand meets this site's design system

The site has an established system (see `CLAUDE.md` › Design system and the tokens in `main.css`): service-manual paper, cabinet ink, **brass as the single accent**, one typeface (Archivo). The logo is artwork, so its crimson and bright gold don't count as CSS accents and don't break the single-accent rule.

| Brand | Hex | Site equivalent | Note |
|---|---|---|---|
| Gold | `#FFD700` | `--brass` `#c4912d` (light) / `#d6a443` (dark) | Logo gold is a gradient from `#FFEB80` to `#947D00`, which reads close to brass. Bright gold fails contrast as text on paper, so `--brass-ink` stays for text |
| Crimson | `#9B1B30` | none | Only in the logo |
| Ink | `#0B0B0C` | `--bezel` `#1d2521` | |
| Wordmark font | Michroma | Archivo 900, `font-stretch: 125%` (current `.wordmark`) | Inside the lockup images only. In the header, keep the Archivo text wordmark |

**Decided:** keep the site's brass palette unchanged.

## Rollout checklist

**Status (branch `brand-kit`):** items 1–6 done; item 7 waits for the forum install. The SVG favicon uses the small icon variant (`icon/gmooca-icon-small.svg`) instead of `icon/favicon.svg`, because it reads better at tab size; the footer mark is applied as a CSS mask instead of inline SVG.

Each item is a separate small commit. Run `npm run build` after each. **Push only when the owner says so** (a push to `main` deploys).

1. **Favicons and app icons.**
   - In `base.njk`, replace `<link rel="icon" href="/assets/favicon.svg" ...>` with links to `/assets/brand/icon/favicon.svg`, `/favicon.ico` (sizes 48x48) and `/apple-touch-icon.png`, plus `<link rel="manifest" href="/site.webmanifest">`.
   - Copy `icon/favicon.ico` and `icon/apple-touch-icon.png` into `src/static/`, which publishes them to the site root where browsers look by default.
   - Add `src/static/site.webmanifest` with name "GMOOCA", `theme_color` `#1d2521`, `background_color` `#1d2521`, and icons `/assets/brand/icon/icon-192.png`, `icon-512.png` and `icon-maskable-512.png` (purpose "maskable").
   - Delete the old `src/assets/favicon.svg` only after the new links work.
2. **Header.** In `partials/header.njk`, put `gmooca-logo-no-ring-text.svg` (36–40 px, `alt=""`, `width`/`height` set) before the existing text "GMOOCA" inside the `.wordmark` link. Align with flex and a small gap. Don't replace the text with the lockup image: the text wordmark keeps the one-typeface rule and stays sharp.
3. **Social sharing.** In `base.njk`, add `og:image` = `{{ site.url }}/assets/brand/og-image.png` with `og:image:width` 1200, `og:image:height` 630 and `og:image:alt`. Change `twitter:card` to `summary_large_image`.
4. **Structured data.** Add `"logo": "{{ site.url }}/assets/brand/gmooca-logo-512.png"` to the Organization JSON-LD in `base.njk`.
5. **About page.** Optionally show `gmooca-logo.svg` (~160 px) at the top of `/about/`. The homepage reels stay the only decorative element on the homepage, so the logo doesn't go into the homepage hero.
6. **Footer.** Optionally show `icon/gmooca-mark.svg` inline at 20 px in `--brass` next to "GMOOCA, Inc.".
7. **Forum.** Once Invision is installed in `/Community`, upload the dark lockup PNG as the forum logo and the same favicon in Invision's admin. That's done in Invision, not in this repo.

# Notes for Claude

This is the gmooca.org website (Eleventy 3, Nunjucks + Markdown, PHP form handlers, deployed to cPanel over FTPS by GitHub Actions on push to `main`). See README.md for the file map.

## Updating project progress (the most common request)

When the owner reports progress on Gaming Manager 2, Gaming Manager 3, the SAS Gateway, or the forums:

1. Edit only that project's entry in `src/_data/projects.json`.
2. Set `phase` to one of its `phases`; rewrite `note` (1–2 plain sentences, present tense, no jargon); set `updated` to today (`YYYY-MM-DD`).
3. Prepend a `log` entry `{ "date": "YYYY-MM-DD", "text": "..." }`. Newest first. One sentence, past tense.
4. Run `npm run build` and confirm it succeeds.
5. Commit with a message like `Projects: SAS Gateway moves to Build`. Push only when asked; a push to `main` deploys to the live site.
6. Optional `next` entries (`{ "label": "2.4", "text": "..." }`) show as "Coming next" on /projects/.

Source notes for the software and hardware live in the owner's Gaming Manager repo (README, docs/ROADMAP.md, docs/TODO.md, CHANGELOG.md, hardware/*/). Translate them for owners: no part numbers, protocol command codes or internal ticket IDs. Never claim certification, regulatory approval, or association membership the owner hasn't confirmed.

Write for owners and collectors, not engineers: say what changed and what's next, not part numbers or protocol internals.

## House rules for content

- No manufacturer or standards-body logos or scanned documents. Names in plain text only, factual use.
- No founder names, no social links (until the owner says otherwise).
- No legal advice; no instructions for bypassing machine security.
- Copy style: plain verbs, sentence case, no hype.
- AI use is acknowledged openly (`/ai/`, footer). Keep that page accurate if how GMOOCA uses AI changes.
- Keep `site.trademarks` (in `src/_data/site.json`) current when a new company or standard is named on the site.

## Design system

Tokens at the top of `src/assets/css/main.css` (light and dark). One typeface: Archivo variable (self-hosted, `wdth` axis used for display). Brass (`--brass`) is the single accent. The homepage reels are the one decorative animation; don't add more.

## Brand (logo and icons)

Read `docs/brand.md` before touching the logo, favicon, header wordmark, social image or brand colors. Files are in `src/assets/brand/` (published at `/assets/brand/`); their source of truth is the `branding/` folder in the Gaming Manager repo, so don't edit them by hand here.

- Crest chip (`gmooca-logo*.svg`) is the logo. The reel chip in `src/assets/brand/icon/` is for favicons and app icons only.
- The logo is artwork: its crimson and gold don't change the CSS single-accent rule, and the header keeps the Archivo text wordmark next to the chip.
- `docs/brand.md` has a rollout checklist. Do it one item per commit and push only when asked.

# Notes for Claude

This is the gmooca.org website (Eleventy 3, Nunjucks + Markdown, PHP form handlers, deployed to cPanel over FTPS by GitHub Actions on push to `main`). See README.md for the file map.

## Updating project progress (the most common request)

When the owner reports progress on Gaming Manager 2 or 3, the SAS Gateway (wired or wireless), TITO Magic, the Player Tracking Unit, or the forums:

1. Edit only that project's entry in `src/_data/projects.json`.
2. Set `phase` to one of its `phases`; rewrite `note` (1–2 plain sentences, present tense, no jargon); set `updated` to today (`YYYY-MM-DD`).
3. Prepend a `log` entry `{ "date": "YYYY-MM-DD", "text": "..." }`. Newest first. One sentence, past tense.
4. Run `npm run build` and confirm it succeeds.
5. Commit with a message like `Projects: SAS Gateway moves to Build`. Push only when asked; a push to `main` deploys to the live site.
6. Optional `next` entries (`{ "label": "2.4", "text": "..." }`) show as "Coming next" on /projects/.

**Check the hardware folder on every project update.** `D:\Claude SAS-G2S app\GMOOCA-Gaming-Manager\hardware\` has one folder per board, each with a `DESIGN-BRIEF.md` (status line at the top), plus `PART-NUMBERING.md` (status of every product). Compare them against `projects.json` and report anything new or changed before editing:

| Hardware folder | Project id |
|---|---|
| `sas-gateway/` | `sas-gateway` |
| `sas-gateway-wireless/` | `sas-gateway-wireless` |
| `tito-board/` | `tito-magic` |
| `player-tracking/` | `player-tracking` |
| `egm-module/` | reference design only, not listed |

Projects with `"home": false` show on /projects/ but not on the homepage (used for early-stage concepts).

Source notes for the software and hardware live in the owner's Gaming Manager repo (README, docs/ROADMAP.md, docs/TODO.md, CHANGELOG.md, hardware/*/). Translate them for owners: no part numbers, protocol command codes or internal ticket IDs. Never claim certification, regulatory approval, or association membership the owner hasn't confirmed.

Write for owners and collectors, not engineers: say what changed and what's next, not part numbers or protocol internals.

## Hardware pages

- `/hardware/` lists every project with `kind: "Hardware"` from `projects.json`; stage labels, feature lists and "What's next" are in `src/_data/hardware.json`. `/hardware/player-tracking/` covers the Home Player Center and Enterprise Floor Module.
- The Gaming Manager repo's `hardware/website-handoff/WEBSITE-HANDOFF.md` and `images/` feed these pages. The handoff is written without knowledge of this site: follow its "do not publish" list, but where it differs from these house rules, the house rules win (no part numbers, chip or supplier names, certification claims, prices or dates).
- Rebuild renders with `python3 tools/make-hardware-images.py <images folder>`. Use the `concept()` macro so every render keeps the "Concept render, not final hardware." caption. GMOOCA model numbers inside the artwork (such as GM-3001) are allowed because the caption says model numbers and versions aren't final; keep them out of the page text. Don't publish an image whose artwork shows chip or supplier names, or certification claims.
- Dated news goes in `src/updates/` (tag `update`). Record site changes in `CHANGELOG.md`.

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

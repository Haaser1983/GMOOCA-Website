# Changelog

Notable changes to gmooca.org. Newest first. Routine project-progress edits to `src/_data/projects.json` are recorded in each project's `log` instead.

## 2026-10-04 — Hardware pages

### Added
- **/hardware/**: one page for all GMOOCA hardware (Home Player Center, SAS Gateway, TITO Magic, Enterprise Floor Module, SAS Gateway Wireless), with a stage label, features, phase bar and note for each. Also a "What's next" list and a cabinet survey prompt. *Why:* the hardware line outgrew the Projects page, and owners asked what each board does.
- **/hardware/player-tracking/**: the Home Player Center and Enterprise Floor Module, with three concept renders. *Why:* player tracking is now the hardware priority.
- **/updates/** and the first post, **October 2026 hardware update**. *Why:* a dated place for news that doesn't fit a project's one-line log.
- Concept renders in `src/assets/hardware/` (WebP at 1200 and 2400 px, JPEG fallback), built by `tools/make-hardware-images.py` from the hardware handoff images. Every render is captioned "Concept render, not final hardware."; renders that show player names or points also say they're sample data.
- `src/_includes/macros.njk` (`concept` figure and `phases` bar) and `src/_data/hardware.json` (stage labels, feature lists, what's next).
- Contact topic "My cabinets (player tracking)", preselected by `/contact/?topic=cabinets`. It goes to sales@ like other general topics.

### Changed
- Navigation: **Hardware** added after Projects. Footer: **Updates** link added.
- Projects: the "Player tracking" concept entry is replaced by **Home Player Center** (Design) and **Enterprise Floor Module** (Design; hidden from the homepage). TITO Magic is noted as on hold. The SAS Gateway note mentions a smaller second revision. Gaming Manager 3 logs the start of player tracking, mini-games and rewards. Hardware entries link to their hardware page.
- `site.trademarks` now names Wi-Fi.

### Not published, and why
The hardware handoff came from the Gaming Manager repo. Where it conflicted with this site's house rules (CLAUDE.md), the site rules won:
- No part numbers, chip names or supplier and board-maker names in copy. The products are called by name only.
- No certification, approval or wallet-support claims. The Enterprise Floor Module is described as "a design in development, not an approved device".
- Three handoff images are held back because their artwork shows chip names, a "certified" wallet claim or a supplier name. They'll be added when re-exported without them.
- No prices, release dates or Gaming Manager version numbers for hardware.

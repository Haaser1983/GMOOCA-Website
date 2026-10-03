# Gaming industry RSS feeds

Checked 2026-10-03. Candidates for a "Recent industry news" section on gmooca.org (headlines + links, refreshed by a daily scheduled rebuild).

## Working

| Feed | URL | Fit | Notes |
|---|---|---|---|
| CDC Gaming | https://cdcgaming.com/feed/ | High | Land-based casino news, G2E coverage, regulators. Several items a day. |
| World Casino News | https://news.worldcasinodirectory.com/feed | High | Casino openings, expansions, slot-floor news. Several items a day. |
| American Gaming Association | https://www.americangaming.org/feed/ | Medium | Industry research and policy. A few posts a month. |
| iGB | https://igamingbusiness.com/feed/ | Low | Mostly online gambling and sports betting. |
| Gambling Insider | https://www.gamblinginsider.com/rss | Low | Mostly betting and online. |

## Listed but unconfirmed

- **Yogonet** — homepage links https://www.yogonet.com/international/rss/, but that address returned a web page, not a feed. Strong land-based coverage; worth retrying.
- **Casino.org News** — https://www.casino.org/news/feed/ likely exists; the site blocked automated checks.

## Avoid

- **Casino Journal** (casinojournal.com/rss) — domain now belongs to a Swedish site promoting unlicensed casinos; newest items from 2023.
- **GGB / Global Gaming Business** (ggbmagazine.com/feed, ggbnews.com/feed) — both return 410 Gone.

## Not checked

- Reddit communities (r/slotmachines, r/SlotTechs) — `https://www.reddit.com/r/<name>/.rss`; automated access blocked.
- Gaming Standards Association news — site timed out.
- Slot Tech Magazine — no working feed found.

## If we add a news section

- Fetch at build time (Eleventy data file), never from visitors' browsers.
- Show headline, source name, date and a link to the original only. No excerpts or images.
- Schedule a daily rebuild in `.github/workflows/deploy.yml` (`schedule: - cron`).

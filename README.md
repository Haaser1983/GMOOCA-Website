# gmooca.org

Website for GMOOCA, Inc. (Gaming Machine Owners, Operators and Collectors Association).

Built with [Eleventy](https://www.11ty.dev/) into plain HTML, plus two small PHP form handlers, for shared cPanel hosting.

## Working on it

```bash
npm install
npm run dev      # local preview at http://localhost:8080 (PHP forms won't run here)
npm run build    # outputs the finished site to _site/
```

## Where things live

| What | File |
|---|---|
| Project progress (Gaming Manager 2 and 3, SAS Gateway, forums) | `src/_data/projects.json` |
| Site name, email, nav, trademark notice, forum-live switch | `src/_data/site.json` |
| Planned forum sections | `src/_data/forums.json` |
| Guides | `src/guides/*.md` |
| Hardware pages | `src/hardware/*.njk`, `src/_data/hardware.json`, renders in `src/assets/hardware/` |
| Updates (news posts) | `src/updates/*.md` |
| Other pages | `src/<page>/index.md` or `index.njk` |
| Shared header, footer, sign-up form | `src/_includes/partials/` |
| Styles | `src/assets/css/main.css` |
| Logo, favicons, social image (usage rules in `docs/brand.md`) | `src/assets/brand/` |
| Form handlers, `.htaccess`, redirects | `src/static/` |
| Forum planning: rules and terms, legal checklist, moderation, seed content (not published) | `Forum/` |
| Research notes (not published) | `docs/` |

## Updating project progress

Edit the project's entry in `src/_data/projects.json`:

- `phase`: one of the names in `phases` (`Plan`, `Design`, `Build`, `Test`, `Release`)
- `note`: one or two sentences on where it stands now
- `updated`: today's date, `YYYY-MM-DD`
- `log`: add a new `{ "date", "text" }` entry at the **top** of the list

The homepage and `/projects/` both rebuild from this file. Push to `main` and it deploys.

## Adding a guide

Create `src/guides/<slug>.md` with front matter like the existing guides (`title`, `summary`, `lede`, `description`, `updated`, `tags: guide`, `permalink`, `order`). It appears on `/guides/`, in the sitemap and in "More guides" automatically.

## Forms

- `contact.php` emails messages to `sales@gmooca.org`, except privacy requests (`compliance@`) and copyright notices (`dmca@`). Mailboxes and routing are set in `src/static/private/forms.php`; the addresses shown on the site are in `src/_data/site.json` (`emails`).
- `notify.php` saves forum-launch sign-ups to `forum-launch-list.csv` in a `gmooca-data` folder **one level above the web root**, so it's never publicly reachable. If that folder can't be created, it falls back to `private/data/`, which `.htaccess` blocks.
- Both use a hidden honeypot field and a per-IP rate limit for spam.
- `FROM_EMAIL` (`no_reply@gmooca.org`) must exist or be allowed to send on the hosting account, or messages may be rejected.

## When the forum software is installed

1. Install it into `/Community` on the server.
2. Set `"communityLive": true` in `src/_data/site.json` and push. The placeholder page is dropped from the build (and removed from the server by the deploy) so it can't override the forum's `index.php`.

## Deployment

`.github/workflows/deploy.yml` builds and uploads `_site/` over FTPS on every push to `main`. Add these repository secrets in GitHub (Settings → Secrets and variables → Actions):

- `FTP_SERVER`: e.g. `ftp.gmooca.org`
- `FTP_USERNAME`, `FTP_PASSWORD`: a cPanel FTP account scoped to the site folder
- `FTP_SERVER_DIR` (optional): remote folder, e.g. `public_html/`. Defaults to the FTP account's root.

## Content rules

- No manufacturer or standards-body logos, and no republished manuals, service documents, firmware or paid standards. Mention companies and protocols by name only to describe them.
- No legal advice. No help bypassing machine security.
- No founder names or personal social accounts on the site for now.

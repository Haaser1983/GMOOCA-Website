# GMOOCA forums: seed content

Starter posts for launch day, so the forums aren't empty. Written by GMOOCA, informed by the questions owners ask most often on established communities (see [`nlg-research.md`](nlg-research.md)). All original, ready to post or edit.

**Suggested structure change:** keep our topic-based sections, and add **platform sub-forums under Machine help** (people look for "my machine" first): IGT S+ / S2000 · IGT Game King / I-Game · IGT AVP (G20, G23, Crystal) · Bally reel and Alpha · Bally electromechanical · WMS / Williams · Aristocrat · Konami · Aruze / Ainsworth / other · Video poker. Start with fewer and split when a sub-forum gets busy.

---

## Pinned posts (write these in full)

### 1. Welcome to GMOOCA: start here
*Section: Announcements and introductions · pinned, locked*

> Welcome. GMOOCA is a place for people who own, run and keep gaming machines: home game rooms, small operators, collectors and the techs who help them.
>
> **Quick start**
> - New here? Say hello in *Introductions*, and tell us what you own and what you're working on.
> - Need help with a machine? Read *How to ask for help* (pinned in Machine help) first; you'll get better answers faster.
> - Proud of your setup? Post it in *Show off your game room*.
>
> **The ground rules, short version**
> Be useful and decent. No legal advice. No help defeating locks, seals, security chips, licensing or accounting. Share only what's yours to share: original work, photos you took and links to official sources, never copyrighted manuals, firmware or game files. No gambling services. The full rules are pinned below.
>
> We're not here to replace the communities you already use. If you're on New Life Games or elsewhere too, great: link good threads, credit the people who helped you, and bring what you learn back.

### 2. How to ask for help (and get a fast answer)
*Section: Machine help · pinned*

> Most "it doesn't work" threads need three or four rounds of questions before anyone can help. Skip them by starting with this:
>
> ```
> Manufacturer and model:     (e.g. IGT S2000 upright, Bally S6000)
> Platform / software:        (game name, software or chip ID if you know it)
> What it does:               (exact error text or code, what lights or sounds)
> What changed:               (moved it, battery died, new part, after a RAM clear…)
> What you've tried:
> Photos:                     (the error screen, the label on the back, the board in question)
> ```
>
> **Before you post:** check the platform's *Start here* thread and search the forum. When it's fixed, edit your title to add **[SOLVED]** and say what fixed it. The next person will thank you.

### 3. What is this machine? Identifying your game
*Section: Machine help · pinned*

> Not sure what you have? These usually tell you:
> - **The serial/ID plate** on the back or inside the main door: manufacturer, model, date of manufacture.
> - **The cabinet style**: upright, slant top, bar top.
> - **The main processor board and its labels**: the platform family (for example S+, S2000, Game King or AVP on IGT machines).
> - **Labels on the program chips or media**: game and software version.
>
> Post clear photos of the outside, the ID plate and the inside of the main door, and someone will help you narrow it down. Please blur anything that looks like an owner's or casino's asset number if you'd rather not share it.

### 4. Buying your first machine: a checklist
*Section: Parts and sourcing · pinned*

> - **Check your state's rules first.** Ownership rules for gaming machines vary a lot by state (some depend on the machine's age). We can't give legal advice, but members can tell you where they looked.
> - **Ask the seller for a video of it powering up, playing, and paying out** (coins, tickets or a handpay).
> - **Ask what's included:** keys (door and reset), the bill validator, the printer or hopper, and the game media.
> - **Ask whether it has been set up for home use** or still expects a casino system (some machines lock up waiting for one).
> - **Plan the move.** These cabinets are heavy and top-heavy. Use a proper dolly and two people, and keep it upright.
> - **Budget for a battery, bulbs or LEDs, and a cleaning** on arrival.

### 5. Connecting machines to software: SAS, G2S and TITO, explained
*Section: Connectivity and protocols · pinned*

> If you've heard "SAS port", "G2S", or "TITO" and wondered what they mean for a machine in your home, start with our plain-language guides:
> - SAS, explained: https://www.gmooca.org/guides/sas/
> - G2S, explained: https://www.gmooca.org/guides/g2s/
>
> Then ask away here. Good topics: cabling and adapters, turning SAS on in the operator menu, home TITO setups, player tracking, and homebrew projects. Please don't post licensed specification documents; link to their official sources instead.

### 6. Full forum rules
*Section: Announcements and introductions · pinned, locked*

> Post Part 1 of [rules.md](rules.md) (Community rules) and link to Part 2 (Community terms) and Part 3 (Marketplace rules).

---

## Starter threads (title + opening post)

Post these from GMOOCA staff accounts over the first two weeks, a few a day, and answer replies quickly.

### Announcements and introductions
- **"Introduce yourself: what's in your game room?"** Tell us your first machine, your favorite machine, and the one that got away.
- **"GMOOCA project update: Gaming Manager, the SAS Gateway and what's next"** Link to /projects/ and invite questions. Repeat monthly.

### Machine help (by platform)
- **"[Start here] IGT S2000: common faults and where to begin"** A short index thread: blank VFD, reel backlight out, coin-in errors, door-open meter, EPROM/CRC errors. One line each on what it usually means, and a link to member threads as they appear.
- **"[Start here] IGT AVP (G20/G23): software, licensing and boot problems"** Covers the theme-not-licensed message, missing system launcher, IPC and controller errors, display issues. Ask members to add what fixed theirs.
- **"[Start here] Bally reel and Alpha"** Same format.
- **"After a battery or RAM clear: what to expect"** Explains why machines ask for setup again, what to have ready (keys, the original settings if you know them), and to note your settings *before* the battery dies.
- **"Quiet fans, LED swaps and other quality-of-life upgrades"** Practical home-use tweaks, with photos.

### Connectivity and protocols
- **"What's your setup? Share how your machines are connected"** Serial adapters, bridges, homebrew boards, Raspberry Pis, Bettor TITO boards, CabiNet, Gaming Manager.
- **"SAS on your machine: how to check it's turned on"** A generic walkthrough: operator menu → communications → SAS address and features. Ask members to add screenshots from their platforms.
- **"Home TITO: what works for you?"** Add-on boards versus a host, ticket printers, which paper, tickets not accepted, and how to fix it.
- **"RS-232 vs RS-422/485 adapters: why your SAS link might not work"** Explains that SAS needs the right serial standard and correct 9-bit wakeup timing, and that many cheap adapters don't manage it.
- **"Player tracking at home: card readers, displays and points"** What people have built, and what's possible.

### Bill validators and printers
- **"Ticket printer troubleshooting: paper, heads and comm errors"** Paper orientation, old or faded stock, cleaning the print head, comm-lost errors.
- **"Bill validator rejects everything: first checks"** Cleaning the sensors, belts, the currency set and firmware, and the cable seating.

### Parts and sourcing
- **"Vendors you trust"** Members recommend shops for parts, glass, keys and repairs. No self-promotion; three-recommendation minimum to make the list.
- **"Moving a slot machine without wrecking it (or your back)"** Dollies, straps, stairs and trailers.
- **"Stands and bases: what's your machine sitting on?"**

### Restoration and builds
- **"Before and after: show your restorations"**
- **"Cleaning cabinets, glass and yellowed plastic"** Products that work, and products that ruined something.
- **"Backing up your game media"** Why to make a backup of media you own, and storing it safely. No sharing of game files.

### Small operators
- **"Record keeping for a small floor"** What people track (meters, drops, handpays, maintenance) and how.
- **"Preventive maintenance schedules"** A monthly and yearly checklist thread.

### Rules and regulations (discussion only)
- **"Where to find your state's rules"** Members share links to official state sources; no legal advice, reminder pinned.

### GMOOCA projects
- **"Gaming Manager feedback and feature requests"**
- **"Bench machines wanted: help us test"** Invite owners of specific platforms to report compatibility once beta builds exist.

---

## Download library: launch set

GMOOCA-written only:
- The SAS and G2S guides as printable PDFs
- "How to ask for help" template (text)
- Buying-your-first-machine checklist (PDF)
- Preventive maintenance checklist (PDF)
- Generic SAS cable diagrams **we draw ourselves** from bench-verified pinouts (no copied manufacturer drawings)

## Launch-day targets

- 20–30 seeded topics across at least 6 sections, at least 10 with staff replies already in the thread
- Every pinned post live before registration opens
- Invite the people listed in [`nlg-research.md`](nlg-research.md) personally, before public launch

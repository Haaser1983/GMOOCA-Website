# New Life Games (NLG): research notes

Looked through 2026-10-03 as a guest (public pages only). Purpose: learn what the established community already does well, where GMOOCA can add to it, and what to seed our own forums with. **Nothing here is copied for publication.** NLG's posts belong to their authors; we write our own material.

## What NLG is

- **New Life Games LLC**, a family-owned slot shop in Bullhead City, AZ (repair, restoration, parts, sales). The forum runs at newlifegames.com/nlg/ (Simple Machines Forum), with older archives at newlifegames.net/nlg/.
- Founder Joey Carruthers (1966–2021) is memorialized on the homepage. The forum is still very active: ~770 guests online on a Friday night, new posts hourly.
- Funded by **contributing member subscriptions and donations**. Banner ads are not sold; they're given to trusted members. Only contributing members can start classified ads.
- Has its own downloads section, a members' photo "hall of fame", an events calendar and regional get-together boards, member repair-log boards, and an RSS-fed news board.

## Where the activity is (top boards by posts)

| Board | Topics | Posts |
|---|---|---|
| Classified ads and White Sheet | 15,634 | 55,036 |
| IGT S2000 and Vision | 3,387 | 29,454 |
| IGT S and S-plus reel | 2,537 | 28,629 |
| Bally electromechanical | 1,188 | 16,118 |
| IGT I-Game and Game King | 1,788 | 13,000 |
| WMS video | 1,979 | 12,046 |
| Bally reel | 1,697 | 11,481 |
| IGT AVP (incl. G20, G23) | 934 | 6,497 |
| Bally Alpha reel | 849 | 5,601 |
| General chat / tech talk | 823 | 5,204 |

Takeaways:
- **Buying and selling is the single biggest draw**, by a wide margin.
- **Help is organized by manufacturer and platform** (60+ boards), not by topic. People look for "my machine", not "connectivity".
- Older reel platforms (IGT S+/S2000, Bally) dominate. Modern video (AVP/G23) is smaller but current.

## Directly relevant to GMOOCA

**"NLG Homebrew Player Tracking and EFT Systems"** (moderator: foster; 87 topics, 612 posts) is where GMOOCA's audience already lives. Threads include:
- SAS CRC routines, BCD conversion, long-poll behavior, 9-bit serial on Windows/Python, compiler choices
- Homebrew TITO (Arduino and Windows), homebrew EFT, Bally Mastercom 250/300 player-tracking units
- Serial cable pinouts (IGT S2000 J82 to DB9), Bally Alpha serial interface and power
- A pointer to the **Montana SAS implementation guide** (a public state regulator document)
- **"CabiNet - Home/Hobbyist Host"**: AJ's announcement thread for CabiNet, well received; staff pinned it in the senior members section
- **"Anyone interested in helping to do a full open source SAS implementation?"** (user *bogan*, 2025): a .NET/C# 9-bit driver proven on QCOM, with plans to open-source a SAS implementation and a web interface
- **"G2S Software development"**: two members building a collector-market G2S app because "every solution… is priced for casinos" and the documentation route was an expensive association membership

That last point is the gatekeeping problem in members' own words.

**People worth reaching out to** (public usernames, for introductions, not recruiting from their threads):
- **AJ** (CabiNet), already planned
- **bogan**: open-source SAS/QCOM in .NET, same stack as Gaming Manager
- **foster**: moderator of the homebrew board
- The G2S Software development thread authors

Approach: introduce GMOOCA in NLG's General Chat or the homebrew board as a fellow builder, credit NLG, and ask what people want. Follow NLG's rules: no advertising outside the classifieds; banner placement is by invitation only.

## Most common questions (from current topic titles)

Good material for our guides and our seed threads, answered in our own words:

1. **"Identify this machine"**: make, model, platform, year from photos and labels
2. **Setup after a battery or RAM clear**: "Configuration verification required", ram-clear and re-setup procedures, keys
3. **Bill validator and printer comms errors**: JCM WBA/iVizion, MEI, Epic 950, JCM Gen 2/Gen 5; paper loading, faded tickets, firmware questions
4. **Home TITO**: getting ticket-in/ticket-out working with add-on boards (Bettor Slots/Gambler's Oasis and Arduino builds), tickets not accepted
5. **AVP/G23 software and licensing**: loading games, IPC/controller errors, "game theme not licensed", no system launcher found
6. **S2000 faults**: VFD blank, reel backlight out, coin-in errors, door-open meter, EPROM CRC errors
7. **Paytables and odds**: "how do I change the odds", PAR sheets, percentage chips, reel strips
8. **Parts sourcing**: toppers, glass, buttons, stands, dollies, quiet fans, cleaning products
9. **Backups**: cloning CF cards, backing up BIOS, write-protecting media
10. **Manual and PSR requests**: very frequent. GMOOCA's rules don't allow sharing copyrighted manuals, so we should point to legitimate sources (manufacturer, distributors, regulator-published documents).

## Ideas to borrow (and improve)

- **"Look here first" FAQ stickies per platform.** NLG's S2000 board has one. We can make ours living guides, kept current by moderators.
- **Show off your game room** and **before/after restoration** boards: high engagement, low moderation load.
- **Member repair-log boards**: a named topic per prolific tech.
- **Regional meetups/events.**
- **Classifieds with buyer-protection guidance and contributor-only posting** to reduce scams.
- **A short "how to ask for help" template**: make, model, platform, software version, error text, photos.

Where GMOOCA can add something NLG doesn't:
- **Plain-language guides** linked from threads, instead of answers scattered across 15 years of posts
- **Connectivity as a first-class subject** (SAS, G2S, TITO, player tracking) with our own tools behind it
- **A path to real software and hardware** for the problems the homebrew board keeps solving one-off
- **Modern login, search and mobile layout**

## Don't

- Don't copy posts, photos, PSRs or downloads (including IGT's SAStest utility) into GMOOCA.
- Don't scrape NLG; link to it.
- Don't poach members or post promotions on NLG outside its rules.

## Public reference worth linking from our guides

- Montana Department of Justice, Gambling Control Division, VGM and Tier 1 resources: https://dojmt.gov/gaming/vgm-tier1-testing

---
title: SAS, explained
summary: The serial link that lets a machine report meters, events and vouchers. Found on nearly every machine built since the late 1990s.
lede: SAS is how a slot machine talks to the system that keeps track of it. If your machine came off a casino floor, it almost certainly speaks SAS, even sitting in your game room.
description: A plain-language guide to the SAS slot machine protocol. What SAS does, what information a machine shares over it, and what it means for home owners and small operators.
updated: 2026-10-03
tags: guide
permalink: /guides/sas/
order: 1
---

## What SAS is

SAS stands for Slot Accounting System. It was originally developed by IGT in the 1990s and became the common language that casino systems use to talk to slot machines from nearly every manufacturer. Most machines built since the late 1990s include it, whether or not anything is plugged into it.

Think of it as a phone line between the machine and a computer. The machine doesn't call out on its own. Instead, the computer (called the *host*) checks in many times a second, and the machine answers with whatever has happened since the last check.

<figure class="diagram">
  <svg viewBox="0 0 640 200" role="img" aria-labelledby="sas-fig-t">
    <title id="sas-fig-t">A host computer connected to one slot machine by a serial cable. The host sends a question; the machine sends back an answer.</title>
    <rect x="20" y="40" width="150" height="120" rx="10" class="d-box"/>
    <text x="95" y="95" class="d-label">Slot machine</text>
    <text x="95" y="118" class="d-sub">answers</text>
    <rect x="470" y="40" width="150" height="120" rx="10" class="d-box"/>
    <text x="545" y="95" class="d-label">Host system</text>
    <text x="545" y="118" class="d-sub">asks</text>
    <line x1="170" y1="100" x2="470" y2="100" class="d-wire"/>
    <text x="320" y="128" class="d-sub">one serial cable per machine</text>
    <path d="M455 72 H190" class="d-arrow" marker-end="url(#sas-ah)"/>
    <text x="322" y="62" class="d-note">"Anything new?"</text>
    <path d="M185 160 H450" class="d-arrow d-arrow-alt" marker-end="url(#sas-ah)"/>
    <text x="320" y="186" class="d-note">"Door opened. $20 bill accepted. Meters attached."</text>
    <defs><marker id="sas-ah" viewBox="0 0 10 10" refX="9" refY="5" markerWidth="7" markerHeight="7" orient="auto-start-reverse"><path d="M0 0 L10 5 L0 10 z" class="d-head"/></marker></defs>
  </svg>
  <figcaption>SAS is a conversation the host always starts. One cable, one machine.</figcaption>
</figure>

## What a machine shares over SAS

- **Meters.** The running totals every machine keeps: money in, money out, games played, games won, jackpots and handpays, bills accepted by denomination.
- **Events.** Things that just happened: a door opened, a bill was accepted or rejected, the printer ran out of paper, power was lost and restored.
- **Vouchers.** Ticket-in, ticket-out (TITO) printing and redemption rely on SAS to check each ticket with the host before it's paid.
- **Control.** A host can lock or unlock a machine, add credits for a bonus or promotion, or clear a handpay remotely, if the machine is set up to allow it.

## Why it matters to an owner

Casinos plug every machine into an accounting system through SAS. When a machine leaves the floor, that connection is gone, but the SAS port is still there. With the right hardware and software you can read your own machine's meters without opening the cabinet, keep a history of play, spot problems like a bill validator that keeps rejecting notes, and track a small group of machines from one screen.

Most owners never touch SAS because, until now, the tools to use it were built for casinos and priced for them.

## A few things to know before connecting anything

- **SAS has to be turned on.** Each machine has a SAS setup in its operator menu, including an address number and which features are allowed. Many retired machines arrive with SAS disabled or set for a casino system that no longer exists.
- **The physical connection varies.** Depending on the manufacturer and era, the SAS port might be a dedicated connector on the main board or a communication card inside the cabinet. The cable and adapter you need depend on your machine.
- **Settings live behind the machine's security.** Changing SAS options usually requires the machine's operator access. We don't publish ways around a machine's security, and we don't host manufacturer manuals; check your machine's own documentation.
- **Rules vary by state.** Owning, connecting and operating machines is regulated differently everywhere. Check your state's rules before you use a machine for anything beyond personal use. Nothing here is legal advice.

## What GMOOCA is building for SAS

Two of our projects use SAS directly:

- **[GMOOCA Gaming Manager 2](/projects/#gaming-manager)** is Windows software that acts as the host. It reads meters and events, handles TITO tickets and credit transfers, keeps a history, and is designed for one machine in a game room up to a small floor.
- **[The GMOOCA SAS Gateway](/projects/#sas-gateway)** is a small box that connects a machine's SAS port to your home or business network with one Ethernet cable, which also powers it, so you don't need to run a serial cable to every machine.

Gaming Manager has already been tested over SAS on real machines on our bench, and [Gaming Manager 3](/projects/#gaming-manager-3) will extend it for enterprise and regulated operators. You can follow progress on the [projects page](/projects/).

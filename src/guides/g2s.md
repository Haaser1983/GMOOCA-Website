---
title: G2S, explained
summary: The newer network-based standard, how it differs from SAS, and why most home machines will never use it.
lede: G2S was designed to replace the one-cable-per-machine model of SAS with machines that live on a network. It's powerful, but you're unlikely to meet it outside a large casino.
description: A plain-language guide to the G2S (Game to System) protocol for slot machines. How it differs from SAS, where it's used, and what it means for owners and small operators.
updated: 2026-10-02
tags: guide
permalink: /guides/g2s/
order: 2
---

## What G2S is

G2S stands for Game to System. It's an open standard published by the Gaming Standards Association (GSA), an industry group made up of manufacturers, casino operators and system suppliers. It first appeared in the mid-2000s.

Where [SAS](/guides/sas/) is a back-and-forth over a single serial cable, G2S machines connect to an ordinary computer network, the same kind of Ethernet you have at home. Messages are longer and more descriptive, and either side can start the conversation.

<figure class="diagram">
  <svg viewBox="0 0 640 220" role="img" aria-labelledby="g2s-fig-t">
    <title id="g2s-fig-t">Three slot machines and a host system all connected to a network switch.</title>
    <rect x="20" y="20" width="130" height="50" rx="8" class="d-box"/><text x="85" y="51" class="d-label">Machine</text>
    <rect x="20" y="85" width="130" height="50" rx="8" class="d-box"/><text x="85" y="116" class="d-label">Machine</text>
    <rect x="20" y="150" width="130" height="50" rx="8" class="d-box"/><text x="85" y="181" class="d-label">Machine</text>
    <rect x="265" y="85" width="110" height="50" rx="8" class="d-box d-box-alt"/><text x="320" y="116" class="d-label">Network</text>
    <rect x="490" y="70" width="130" height="80" rx="10" class="d-box"/><text x="555" y="107" class="d-label">Host system</text><text x="555" y="128" class="d-sub">one or many</text>
    <path d="M150 45 C210 45 210 100 265 105" class="d-wire"/>
    <path d="M150 110 H265" class="d-wire"/>
    <path d="M150 175 C210 175 210 120 265 115" class="d-wire"/>
    <path d="M375 110 H490" class="d-wire"/>
  </svg>
  <figcaption>G2S machines share one network. Several systems can talk to the same machine, each about its own job.</figcaption>
</figure>

## How it differs from SAS

| | SAS | G2S |
|---|---|---|
| Connection | One serial cable per machine | Standard network (Ethernet) |
| Who starts the conversation | Always the host | Either side |
| Systems per machine | Usually one | Several, each with its own role |
| Typical use | Nearly every machine, casino or not | Newer machines in larger casinos |
| Changing a game or setting | At the machine | Can be done remotely, if allowed |

The biggest practical difference is that last row. G2S was built so a casino could change a machine's denomination, settings or even its game from a back office, without opening the cabinet. That's the idea behind what the industry calls server-based gaming.

## Why most owners won't use it

G2S is real and in use, but adoption has been slower than SAS. Many casinos still run SAS for accounting even on machines that support both. For a home owner, G2S usually isn't an option at all:

- Plenty of machines don't support it, especially older cabinets.
- On machines that do, it often needs to be enabled or licensed by the manufacturer or the original operator.
- It needs a G2S host system to talk to, and those have historically been built for large casinos.

If your machine supports SAS, SAS is where you'll get results today.

## What GMOOCA is planning for G2S

G2S support is on the roadmap for [GMOOCA Gaming Manager Pro 2](/projects/#gaming-manager), so that operators with newer equipment can manage SAS and G2S machines from the same place. Our first priority is solid SAS support, since that's what nearly every owner can use. We'll post progress on the [projects page](/projects/) as G2S work begins.

"""Resize the hardware concept renders for the web.

Sources are the 2400x1520 PNG exports in the Gaming Manager repo
(hardware/website-handoff/images/). Ask the owner for new exports rather than
editing them. Usage:
    python3 tools/make-hardware-images.py "<path to images folder>"
Writes <name>-1200.webp, <name>-2400.webp and <name>-1200.jpg into
src/assets/hardware/.
"""
import sys
from pathlib import Path
from PIL import Image

# source file -> published name. Only renders cleared for the public site.
IMAGES = {
    "Main.png": "player-center-cabinet",
    "Insert-Front.png": "player-center-insert",
    "UI-Screens.png": "player-screens",
}
src = Path(sys.argv[1])
out = Path(__file__).resolve().parent.parent / "src/assets/hardware"
out.mkdir(parents=True, exist_ok=True)
for file, name in IMAGES.items():
    im = Image.open(src / file).convert("RGB")
    for w in (1200, 2400):
        h = round(im.height * w / im.width)
        im.resize((w, h), Image.LANCZOS).save(out / f"{name}-{w}.webp", quality=86, method=6)
    im.resize((1200, round(im.height * 1200 / im.width)), Image.LANCZOS).save(out / f"{name}-1200.jpg", quality=84, optimize=True, progressive=True)
    print("wrote", name)

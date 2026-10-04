"""Build src/assets/brand/og-image.png (1200x630 social card) from the dark lockup.

The lockup comes from the Gaming Manager repo's branding/ build; this only
places it on the brand ink background. Run after refreshing brand files:
    python3 tools/make-og-image.py
"""
from pathlib import Path
from PIL import Image

ROOT = Path(__file__).resolve().parent.parent
BRAND = ROOT / "src/assets/brand"
W, H, INK = 1200, 630, (11, 11, 12)  # brand Ink #0B0B0C

lockup = Image.open(BRAND / "gmooca-lockup-dark-transparent.png").convert("RGBA")
target_w = 1000
lockup = lockup.resize((target_w, round(lockup.height * target_w / lockup.width)), Image.LANCZOS)

card = Image.new("RGBA", (W, H), INK + (255,))
card.alpha_composite(lockup, ((W - lockup.width) // 2, (H - lockup.height) // 2))
card.convert("RGB").save(BRAND / "og-image.png", optimize=True)
print("wrote", BRAND / "og-image.png")

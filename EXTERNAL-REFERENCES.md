# External References Audit — Bluetest WP Theme (China Site)

**Generated:** 2026-06-16
**Purpose:** Identify every file that references resources hosted *outside* this theme, so they can be replaced or removed for the China deployment (China blocks Google, YouTube, jsDelivr, Webflow CDN, etc.).

## How to read this

References are grouped by **priority / impact**, not just by file:

- **P1 — Render-breaking.** Loaded on every page (`<head>` / footer). Blocked in China → broken fonts, missing scripts, hung page loads. **Fix first.**
- **P2 — CMS content (Webflow CDN).** Images, PDFs, videos pointing at `website-files.com` / Cloudflare Stream. Pages render but media is missing/broken.
- **P3 — Theme asset files (CSS/JS).** Hardcoded external URLs inside the bundled Webflow CSS/JS.
- **P4 — Content hyperlinks.** Social + external company links. Won't break rendering; some (YouTube, Facebook, X) are still blocked and should be reviewed.
- **P5 — Dev/plugin files & code comments.** Not loaded at runtime. Safe to ignore for the China fix, listed for completeness.

> **Not counted as external:** XML namespace identifiers like `http://www.w3.org/2000/svg`, `http://www.w3.org/1999/xlink`, and `https://schema.org` (JSON-LD `@context`). These are *identifiers*, not network requests — they are never fetched and are safe to leave.

---

## P1 — Render-breaking external resources (FIX FIRST)

These are injected into the page `<head>` and footer on every load.

### 1a. `<head>` templates — `template-parts/head/*.php`

**Every one of the 25 head files** below references the same set of external resources:

| Resource | URL | What it is |
|---|---|---|
| Google WebFont loader | `https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js` | Loads Google Fonts (Inter, Space Grotesk) via `WebFont.load(...)` |
| Google Fonts (preconnect) | `https://fonts.googleapis.com` | Font CSS host |
| Google Fonts (preconnect) | `https://fonts.gstatic.com` | Font file host |
| Google reCAPTCHA | `https://www.google.com/recaptcha/api.js` | Form spam protection |
| Google Tag Manager | `https://www.googletagmanager.com/gtm.js?id=GTM-NBPQJZZR` | Analytics/tag manager |
| Swiper CSS | `https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css` | Slider styles |
| Finsweet components | `https://cdn.prod.website-files.com/695d8a0f3a0ee4e2a74a0595%2F6544eda5f000985a163a8687%2F69887a0a024c5e9e6301e933%2Ffinsweetcomponentsconfig-1.0.0.js` | Webflow/Finsweet component loader |
| Logo (JSON-LD) | `https://cdn.prod.website-files.com/695d8a0f3a0ee4e2a74a0595/6962bfa2e0e1b33022b1b27d_Logo.png` | Org logo inside schema.org structured data |

**Files (all 25):**

```
template-parts/head/401.php
template-parts/head/404.php
template-parts/head/front-page.php
template-parts/head/page-about-us.php
template-parts/head/page-accessories.php
template-parts/head/page-automotive.php
template-parts/head/page-careers.php
template-parts/head/page-contact.php
template-parts/head/page-defense.php
template-parts/head/page-environmental-policy.php
template-parts/head/page-flow.php
template-parts/head/page-iot-wlan-bluetooth.php
template-parts/head/page-medical-technology.php
template-parts/head/page-newss.php
template-parts/head/page-privacy-policy.php
template-parts/head/page-style-guide.php
template-parts/head/page-technologyy.php
template-parts/head/page-telecommunication.php
template-parts/head/page-temp.php
template-parts/head/search.php
template-parts/head/single-key-feature.php
template-parts/head/single-news.php
template-parts/head/single-technology.php
template-parts/head/taxonomy-accessory.php
template-parts/head/taxonomy-chamber.php
```

> A few head files contain an **extra** `cdn.prod.website-files.com` image (e.g. an `og:image` social-preview) or an extra `cdn.jsdelivr.net` reference. `page-about-us.php` and `page-contact.php` also include a `www.linkedin.com` profile link in meta. The core set above is identical across all of them.

### 1b. Footer templates — `template-parts/footer/*.php`

| Resource | URL | What it is |
|---|---|---|
| GSAP | `https://cdn.prod.website-files.com/gsap/3.15.0/gsap.min.js` | Animation engine |
| GSAP SplitText | `https://cdn.prod.website-files.com/gsap/3.15.0/SplitText.min.js` | GSAP plugin |
| GSAP ScrollTrigger | `https://cdn.prod.website-files.com/gsap/3.15.0/ScrollTrigger.min.js` | GSAP plugin |
| Lenis | `https://cdn.jsdelivr.net/gh/studio-freight/lenis@1.0.23/bundled/lenis.min.js` | Smooth scrolling |
| Swiper JS | `https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js` | Slider library |
| Udesly ad banner | `https://cdn.jsdelivr.net/npm/udesly-ad-banner@0.0.4/loader/index.js` | Udesly "made with" banner loader |

**Files:**

```
template-parts/footer/front-page.php        (all 6 above)
template-parts/footer/page-newss.php         (all 6 above)
template-parts/footer/page-technologyy.php   (all 6 above)
template-parts/footer/single-technology.php  (all 6 above)
template-parts/footer/single-key-feature.php (only the Udesly banner: cdn.jsdelivr.net/npm/udesly-ad-banner@0.0.4/...)
```

---

## P2 — CMS content referencing Webflow CDN

These are content/data files exported from Webflow. They reference images, PDFs and videos on `cdn.prod.website-files.com` (and one Cloudflare Stream video). Pages will load, but **media will 404 in China**.

### `_data/data.json` — the big one (≈207 external URLs)

- **159** image / PDF assets on `https://cdn.prod.website-files.com/69716b57f8915e144ff6bfda/...` (product photos, accessory images, datasheets, white papers, news images, GIFs, etc.)
- Plus content hyperlinks (see P4) to `bluetest.se`, `customerweb.bluetest.se`, partner sites, YouTube, etc.

This file holds the CMS records imported into WordPress. The `website-files.com` assets here should be downloaded into `assets/` and the URLs rewritten (or re-imported through the WP media library).

### `_data/frontend-editor/*.json`

These per-template editor files each embed the **footer/social link block** plus, in a few cases, Webflow placeholder/static assets:

| File | External hosts referenced |
|---|---|
| `_data/frontend-editor/front-page.json` | linkedin, facebook, x.com, instagram, youtube, customerweb.bluetest.se, **customer-wxu3g01bfxaadfzb.cloudflarestream.com** (video) |
| `_data/frontend-editor/page-about-us.json` | linkedin (×2), facebook, x.com, instagram, youtube, customerweb.bluetest.se, www.es-france.com |
| `_data/frontend-editor/page-contact.json` | linkedin (×2), facebook, x.com, instagram, youtube, customerweb.bluetest.se, www.es-france.com |
| `_data/frontend-editor/page-accessories.json` | linkedin, facebook, x.com, instagram, youtube, customerweb.bluetest.se |
| `_data/frontend-editor/page-automotive.json` | (same social set) |
| `_data/frontend-editor/page-careers.json` | (same social set) |
| `_data/frontend-editor/page-defense.json` | (same social set) |
| `_data/frontend-editor/page-environmental-policy.json` | (same social set) |
| `_data/frontend-editor/page-flow.json` | (same social set) |
| `_data/frontend-editor/page-iot-wlan-bluetooth.json` | (same social set) |
| `_data/frontend-editor/page-medical-technology.json` | (same social set) |
| `_data/frontend-editor/page-newss.json` | (same social set) |
| `_data/frontend-editor/page-privacy-policy.json` | (same social set) |
| `_data/frontend-editor/page-technologyy.json` | (same social set) |
| `_data/frontend-editor/page-telecommunication.json` | (same social set) |
| `_data/frontend-editor/single-news.json` | (same social set) |
| `_data/frontend-editor/single-technology.json` | (same social set) |
| `_data/frontend-editor/taxonomy-accessory.json` | (same social set) |
| `_data/frontend-editor/taxonomy-chamber.json` | (same social set) + `d3e54v103j8qbb.cloudfront.net` (×2, Webflow static SVGs) |
| `_data/frontend-editor/401.json` | `d3e54v103j8qbb.cloudfront.net` (utility-lock SVG) |
| `_data/frontend-editor/404.json` | `d3e54v103j8qbb.cloudfront.net` (page-not-found SVG) |
| `_data/frontend-editor/page-style-guide.json` | `finsweet.com` (×3 docs links), `d3e54v103j8qbb.cloudfront.net`, `webflow.partnerlinks.io` |

> The "same social set" = `www.linkedin.com/company/bluetest-ab/`, `www.facebook.com/bluetestab`, `https://x.com/BluetestAB`, `www.instagram.com/bluetest_ab/`, `https://www.youtube.com/`, `https://customerweb.bluetest.se/customerweb/login/`.

---

## P3 — Theme asset files (CSS / JS) with hardcoded external URLs

### `assets/css/bluetest-2-0.webflow.css`
- `https://d3e54v103j8qbb.cloudfront.net/static/custom-checkbox-checkmark.589d534424.svg` (checkbox `background-image`)
- `https://d3e54v103j8qbb.cloudfront.net/img/background-image.svg` (`background-image`)

### `assets/js/webflow.js`
- `https://d3e54v103j8qbb.cloudfront.net/img/webflow-badge-icon-d2.89e12c322e.svg` (Webflow badge icon)
- `https://d3e54v103j8qbb.cloudfront.net/img/webflow-badge-text-d2.c82cec3b78.svg` (Webflow badge text)
- `https://webflow.com?utm_campaign=brandjs` (badge link)
- `https://webflow.com/api/v1/form/` and `https://formdata.webflow.com` (Webflow form submission endpoints — **forms will fail in China**)
- `https://challenges.cloudflare.com/turnstile/...` (Cloudflare Turnstile captcha)

### `assets/css/webflow.css`
- **No real external references.** The matches found (`//9...`, `//f...`) are base64-encoded font data inside the file, not URLs. (The only `http://www.w3.org/2000/svg` entries are XML namespaces — ignore.)

### `assets/css/normalize.css`
- **Clean** — no external references.

---

## P4 — Content hyperlinks (review, not render-breaking)

These appear mainly inside `_data/data.json` (CMS content) and a couple of head meta tags. They are `<a href>`-style links — the page still renders, but the **blocked ones** (YouTube, Facebook, X/Twitter, Google) won't open for China users, and `bluetest.se` links point back at the global site.

**Bluetest's own sites (decide: repoint to China domain or keep):**
`bluetest.se`, `www.bluetest.se`, `customerweb.bluetest.se` (33 customer-web links incl. `/customerweb/login/`)

**Social (blocked in China):**
`www.linkedin.com/company/bluetest-ab/`, `www.facebook.com/bluetestab`, `x.com/BluetestAB`, `www.instagram.com/bluetest_ab/`, `www.youtube.com/` + several `youtube.com/embed/...` video embeds, `www.facebook.com/thelocal/videos/...`, `twitter.com` (in plugin docs)

**External partner / press / reference links (in `_data/data.json`):**
`www.anritsu.com`, `www.rohde-schwarz.com`, `www.press.rohde-schwarz.com`, `www.keysight.com`, `www.ni.com`, `www.chalmers.se`, `www.es-france.com`, `www.es.aau.dk`, `www.ericsson.com`, `www.testteknik.se`, `www.toyo.co.jp`, `www.fastech-india.com`, `www.microwaveroad.se`, `www.quamcom.se`, `www.windtre.it`, `vetenskapsfestivalen.se`, `hitechbv.nl`, `online.fliphtml5.com`, `www.researchgate.net`, `webflow.partnerlinks.io`, `finsweet.com`

---

## P5 — Dev/plugin files & code comments (NOT loaded at runtime — lowest priority)

These references live in plugin source, changelogs, and PHP doc-comments. They are **not fetched when the site renders**, so they don't affect China rendering. Listed only for completeness.

### `functions.php`
- `https://codex.wordpress.org/Theme_Logo` — doc-comment `@link` (harmless)
- `https://github.com/udesly-adapter/udesly-wp-app/archive/master.zip` — TGMPA plugin install source. Only hit **once, in wp-admin**, when installing the bundled "Udesly App" plugin. Not a front-end request, but note it if the admin install needs to run inside China.

### `tgm-plugin/` (TGM Plugin Activation library — bundled dependency)
- `tgm-plugin/CHANGELOG.md` — ~198 links (mostly `github.com`) — changelog text only
- `tgm-plugin/README.md` — ~18 links (github, twitter, travis-ci, etc.) — docs only
- `tgm-plugin/LICENSE.md` — `fsf.org` — license text
- `tgm-plugin/class-tgm-plugin-activation.php` — `core.trac.wordpress.org`, `developer.wordpress.org`, `tgmpluginactivation.com`, `php.net`, `example.com`, `github.com` — all inside PHP comments / example strings

---

## Summary counts (unique external URLs by host)

| Host | Count | Category |
|---|---|---|
| cdn.prod.website-files.com | 207 | P1 scripts + P2 media |
| github.com | 193 | P5 docs/install |
| cdn.jsdelivr.net | 42 | P1 scripts |
| customerweb.bluetest.se | 33 | P4 links |
| www.googletagmanager.com | 25 | P1 analytics |
| fonts.gstatic.com | 25 | P1 fonts |
| fonts.googleapis.com | 25 | P1 fonts |
| www.google.com (recaptcha) | 25 | P1 captcha |
| ajax.googleapis.com | 25 | P1 webfont loader |
| www.linkedin.com | 25 | P4 social |
| www.youtube.com | 23 | P4 social/embeds |
| www.facebook.com | 20 | P4 social |
| bluetest.se | 19 | P4 own-site links |
| x.com | 19 | P4 social |
| www.instagram.com | 19 | P4 social |
| d3e54v103j8qbb.cloudfront.net | 9 | P2/P3 Webflow static |
| tgmpluginactivation.com | 8 | P5 docs |
| (partner/press/dev hosts) | 1–6 each | P4/P5 |

**Bottom line for the China fix:** Priorities **P1** (head + footer templates) and **P3** (CSS/JS asset files) must be localized — host the fonts, GSAP, Swiper, Lenis, and Webflow static SVGs locally; remove GTM, reCAPTCHA, the Udesly banner, and Webflow form endpoints (or swap for China-friendly equivalents). **P2** (Webflow CDN media in `_data`) should be downloaded into the theme and the URLs rewritten. **P4** is a content/business decision. **P5** can be left alone.

---

# P1 Remediation — APPLIED (2026-06-17)

First pass complete: **P1 render-breaking references removed/localized in all 25 head + 5 footer templates.** PHP tags verified balanced; no blocked hosts remain in head/footer.

## Self-hosted (downloaded into the theme)
- **Fonts** → `assets/fonts/*.woff2` (Inter, Space Grotesk — variable, latin + latin-ext) + `assets/css/fonts.css`. Replaces `ajax.googleapis.com` webfont loader, `fonts.googleapis.com`/`gstatic.com` preconnects, and the `WebFont.load()` call.
- **GSAP + SplitText + ScrollTrigger** (3.15.0) → `assets/js/`. (Kept because Webflow's `visibility:hidden` IX guard hides content until these run.)
- **Swiper 9** → `assets/js/swiper-bundle.min.js` + `assets/css/swiper-bundle.min.css`. (Needed for product sliders.)

## Removed permanently
- **Google Tag Manager** (GTM-NBPQJZZR) — whole block.
- **Google reCAPTCHA** (`google.com/recaptcha/api.js`).
- **Udesly ad-banner** (`udesly-ad-banner` module import).
- **Lenis** smooth-scroll (`studio-freight/lenis`) + its inline init. Page now scrolls natively.
- **Finsweet** components loader (`finsweetcomponentsconfig`) + `@finsweet/attributes@2` + `@finsweet/attributes-richtext@1`.

## Still open (NOT render-breaking — left for later passes)
- **Finsweet follow-up:** `fs-list` / `fs-table` / `fs-richtext` features (CMS list filtering/sorting/load-more, richtext enhancements) will no longer run. Needs a WP-native replacement or self-hosted Finsweet if those interactions are required.
- **JSON-LD logo** (`...website-files.com/.../Logo.png`) + LinkedIn `sameAs` remain inside `<script type="application/ld+json">` in some head files — structured data only, not fetched for rendering. (SEO metadata; localize later if desired.)
- **P2 (CMS media on `cdn.prod.website-files.com`), P3 (webflow.js/CSS cloudfront SVGs + Webflow form endpoints), P4 (content links)** — untouched in this pass.

## Verify on the live China site
- Confirm fonts render (Inter/Space Grotesk), sliders work, and entrance animations reveal content (the IX visibility guard).
- Confirm contact forms — reCAPTCHA was removed; Webflow form endpoints (P3, in `webflow.js`) still need handling for submissions to work.

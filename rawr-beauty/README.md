# RAWR Beauty — WordPress Theme

A bespoke, production-grade WordPress theme recreation inspired by RAWR Beauty's multi-faceted beauty business architecture (26+ Salon Locations, Mobile Doorstep Therapy, WooCommerce Store, Training Academy, Therapist Careers, and Franchise Network).

---

## 🌟 Key Architecture & Features

1. **Hybrid Architecture (WordPress PHP + React/JSX)**
   - **WordPress PHP** handles SEO, canonical metadata, page templates, WooCommerce layouts, and CPT database schemas.
   - **React / JSX** powers interactive frontend widgets:
     - `LocationFinder.jsx`: Real-time salon search, postcode filter, branch open/closed status.
     - `BookingWidget.jsx`: Interactive treatment selection, home service or salon choice, and pre-filled 1-click WhatsApp booking.
     - `ProductFilter.jsx`: AJAX e-commerce filtering.
     - `CartDrawer.jsx`: Slide-out shopping bag.
     - `MobileMenu.jsx` & `Search.jsx`.

2. **Custom Post Types (CPTs)**
   - `location`: 26 UK salon branches + mobile home coverage with status: `Active`, `Coming Soon`, `Temporarily Closed`.
   - `service`: Full treatment menu with pricing, duration, and direct WhatsApp booking.
   - `course`: Training Academy diplomas & vocational qualifications.
   - `career`: Dynamic job vacancies with application routing.
   - `press`: Editorial features (Vogue, Cosmopolitan, Glamour).
   - `testimonial`: 500+ client reviews.

3. **Doorstep Mobile Beauty Integration**
   - Built-in postcode distance verification for **FREE Home Service within 2 miles**.
   - Integrated with WhatsApp hotline: `07398 926226`.

---

## 🚀 Installation & Usage

1. **Install Theme via WordPress Admin:**
   - Compress the `rawr-beauty` folder into `rawr-beauty.zip`.
   - In WP Admin, navigate to **Appearance > Themes > Add New > Upload Theme**.
   - Select `rawr-beauty.zip` and click **Install Now**, then **Activate**.

2. **Plugins Recommended:**
   - **WooCommerce** (for online retail product store).
   - **Advanced Custom Fields (ACF)** (optional for additional field customizations).

3. **React / Vite Development (Optional):**
   ```bash
   npm install
   npm run build   # Compiles React bundle into assets/dist/react-app.js
   ```

---

## 🎨 Brand Design Tokens
- **Primary Navy:** `#1A1A2E`
- **Gold Accent:** `#C9A84C` (Gradients: `#E2C97A` to `#A8862E`)
- **Soft Rose:** `#E8829A`
- **Sage Green:** `#4A7C59`
- **Typography:** *Cormorant Garamond* (Serif), *Montserrat* (Sans), *Great Vibes* (Script)

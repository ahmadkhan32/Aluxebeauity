import type { Metadata } from "next";
export const metadata: Metadata = { title: "Privacy Policy" };
export default function PrivacyPolicyPage() {
  return (
    <div style={{ paddingBottom: "80px" }}>
      <div style={{ background: "var(--gradient-hero)", padding: "100px 0 60px", textAlign: "center" }}>
        <div className="container">
          <h1 style={{ fontFamily: "var(--font-heading)", fontSize: "3rem", fontWeight: 700, color: "white" }}>Privacy <span style={{ background: "var(--gradient-gold)", WebkitBackgroundClip: "text", WebkitTextFillColor: "transparent" }}>Policy</span></h1>
          <p style={{ color: "rgba(255,255,255,0.6)", marginTop: "12px" }}>Last updated: September 2026</p>
        </div>
      </div>
      <div className="container" style={{ paddingTop: "60px", maxWidth: "800px" }}>
        <div style={{ background: "white", borderRadius: "var(--border-radius)", padding: "48px", border: "1px solid rgba(201,168,76,0.1)", boxShadow: "var(--shadow-sm)" }}>
          {[
            ["1. Information We Collect", "We collect information you provide when booking appointments, contacting us via WhatsApp, phone or our website form. This includes your name, phone number, email address and service preferences."],
            ["2. How We Use Your Information", "We use your information to: confirm and manage your appointments, send booking reminders, respond to your enquiries, and improve our services."],
            ["3. WhatsApp Communications", "When you contact us via WhatsApp, your messages are processed through WhatsApp's platform. Please review WhatsApp's privacy policy at whatsapp.com/legal/privacy-policy."],
            ["4. Data Sharing", "We do not sell or share your personal data with third parties except where required by law or necessary to deliver our services (e.g., payment processing)."],
            ["5. Data Retention", "We retain your personal data for as long as necessary to provide our services and comply with legal obligations, typically no longer than 3 years."],
            ["6. Your Rights", "You have the right to access, correct or delete your personal data. Contact us at 07398 926226 or via WhatsApp to exercise these rights."],
            ["7. Cookies", "Our website uses cookies to improve your browsing experience. See our Cookie Policy for details."],
            ["8. Contact Us", "For any privacy concerns, please contact us via WhatsApp: +44 7398 926226 or follow us @ayesha.luxe.beauty"],
          ].map(([title, content]) => (
            <div key={title as string} style={{ marginBottom: "32px" }}>
              <h2 style={{ fontFamily: "var(--font-heading)", fontSize: "1.4rem", fontWeight: 600, color: "var(--charcoal)", marginBottom: "12px" }}>{title as string}</h2>
              <p style={{ fontSize: "15px", color: "var(--dark-gray)", lineHeight: 1.8 }}>{content as string}</p>
            </div>
          ))}
        </div>
      </div>
    </div>
  );
}

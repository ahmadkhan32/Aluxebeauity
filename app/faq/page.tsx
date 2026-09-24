import type { Metadata } from "next";
export const metadata: Metadata = { title: "FAQ – Frequently Asked Questions" };

const faqs = [
  { q: "How do I book an appointment?", a: "The easiest way is via WhatsApp at +44 7398 926226. You can also call us on 07398 926226. We respond quickly and confirm your booking right away." },
  { q: "Do you offer home service?", a: "Yes! We offer free home service within a 2-mile radius. We bring all professional equipment and products directly to you." },
  { q: "What areas do you cover for home service?", a: "We cover a 2-mile radius from our base location. Message us on WhatsApp with your postcode and we'll confirm if we can reach you." },
  { q: "How much does a Hydra Facial cost?", a: "Our Hydra Facial is £60 per session. It's our most popular treatment — deeply cleansing, hydrating and instantly brightening." },
  { q: "Do you offer laser hair removal?", a: "Yes! We offer laser hair removal for face and body. Single sessions start from £15 (Upper Lip/Chin) and we also offer 10-session packages at great discounts." },
  { q: "What is the Glow Package?", a: "Our most popular package — Simple Facial + Face Massage for just £30 (normal price £35). A brilliant treat for yourself!" },
  { q: "Do you offer bridal packages?", a: "Yes! Our Bridal / Full Care Package includes Hydra Facial + Full Face Wax + Eyebrows + Upper Lips + Face Massage, starting from £100+." },
  { q: "Are there any discounts available?", a: "Yes! First-time clients get £5 OFF any facial. Bring a friend — both save £5. And every Monday–Wednesday there's 10% OFF all services." },
  { q: "How do I buy products?", a: "You can buy our beauty products directly via our WhatsApp product catalogue. Tap the 'Shop on WhatsApp' button on our website." },
  { q: "What payment methods do you accept?", a: "We accept cash and bank transfer. Payment details are confirmed when you book your appointment." },
];

export default function FAQPage() {
  return (
    <div style={{ paddingBottom: "80px" }}>
      <div style={{ background: "var(--gradient-hero)", padding: "100px 0 60px", textAlign: "center" }}>
        <div className="container">
          <p className="section-tag" style={{ color: "white" }}>Help Centre</p>
          <h1 style={{ fontFamily: "var(--font-heading)", fontSize: "3rem", fontWeight: 700, color: "white", marginBottom: "12px" }}>Frequently Asked <span style={{ background: "var(--gradient-gold)", WebkitBackgroundClip: "text", WebkitTextFillColor: "transparent" }}>Questions</span></h1>
          <p style={{ color: "rgba(255,255,255,0.7)" }}>Everything you need to know about Ayesha Luxe Beauty</p>
        </div>
      </div>
      <div className="container" style={{ paddingTop: "60px", maxWidth: "800px" }}>
        <div style={{ display: "flex", flexDirection: "column", gap: "16px" }}>
          {faqs.map((faq, i) => (
            <details key={i} style={{ background: "white", borderRadius: "var(--border-radius)", border: "1px solid rgba(201,168,76,0.15)", overflow: "hidden" }}>
              <summary style={{ padding: "20px 24px", fontWeight: 700, fontSize: "15px", color: "var(--charcoal)", cursor: "pointer", listStyle: "none", display: "flex", justifyContent: "space-between", alignItems: "center", fontFamily: "var(--font-heading)" }}>
                {faq.q}
                <span style={{ color: "var(--gold)", fontSize: "20px", flexShrink: 0 }}>+</span>
              </summary>
              <div style={{ padding: "0 24px 20px", fontSize: "14px", color: "var(--dark-gray)", lineHeight: 1.8, borderTop: "1px solid rgba(201,168,76,0.1)", paddingTop: "16px" }}>
                {faq.a}
              </div>
            </details>
          ))}
        </div>
        <div style={{ marginTop: "48px", background: "var(--gradient-gold)", borderRadius: "var(--border-radius)", padding: "32px", textAlign: "center" }}>
          <p style={{ fontFamily: "var(--font-heading)", fontSize: "1.3rem", color: "var(--charcoal)", marginBottom: "16px" }}>Still have questions?</p>
          <a href="https://wa.me/447398926226?text=Hi!%20I%20have%20a%20question." target="_blank" rel="noopener noreferrer" className="btn btn-whatsapp">💬 Ask Us on WhatsApp</a>
        </div>
      </div>
    </div>
  );
}

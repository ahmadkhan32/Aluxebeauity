import type { Metadata } from "next";

export const metadata: Metadata = {
  title: "Find Our Location",
  description: "Ayesha Luxe Beauty offers home visits within 2 miles. Book now via WhatsApp: 07398 926226.",
};

export default function LocationsPage() {
  return (
    <div style={{ paddingBottom: "80px" }}>
      <div style={{ background: "var(--gradient-hero)", padding: "120px 0 70px", textAlign: "center" }}>
        <div className="container">
          <p className="section-tag" style={{ color: "white" }}>Where We Are</p>
          <h1 style={{ fontFamily: "var(--font-heading)", fontSize: "clamp(2.5rem,5vw,4rem)", fontWeight: 700, color: "white", marginBottom: "16px" }}>
            Our <span style={{ background: "var(--gradient-gold)", WebkitBackgroundClip: "text", WebkitTextFillColor: "transparent" }}>Locations</span>
          </h1>
          <p style={{ fontSize: "16px", color: "rgba(255,255,255,0.7)" }}>We come to you — free home service within 2 miles!</p>
        </div>
      </div>

      <div className="container" style={{ paddingTop: "60px" }}>
        {/* Home Service Banner */}
        <div style={{ background: "var(--gradient-gold)", borderRadius: "var(--border-radius-lg)", padding: "50px", textAlign: "center", marginBottom: "60px" }}>
          <div style={{ fontSize: "64px", marginBottom: "16px" }}>🏠</div>
          <h2 style={{ fontFamily: "var(--font-heading)", fontSize: "2.5rem", fontWeight: 700, color: "var(--charcoal)", marginBottom: "12px" }}>Free Home Service</h2>
          <p style={{ fontSize: "18px", color: "rgba(0,0,0,0.65)", marginBottom: "32px", maxWidth: "500px", margin: "0 auto 32px" }}>
            We offer professional beauty treatments at your home — completely free of charge within a 2-mile radius.
          </p>
          <div style={{ display: "flex", justifyContent: "center", gap: "16px", flexWrap: "wrap" }}>
            <a href="https://wa.me/447398926226?text=Hi!%20I'd%20like%20to%20book%20a%20home%20service." target="_blank" rel="noopener noreferrer" className="btn btn-whatsapp btn-lg">💬 Book Home Service</a>
            <a href="tel:07398926226" className="btn btn-lg" style={{ background: "var(--charcoal)", color: "white", padding: "18px 44px", borderRadius: "50px", fontSize: "14px", fontWeight: 700 }}>📞 07398 926226</a>
          </div>
        </div>

        {/* Service Area Info */}
        <div style={{ display: "grid", gridTemplateColumns: "repeat(auto-fill,minmax(250px,1fr))", gap: "24px" }}>
          {[
            { icon: "📍", title: "Service Radius", desc: "We travel free of charge within 2 miles of our base location" },
            { icon: "🕐", title: "Flexible Timing", desc: "Morning, afternoon & evening appointments available 7 days a week" },
            { icon: "🛡️", title: "Fully Equipped", desc: "We bring all professional equipment and products to your home" },
            { icon: "💬", title: "Easy Booking", desc: "Simply WhatsApp us your postcode and we'll confirm availability" },
          ].map((item) => (
            <div key={item.title} style={{ background: "white", borderRadius: "var(--border-radius)", padding: "28px", border: "1px solid rgba(201,168,76,0.1)", boxShadow: "var(--shadow-sm)" }}>
              <span style={{ fontSize: "36px", display: "block", marginBottom: "12px" }}>{item.icon}</span>
              <h3 style={{ fontFamily: "var(--font-heading)", fontSize: "1.1rem", fontWeight: 600, color: "var(--charcoal)", marginBottom: "8px" }}>{item.title}</h3>
              <p style={{ fontSize: "13px", color: "var(--dark-gray)", lineHeight: 1.6 }}>{item.desc}</p>
            </div>
          ))}
        </div>
      </div>
    </div>
  );
}

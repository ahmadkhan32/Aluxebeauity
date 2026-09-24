import type { Metadata } from "next";
import Link from "next/link";

export const metadata: Metadata = {
  title: "Franchise Opportunity",
  description: "Own an Ayesha Luxe Beauty franchise. Join our growing beauty brand and build your own business.",
};

export default function FranchisePage() {
  return (
    <div style={{ paddingBottom: "80px" }}>
      {/* Hero */}
      <div style={{ background: "var(--gradient-hero)", padding: "120px 0 70px", textAlign: "center", position: "relative", overflow: "hidden" }}>
        <div style={{ position: "absolute", inset: 0, background: "radial-gradient(ellipse at 50% 50%,rgba(201,168,76,0.15) 0%,transparent 60%)" }} />
        <div className="container" style={{ position: "relative" }}>
          <p className="section-tag" style={{ color: "white" }}>Business Opportunity</p>
          <h1 style={{ fontFamily: "var(--font-heading)", fontSize: "clamp(2.5rem,5vw,4rem)", fontWeight: 700, color: "white", marginBottom: "16px" }}>
            Own an <span style={{ background: "var(--gradient-gold)", WebkitBackgroundClip: "text", WebkitTextFillColor: "transparent" }}>Ayesha Luxe Beauty</span><br />Franchise
          </h1>
          <p style={{ fontSize: "16px", color: "rgba(255,255,255,0.75)", marginBottom: "32px", maxWidth: "600px", margin: "0 auto 32px" }}>
            Join our growing beauty brand and build your own profitable business with full training, support and branding provided.
          </p>
          <a href="https://wa.me/447398926226?text=Hi!%20I'm%20interested%20in%20the%20Ayesha%20Luxe%20Beauty%20franchise%20opportunity." target="_blank" rel="noopener noreferrer" className="btn btn-primary btn-lg">💬 Enquire About Franchise</a>
        </div>
      </div>

      <div className="container">
        {/* Sub Nav */}
        <div style={{ display: "flex", gap: "12px", flexWrap: "wrap", padding: "40px 0 20px", borderBottom: "1px solid rgba(201,168,76,0.1)" }}>
          {[["How It Works","/franchise/how-it-works"],["Investment","/franchise/investment"],["Support","/franchise/support"],["FAQ","/franchise/faq"],["Apply Now","/franchise/apply"]].map(([label,href]) => (
            <Link key={href as string} href={href as string} style={{ padding: "10px 22px", borderRadius: "var(--border-radius-pill)", border: "2px solid rgba(201,168,76,0.25)", fontSize: "13px", fontWeight: 700, color: "var(--dark-gray)", textDecoration: "none", transition: "var(--transition)" }}>
              {label as string}
            </Link>
          ))}
        </div>

        {/* Why franchise */}
        <section style={{ padding: "60px 0" }}>
          <div className="section-header">
            <p className="section-tag">Why Choose Us</p>
            <h2 className="section-title">The <span>Franchise Advantage</span></h2>
          </div>
          <div style={{ display: "grid", gridTemplateColumns: "repeat(auto-fill,minmax(240px,1fr))", gap: "24px" }}>
            {[
              ["🎓","Full Training","Complete beauty therapy training included"],
              ["🏷️","Established Brand","Trade under the Ayesha Luxe Beauty name"],
              ["📦","Equipment Provided","Start-up kit & equipment support available"],
              ["📊","Business Support","Ongoing marketing & business guidance"],
              ["📱","Digital Presence","Website listing, social media templates"],
              ["💰","Proven Model","Tested business model with real results"],
            ].map(([icon,title,desc]) => (
              <div key={title as string} style={{ background: "white", borderRadius: "var(--border-radius)", padding: "28px", border: "1px solid rgba(201,168,76,0.1)", boxShadow: "var(--shadow-sm)", transition: "var(--transition-bounce)" }}>
                <span style={{ fontSize: "36px", display: "block", marginBottom: "16px" }}>{icon}</span>
                <h3 style={{ fontFamily: "var(--font-heading)", fontSize: "1.1rem", fontWeight: 600, color: "var(--charcoal)", marginBottom: "8px" }}>{title as string}</h3>
                <p style={{ fontSize: "13px", color: "var(--dark-gray)", lineHeight: 1.6 }}>{desc as string}</p>
              </div>
            ))}
          </div>
        </section>

        {/* Apply CTA */}
        <div style={{ background: "var(--gradient-gold)", borderRadius: "var(--border-radius-lg)", padding: "60px", textAlign: "center" }}>
          <h2 style={{ fontFamily: "var(--font-heading)", fontSize: "2.5rem", fontWeight: 700, color: "var(--charcoal)", marginBottom: "12px" }}>
            Ready to Start Your Own Beauty Business?
          </h2>
          <p style={{ fontSize: "16px", color: "rgba(0,0,0,0.6)", marginBottom: "32px" }}>Contact us today to discuss the franchise opportunity</p>
          <div style={{ display: "flex", justifyContent: "center", gap: "16px", flexWrap: "wrap" }}>
            <a href="https://wa.me/447398926226?text=Hi!%20I'd%20like%20to%20apply%20for%20the%20Ayesha%20Luxe%20Beauty%20franchise." target="_blank" rel="noopener noreferrer" className="btn btn-whatsapp btn-lg">💬 Apply via WhatsApp</a>
            <Link href="/franchise/apply" className="btn" style={{ background: "var(--charcoal)", color: "white", padding: "18px 44px", borderRadius: "50px", fontSize: "14px", fontWeight: 700 }}>Complete Application Form</Link>
          </div>
        </div>
      </div>
    </div>
  );
}

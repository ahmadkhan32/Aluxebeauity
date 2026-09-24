import type { Metadata } from "next";
import Link from "next/link";

export const metadata: Metadata = {
  title: "Careers – Join Our Team",
  description: "Join Ayesha Luxe Beauty as a beauty therapist or salon assistant. Apply now!",
};

const jobs = [
  { id: "beauty-therapist", title: "Senior Beauty Therapist", type: "Full-Time", location: "Home Service / Salon", salary: "Competitive + Commission" },
  { id: "threading-specialist", title: "Threading Specialist", type: "Part-Time", location: "Flexible", salary: "£12–£18/hr" },
  { id: "laser-technician", title: "Laser Hair Removal Technician", type: "Full-Time", location: "Salon-based", salary: "Competitive" },
  { id: "salon-assistant", title: "Salon Assistant / Apprentice", type: "Full-Time", location: "Salon-based", salary: "National Minimum Wage + Training" },
];

export default function CareersPage() {
  return (
    <div style={{ paddingBottom: "80px" }}>
      <div style={{ background: "var(--gradient-hero)", padding: "120px 0 70px", textAlign: "center" }}>
        <div className="container">
          <p className="section-tag" style={{ color: "white" }}>Join Us</p>
          <h1 style={{ fontFamily: "var(--font-heading)", fontSize: "clamp(2.5rem,5vw,4rem)", fontWeight: 700, color: "white", marginBottom: "16px" }}>
            Work With <span style={{ background: "var(--gradient-gold)", WebkitBackgroundClip: "text", WebkitTextFillColor: "transparent" }}>Ayesha Luxe Beauty</span>
          </h1>
          <p style={{ fontSize: "16px", color: "rgba(255,255,255,0.7)", marginBottom: "32px" }}>Be part of our growing beauty family</p>
          <a href="https://wa.me/447398926226?text=Hi!%20I'm%20interested%20in%20joining%20your%20team." target="_blank" rel="noopener noreferrer" className="btn btn-whatsapp btn-lg">💬 Apply via WhatsApp</a>
        </div>
      </div>
      <div className="container" style={{ paddingTop: "60px" }}>
        {/* Why Join */}
        <div style={{ display: "grid", gridTemplateColumns: "repeat(auto-fill,minmax(220px,1fr))", gap: "20px", marginBottom: "60px" }}>
          {[
            ["💰","Competitive Pay","Fair pay + commission structure"],
            ["🕐","Flexible Hours","Suit your lifestyle & availability"],
            ["📚","Training Provided","Full in-house training programme"],
            ["🌱","Career Growth","Advance your beauty career with us"],
          ].map(([icon,title,desc]) => (
            <div key={title as string} style={{ background: "white", borderRadius: "var(--border-radius)", padding: "24px", border: "1px solid rgba(201,168,76,0.1)", boxShadow: "var(--shadow-sm)", textAlign: "center" }}>
              <span style={{ fontSize: "36px", display: "block", marginBottom: "12px" }}>{icon}</span>
              <h3 style={{ fontFamily: "var(--font-heading)", fontSize: "1.1rem", fontWeight: 600, color: "var(--charcoal)", marginBottom: "8px" }}>{title as string}</h3>
              <p style={{ fontSize: "13px", color: "var(--dark-gray)" }}>{desc as string}</p>
            </div>
          ))}
        </div>

        {/* Jobs */}
        <h2 style={{ fontFamily: "var(--font-heading)", fontSize: "2rem", fontWeight: 600, color: "var(--charcoal)", marginBottom: "28px" }}>Current Vacancies</h2>
        <div style={{ display: "flex", flexDirection: "column", gap: "16px", marginBottom: "48px" }}>
          {jobs.map((job) => (
            <div key={job.id} style={{ background: "white", borderRadius: "var(--border-radius)", padding: "24px 28px", border: "1px solid rgba(201,168,76,0.1)", boxShadow: "var(--shadow-sm)", display: "flex", alignItems: "center", justifyContent: "space-between", flexWrap: "wrap", gap: "16px" }}>
              <div>
                <h3 style={{ fontFamily: "var(--font-heading)", fontSize: "1.2rem", fontWeight: 600, color: "var(--charcoal)", marginBottom: "8px" }}>{job.title}</h3>
                <div style={{ display: "flex", gap: "12px", flexWrap: "wrap" }}>
                  <span style={{ fontSize: "12px", fontWeight: 700, background: "var(--gold-pale)", color: "var(--gold-dark)", padding: "3px 10px", borderRadius: "20px" }}>{job.type}</span>
                  <span style={{ fontSize: "12px", color: "var(--dark-gray)" }}>📍 {job.location}</span>
                  <span style={{ fontSize: "12px", color: "var(--dark-gray)" }}>💰 {job.salary}</span>
                </div>
              </div>
              <a href={`https://wa.me/447398926226?text=Hi!%20I'd%20like%20to%20apply%20for%20the%20${encodeURIComponent(job.title)}%20position.`} target="_blank" rel="noopener noreferrer" className="btn btn-whatsapp btn-sm">
                Apply Now
              </a>
            </div>
          ))}
        </div>
      </div>
    </div>
  );
}

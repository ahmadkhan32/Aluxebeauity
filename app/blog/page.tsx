import type { Metadata } from "next";
import Link from "next/link";
import { blogPosts } from "@/lib/data";

export const metadata: Metadata = {
  title: "Beauty Blog & Tips",
  description: "Beauty tips, treatment guides and skincare advice from Ayesha Luxe Beauty.",
};

export default function BlogPage() {
  return (
    <div style={{ paddingBottom: "80px" }}>
      <div style={{ background: "var(--gradient-hero)", padding: "120px 0 70px", textAlign: "center" }}>
        <div className="container">
          <p className="section-tag" style={{ color: "white" }}>Beauty Tips</p>
          <h1 style={{ fontFamily: "var(--font-heading)", fontSize: "clamp(2.5rem,5vw,4rem)", fontWeight: 700, color: "white", marginBottom: "16px" }}>
            Beauty <span style={{ background: "var(--gradient-gold)", WebkitBackgroundClip: "text", WebkitTextFillColor: "transparent" }}>Blog</span>
          </h1>
          <p style={{ fontSize: "16px", color: "rgba(255,255,255,0.7)" }}>Expert tips, guides & beauty inspiration</p>
        </div>
      </div>
      <div className="container" style={{ paddingTop: "60px" }}>
        <div style={{ display: "grid", gridTemplateColumns: "repeat(auto-fill, minmax(320px, 1fr))", gap: "28px" }}>
          {blogPosts.map((post) => (
            <Link key={post.id} href={`/blog/${post.slug}`} style={{ textDecoration: "none", background: "white", borderRadius: "var(--border-radius)", overflow: "hidden", border: "1px solid rgba(201,168,76,0.1)", boxShadow: "var(--shadow-sm)", display: "flex", flexDirection: "column", transition: "var(--transition-bounce)" }}>
              <div style={{ background: "linear-gradient(135deg,var(--gold-pale),var(--pink-pale))", height: "200px", display: "flex", alignItems: "center", justifyContent: "center", fontSize: "64px" }}>✍️</div>
              <div style={{ padding: "24px", flex: 1 }}>
                <span style={{ fontSize: "10px", fontWeight: 800, letterSpacing: "2px", textTransform: "uppercase", color: "var(--gold)", background: "var(--gold-pale)", padding: "3px 10px", borderRadius: "20px" }}>{post.category}</span>
                <h2 style={{ fontFamily: "var(--font-heading)", fontSize: "1.2rem", fontWeight: 600, color: "var(--charcoal)", margin: "12px 0 8px", lineHeight: 1.3 }}>{post.title}</h2>
                <p style={{ fontSize: "13px", color: "var(--dark-gray)", lineHeight: 1.6 }}>{post.excerpt}</p>
                <div style={{ display: "flex", justifyContent: "space-between", alignItems: "center", marginTop: "16px", paddingTop: "16px", borderTop: "1px solid rgba(201,168,76,0.1)" }}>
                  <span style={{ fontSize: "11px", color: "var(--gray)" }}>{post.date} · {post.readTime}</span>
                  <span style={{ fontSize: "12px", fontWeight: 700, color: "var(--gold-dark)" }}>Read More →</span>
                </div>
              </div>
            </Link>
          ))}
        </div>
      </div>
    </div>
  );
}

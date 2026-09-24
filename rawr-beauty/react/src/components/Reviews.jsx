import React, { useState } from "react";

export default function Reviews() {
  const reviews = [
    { id: 1, name: "Jessica T.", branch: "London Oxford St", rating: 5, text: "Amazing BIAB nails and brow lamination! Always precise and welcoming." },
    { id: 2, name: "Sophie M.", branch: "Birmingham High St", rating: 5, text: "The best lash extensions in Birmingham. Lasted 4 full weeks without clumping." },
    { id: 3, name: "Hannah W.", branch: "Manchester", rating: 5, text: "Quick lunchtime brow threading and gel manicure. Outstanding service!" },
  ];

  return (
    <div className="rawr-reviews-widget" style={{ padding: "30px", background: "#FDF8EE", borderRadius: "16px", border: "1px solid rgba(201,168,76,0.3)" }}>
      <h3 style={{ fontFamily: "var(--font-heading, Georgia, serif)", fontSize: "1.6rem", textAlign: "center", marginBottom: "20px" }}>
        Verified Customer Reviews
      </h3>
      <div style={{ display: "grid", gridTemplateColumns: "repeat(auto-fit, minmax(240px, 1fr))", gap: "16px" }}>
        {reviews.map((r) => (
          <div key={r.id} style={{ background: "#fff", padding: "18px", borderRadius: "12px", border: "1px solid #E8E8F0" }}>
            <div style={{ color: "#C9A84C", marginBottom: "6px" }}>{"★".repeat(r.rating)}</div>
            <p style={{ fontSize: "13px", color: "#4A4A6A", lineHeight: 1.6, marginBottom: "10px" }}>"{r.text}"</p>
            <div style={{ fontSize: "12px", fontWeight: 700, color: "#1A1A2E" }}>{r.name}</div>
            <div style={{ fontSize: "11px", color: "#8888AA" }}>📍 {r.branch}</div>
          </div>
        ))}
      </div>
    </div>
  );
}

import React, { useState } from "react";

export default function LocationMap({ locationId }) {
  const [activeBranch, setActiveBranch] = useState("London");

  const branches = [
    { name: "London Flagship", address: "Primark Oxford St, London", lat: 51.5155, lng: -0.1575 },
    { name: "Birmingham", address: "Primark High St, Birmingham", lat: 52.4800, lng: -1.8950 },
    { name: "Manchester", address: "Market St, Manchester", lat: 53.4830, lng: -2.2440 },
    { name: "Cardiff", address: "Queen St, Cardiff", lat: 51.4816, lng: -3.1791 },
    { name: "Leeds", address: "Trinity Leeds, Albion St", lat: 53.7970, lng: -1.5430 },
  ];

  return (
    <div className="rawr-interactive-map" style={{ padding: "20px", background: "#fff", borderRadius: "16px", border: "1px solid #E8E8F0" }}>
      <div style={{ display: "flex", gap: "10px", flexWrap: "wrap", marginBottom: "16px" }}>
        {branches.map((b) => (
          <button
            key={b.name}
            onClick={() => setActiveBranch(b.name)}
            style={{
              padding: "6px 14px",
              borderRadius: "20px",
              border: activeBranch === b.name ? "2px solid #C9A84C" : "1px solid #ddd",
              background: activeBranch === b.name ? "#FDF8EE" : "#fff",
              fontWeight: 600,
              fontSize: "12px",
              cursor: "pointer",
            }}
          >
            📍 {b.name}
          </button>
        ))}
      </div>
      <div style={{ height: "300px", background: "linear-gradient(135deg, #1A1A2E, #2A4032)", borderRadius: "12px", display: "flex", alignItems: "center", justifyContent: "center", color: "#fff", flexDirection: "column", gap: "10px", textAlign: "center", padding: "20px" }}>
        <span style={{ fontSize: "40px" }}>🗺️</span>
        <h4 style={{ fontFamily: "var(--font-heading, Georgia, serif)", fontSize: "1.3rem", color: "#E2C97A" }}>
          Viewing {activeBranch} Salon
        </h4>
        <p style={{ fontSize: "13px", opacity: 0.85, maxWidth: "400px" }}>
          Interactive GPS coordinates centered at {activeBranch}. Directions and walking routes available on mobile.
        </p>
        <a
          href={`https://maps.google.com/?q=${encodeURIComponent(branches.find(b => b.name === activeBranch)?.address || activeBranch)}`}
          target="_blank"
          rel="noopener noreferrer"
          style={{ background: "#C9A84C", color: "#1A1A2E", padding: "8px 18px", borderRadius: "20px", fontSize: "12px", fontWeight: 700, textDecoration: "none", marginTop: "8px" }}
        >
          Open in Google Maps ↗
        </a>
      </div>
    </div>
  );
}

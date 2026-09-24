import React, { useState } from "react";

export default function Newsletter() {
  const [email, setEmail] = useState("");
  const [subscribed, setSubscribed] = useState(false);

  const handleSubmit = (e) => {
    e.preventDefault();
    if (email) setSubscribed(true);
  };

  return (
    <div className="rawr-newsletter-widget" style={{ padding: "30px", background: "#1A1A2E", color: "#fff", borderRadius: "16px", textAlign: "center" }}>
      <h3 style={{ fontFamily: "var(--font-heading, Georgia, serif)", fontSize: "1.6rem", color: "#E2C97A", marginBottom: "8px" }}>
        Join the VIP Beauty Club
      </h3>
      <p style="font-size: 13px; opacity: 0.85; margin-bottom: 20px;">
        Receive 15% OFF your next salon booking and exclusive seasonal trend previews.
      </p>
      {subscribed ? (
        <div style={{ color: "#25D366", fontWeight: 700 }}>✨ Thank you! Check your inbox for your 15% code.</div>
      ) : (
        <form onSubmit={handleSubmit} style={{ display: "flex", gap: "10px", justifyContent: "center", maxWidth: "450px", margin: "0 auto" }}>
          <input
            type="email"
            placeholder="Enter your email..."
            required
            value={email}
            onChange={(e) => setEmail(e.target.value)}
            style={{ flex: 1, padding: "10px 16px", borderRadius: "50px", border: "1px solid #C9A84C", outline: "none", fontSize: "13px" }}
          />
          <button type="submit" style={{ background: "#C9A84C", color: "#1A1A2E", padding: "10px 20px", borderRadius: "50px", border: "none", fontWeight: 700, cursor: "pointer", fontSize: "13px" }}>
            Subscribe
          </button>
        </form>
      )}
    </div>
  );
}

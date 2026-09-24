import React from "react";
import Navigation from "./Navigation";
import Search from "./Search";

export function Header({ cartCount = 0, onOpenCart }) {
  return (
    <header
      className="rawr-site-header"
      style={{
        backgroundColor: "#1A1A2E",
        color: "#ffffff",
        position: "sticky",
        top: 0,
        zIndex: 1000,
        boxShadow: "0 2px 10px rgba(0,0,0,0.1)"
      }}
    >
      <div
        className="container"
        style={{
          display: "flex",
          justifyContent: "space-between",
          alignItems: "center",
          padding: "16px 20px"
        }}
      >
        <a href="/" style={{ color: "#ffffff", textDecoration: "none" }}>
          <div style={{ fontSize: "11px", letterSpacing: "3px", textTransform: "uppercase", color: "#C9A84C", fontWeight: "700" }}>
            RAWR & AYESHA
          </div>
          <div style={{ fontSize: "1.4rem", fontFamily: "Georgia, serif", fontWeight: "700" }}>
            LUXE BEAUTY
          </div>
        </a>

        <div className="desktop-only" style={{ display: "flex", alignItems: "center", gap: "28px" }}>
          <Navigation />
          <Search />
        </div>

        <div style={{ display: "flex", alignItems: "center", gap: "14px" }}>
          <button
            type="button"
            onClick={onOpenCart}
            style={{
              background: "none",
              border: "none",
              cursor: "pointer",
              color: "#ffffff",
              display: "flex",
              alignItems: "center",
              gap: "6px",
              padding: "8px 12px",
              borderRadius: "50px",
              backgroundColor: "rgba(255,255,255,0.08)"
            }}
          >
            <span>🛍️</span>
            <span
              style={{
                backgroundColor: "#C9A84C",
                color: "#1A1A2E",
                fontSize: "11px",
                fontWeight: "800",
                borderRadius: "50%",
                minWidth: "18px",
                height: "18px",
                display: "inline-flex",
                alignItems: "center",
                justifyContent: "center",
                padding: "0 4px"
              }}
            >
              {cartCount}
            </span>
          </button>
          <a
            href="/contact/"
            style={{
              backgroundColor: "#C9A84C",
              color: "#1A1A2E",
              padding: "10px 20px",
              borderRadius: "50px",
              fontWeight: "700",
              fontSize: "13px",
              textDecoration: "none"
            }}
          >
            Book Now
          </a>
        </div>
      </div>
    </header>
  );
}

export default Header;

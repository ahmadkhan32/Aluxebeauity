import React, { useState } from "react";

export default function CartDrawer() {
  const [open, setOpen] = useState(false);
  const [items, setItems] = useState([
    { id: 1, name: "Vitamin C Glow Serum", price: 18, qty: 1 },
  ]);

  const total = items.reduce((acc, i) => acc + i.price * i.qty, 0);

  if (!open) {
    return (
      <button
        onClick={() => setOpen(true)}
        className="rawr-floating-cart-btn"
        style={{
          position: "fixed",
          bottom: "100px",
          right: "28px",
          background: "#1A1A2E",
          color: "white",
          borderRadius: "50%",
          width: "56px",
          height: "56px",
          display: "flex",
          alignItems: "center",
          justifyContent: "center",
          boxShadow: "0 6px 20px rgba(0,0,0,0.2)",
          border: "2px solid #C9A84C",
          cursor: "pointer",
          zIndex: 998,
        }}
        aria-label="View Shopping Cart"
      >
        🛍️
        <span
          style={{
            position: "absolute",
            top: "-4px",
            right: "-4px",
            background: "#C9A84C",
            color: "#1A1A2E",
            fontSize: "11px",
            fontWeight: 800,
            borderRadius: "50%",
            width: "20px",
            height: "20px",
            display: "flex",
            alignItems: "center",
            justifyContent: "center",
          }}
        >
          {items.length}
        </span>
      </button>
    );
  }

  return (
    <>
      <div
        onClick={() => setOpen(false)}
        style={{ position: "fixed", inset: 0, background: "rgba(0,0,0,0.5)", zIndex: 999 }}
      />
      <div
        style={{
          position: "fixed",
          top: 0,
          right: 0,
          width: "340px",
          height: "100vh",
          background: "white",
          zIndex: 1000,
          padding: "24px",
          boxShadow: "-4px 0 24px rgba(0,0,0,0.15)",
          display: "flex",
          flexDirection: "column",
        }}
      >
        <div style={{ display: "flex", justifyContent: "space-between", alignItems: "center", marginBottom: "20px" }}>
          <h3 style={{ margin: 0, fontSize: "18px" }}>Shopping Bag</h3>
          <button onClick={() => setOpen(false)} style={{ background: "none", border: "none", fontSize: "24px", cursor: "pointer" }}>
            &times;
          </button>
        </div>

        <div style={{ flex: 1, overflowY: "auto" }}>
          {items.map((item) => (
            <div key={item.id} style={{ display: "flex", justifyContent: "space-between", padding: "12px 0", borderBottom: "1px solid #eee" }}>
              <div>
                <strong style={{ fontSize: "14px", display: "block" }}>{item.name}</strong>
                <span style={{ fontSize: "12px", color: "#666" }}>Qty: {item.qty} · £{item.price}</span>
              </div>
              <span style={{ fontWeight: 700 }}>£{item.price * item.qty}</span>
            </div>
          ))}
        </div>

        <div style={{ borderTop: "1px solid #eee", paddingTop: "16px" }}>
          <div style={{ display: "flex", justifyContent: "space-between", marginBottom: "16px", fontWeight: 700 }}>
            <span>Subtotal:</span>
            <span>£{total}</span>
          </div>
          <a
            href={`https://wa.me/447398926226?text=${encodeURIComponent(
              `Hi! I would like to order: ${items.map((i) => `${i.qty}x ${i.name}`).join(", ")} (Total: £${total}).`
            )}`}
            target="_blank"
            rel="noopener noreferrer"
            className="rawr-btn rawr-btn-whatsapp"
            style={{ width: "100%", textAlign: "center" }}
          >
            Order on WhatsApp
          </a>
        </div>
      </div>
    </>
  );
}

import React from "react";

export function OrderSummary({ items = [], subtotal = 0, shipping = 0, total = 0, currency = "£" }) {
  return (
    <div style={{ background: "#FAF9F6", borderRadius: "12px", padding: "24px", border: "1px solid rgba(201,168,76,0.25)" }}>
      <h3 style={{ fontSize: "1.25rem", fontFamily: "Georgia, serif", color: "#1A1A2E", margin: "0 0 16px" }}>
        Order Summary
      </h3>

      <div style={{ maxHeight: "240px", overflowY: "auto", marginBottom: "16px" }}>
        {items.map((item) => (
          <div key={item.key || item.id} style={{ display: "flex", justifyContent: "space-between", fontSize: "13px", padding: "8px 0", borderBottom: "1px solid #ECECF2" }}>
            <span>{item.name} &times; {item.quantity}</span>
            <strong>{currency}{(Number(item.price) * item.quantity).toFixed(2)}</strong>
          </div>
        ))}
      </div>

      <div style={{ borderTop: "1px solid #ECECF2", paddingTop: "12px", display: "flex", flexDirection: "column", gap: "8px", fontSize: "14px" }}>
        <div style={{ display: "flex", justifyContent: "space-between" }}>
          <span>Subtotal</span>
          <strong>{currency}{Number(subtotal).toFixed(2)}</strong>
        </div>
        <div style={{ display: "flex", justifyContent: "space-between", fontSize: "13px", color: "#8888AA" }}>
          <span>UK Tracked Delivery</span>
          <span>{Number(subtotal) >= 40 ? "FREE" : "£3.99"}</span>
        </div>
        <div style={{ display: "flex", justifyContent: "space-between", fontSize: "17px", fontWeight: "800", color: "#1A1A2E", borderTop: "2px solid #1A1A2E", paddingTop: "10px", marginTop: "4px" }}>
          <span>Total</span>
          <span style={{ color: "#C9A84C" }}>{currency}{Number(total).toFixed(2)}</span>
        </div>
      </div>
    </div>
  );
}

export default OrderSummary;

import React from "react";

export function CartSummary({ subtotal, total, currency = "£" }) {
  const freeShippingThreshold = 40;
  const numSubtotal = typeof subtotal === "number" ? subtotal : parseFloat(subtotal) || 0;
  const remainingForFree = Math.max(0, freeShippingThreshold - numSubtotal);
  const progressPercent = Math.min(100, (numSubtotal / freeShippingThreshold) * 100);

  return (
    <div className="rawr-cart-summary-block" style={{ marginBottom: "16px" }}>
      {/* Free UK Shipping Progress */}
      <div
        style={{
          background: "#FDF8EE",
          padding: "10px 14px",
          borderRadius: "8px",
          border: "1px solid rgba(201,168,76,0.25)",
          marginBottom: "14px",
          textAlign: "center",
          fontSize: "12px",
          color: "#A8862E"
        }}
      >
        {remainingForFree > 0 ? (
          <>
            Add <strong>£{remainingForFree.toFixed(2)}</strong> for <strong>FREE UK Tracked Delivery</strong>
          </>
        ) : (
          <strong>🎉 You have unlocked FREE UK Tracked Delivery!</strong>
        )}
        <div style={{ height: "4px", backgroundColor: "rgba(201,168,76,0.2)", borderRadius: "2px", marginTop: "6px", overflow: "hidden" }}>
          <div style={{ width: `${progressPercent}%`, height: "100%", backgroundColor: "#C9A84C", transition: "width 0.3s ease" }} />
        </div>
      </div>

      <div style={{ display: "flex", justifyContent: "space-between", fontSize: "14px", color: "#4A4A6A", marginBottom: "6px" }}>
        <span>Subtotal</span>
        <strong style={{ color: "#1A1A2E" }}>{currency}{numSubtotal.toFixed(2)}</strong>
      </div>

      <div style={{ display: "flex", justifyContent: "space-between", fontSize: "13px", color: "#8888AA", marginBottom: "8px" }}>
        <span>UK Delivery</span>
        <span>{numSubtotal >= 40 ? "FREE" : "Calculated at checkout"}</span>
      </div>

      <div
        style={{
          borderTop: "1px solid #ECECF2",
          paddingTop: "10px",
          display: "flex",
          justifyContent: "space-between",
          fontSize: "16px",
          fontWeight: "800",
          color: "#1A1A2E"
        }}
      >
        <span>Estimated Total</span>
        <span style={{ color: "#C9A84C" }}>{currency}{numSubtotal.toFixed(2)}</span>
      </div>
    </div>
  );
}

export default CartSummary;

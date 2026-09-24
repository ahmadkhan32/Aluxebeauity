import React from "react";

export function PlaceOrder({ loading, total = 0, currency = "£" }) {
  return (
    <div style={{ marginTop: "24px" }}>
      <button
        type="submit"
        disabled={loading}
        style={{
          width: "100%",
          background: "#C9A84C",
          color: "#1A1A2E",
          padding: "16px 24px",
          borderRadius: "50px",
          fontWeight: "800",
          fontSize: "15px",
          border: "none",
          cursor: loading ? "not-allowed" : "pointer",
          letterSpacing: "0.5px"
        }}
      >
        {loading ? "Processing Order..." : `🔒 PLACE ORDER (${currency}${Number(total).toFixed(2)})`}
      </button>
      <p style={{ fontSize: "11px", textAlign: "center", color: "#8888AA", marginTop: "10px" }}>
        Protected by 256-Bit SSL Encryption • Next-Day UK Dispatch
      </p>
    </div>
  );
}

export default PlaceOrder;

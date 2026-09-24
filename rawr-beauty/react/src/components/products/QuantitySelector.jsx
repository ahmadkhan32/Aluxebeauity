import React from "react";

export function QuantitySelector({ quantity, onChange, min = 1, max = 99 }) {
  return (
    <div
      style={{
        display: "inline-flex",
        alignItems: "center",
        border: "1px solid #D5D5E2",
        borderRadius: "50px",
        padding: "3px 8px",
        backgroundColor: "#fff"
      }}
    >
      <button
        type="button"
        disabled={quantity <= min}
        onClick={() => onChange(Math.max(min, quantity - 1))}
        style={{ background: "none", border: "none", width: "28px", height: "28px", fontSize: "16px", cursor: "pointer", fontWeight: "700" }}
      >
        −
      </button>
      <span style={{ width: "32px", textAlign: "center", fontWeight: "700", fontSize: "14px" }}>
        {quantity}
      </span>
      <button
        type="button"
        disabled={quantity >= max}
        onClick={() => onChange(Math.min(max, quantity + 1))}
        style={{ background: "none", border: "none", width: "28px", height: "28px", fontSize: "16px", cursor: "pointer", fontWeight: "700" }}
      >
        +
      </button>
    </div>
  );
}

export default QuantitySelector;

import React from "react";

export function CartQuantity({ quantity, onIncrease, onDecrease, disabled }) {
  return (
    <div
      className="rawr-cart-qty-ctrl"
      style={{
        display: "inline-flex",
        alignItems: "center",
        border: "1px solid #D5D5E2",
        borderRadius: "50px",
        padding: "2px 6px",
        backgroundColor: "#fff"
      }}
    >
      <button
        type="button"
        disabled={disabled || quantity <= 1}
        onClick={onDecrease}
        style={{
          background: "none",
          border: "none",
          width: "26px",
          height: "26px",
          fontSize: "15px",
          cursor: quantity <= 1 ? "not-allowed" : "pointer",
          color: quantity <= 1 ? "#ccc" : "#1A1A2E",
          fontWeight: "700"
        }}
      >
        −
      </button>
      <span style={{ width: "28px", textAlign: "center", fontWeight: "700", fontSize: "13px" }}>
        {quantity}
      </span>
      <button
        type="button"
        disabled={disabled}
        onClick={onIncrease}
        style={{
          background: "none",
          border: "none",
          width: "26px",
          height: "26px",
          fontSize: "15px",
          cursor: "pointer",
          color: "#1A1A2E",
          fontWeight: "700"
        }}
      >
        +
      </button>
    </div>
  );
}

export default CartQuantity;

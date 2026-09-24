import React from "react";
import CartQuantity from "./CartQuantity";

export function CartItem({ item, onUpdateQuantity, onRemove, loading }) {
  return (
    <div
      className="rawr-cart-item"
      style={{
        display: "flex",
        gap: "14px",
        padding: "16px 0",
        borderBottom: "1px solid #ECECF2"
      }}
    >
      <div
        style={{
          width: "65px",
          height: "65px",
          borderRadius: "8px",
          overflow: "hidden",
          backgroundColor: "#FAF9F6",
          flexShrink: 0,
          border: "1px solid #ECECF2"
        }}
      >
        <img
          src={item.image || "/assets/images/placeholder.jpg"}
          alt={item.name}
          style={{ width: "100%", height: "100%", objectFit: "cover" }}
        />
      </div>

      <div style={{ flex: 1, display: "flex", flexDirection: "column", justifyContent: "space-between" }}>
        <div style={{ display: "flex", justifyContent: "space-between", alignItems: "flex-start" }}>
          <h4 style={{ margin: "0 0 4px", fontSize: "14px", fontWeight: "700", color: "#1A1A2E" }}>
            {item.name}
          </h4>
          <button
            type="button"
            onClick={() => onRemove(item.key)}
            style={{
              background: "none",
              border: "none",
              cursor: "pointer",
              color: "#A0A0B2",
              fontSize: "16px",
              padding: "0"
            }}
            title="Remove item"
          >
            🗑
          </button>
        </div>

        <div style={{ display: "flex", justifyContent: "space-between", alignItems: "center", marginTop: "8px" }}>
          <CartQuantity
            quantity={item.quantity}
            disabled={loading}
            onIncrease={() => onUpdateQuantity(item.key, item.quantity + 1)}
            onDecrease={() => onUpdateQuantity(item.key, item.quantity - 1)}
          />
          <div style={{ fontSize: "14px", fontWeight: "700", color: "#1A1A2E" }}>
            {item.line_total_html ? (
              <span dangerouslySetInnerHTML={{ __html: item.line_total_html }} />
            ) : (
              `£${(Number(item.price) * item.quantity).toFixed(2)}`
            )}
          </div>
        </div>
      </div>
    </div>
  );
}

export default CartItem;

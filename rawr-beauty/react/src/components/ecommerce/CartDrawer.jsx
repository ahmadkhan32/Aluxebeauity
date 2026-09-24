import React from "react";
import CartItem from "./CartItem";
import CartSummary from "./CartSummary";

export function CartDrawer({
  isOpen,
  onClose,
  items,
  itemCount,
  subtotal,
  total,
  currency,
  loading,
  onUpdateQuantity,
  onRemove,
  onClear
}) {
  if (!isOpen) return null;

  return (
    <>
      {/* Backdrop */}
      <div
        className="rawr-drawer-backdrop"
        onClick={onClose}
        style={{
          position: "fixed",
          inset: 0,
          backgroundColor: "rgba(0, 0, 0, 0.55)",
          zIndex: 99998,
          transition: "opacity 0.3s ease"
        }}
      />

      {/* Drawer Panel */}
      <div
        className="rawr-cart-drawer-panel"
        style={{
          position: "fixed",
          top: 0,
          right: 0,
          width: "100%",
          maxWidth: "420px",
          height: "100%",
          backgroundColor: "#fff",
          color: "#1A1A2E",
          zIndex: 99999,
          display: "flex",
          flexDirection: "column",
          boxShadow: "-5px 0 25px rgba(0,0,0,0.15)",
          animation: "slideInRight 0.3s cubic-bezier(0.16, 1, 0.3, 1)"
        }}
      >
        {/* Header */}
        <div
          style={{
            padding: "20px 24px",
            borderBottom: "1px solid #ECECF2",
            display: "flex",
            alignItems: "center",
            justifyContent: "space-between"
          }}
        >
          <div style={{ display: "flex", alignItems: "center", gap: "8px" }}>
            <h3 style={{ margin: 0, fontSize: "1.25rem", fontFamily: "Georgia, serif" }}>Your Bag</h3>
            <span
              style={{
                backgroundColor: "#C9A84C",
                color: "#1A1A2E",
                fontSize: "11px",
                fontWeight: "800",
                borderRadius: "50%",
                minWidth: "20px",
                height: "20px",
                display: "inline-flex",
                alignItems: "center",
                justifyContent: "center",
                padding: "0 4px"
              }}
            >
              {itemCount}
            </span>
          </div>
          <button
            onClick={onClose}
            style={{
              background: "none",
              border: "none",
              fontSize: "24px",
              cursor: "pointer",
              color: "#8888AA"
            }}
          >
            &times;
          </button>
        </div>

        {/* Items List */}
        <div style={{ flex: 1, overflowY: "auto", padding: "10px 24px" }}>
          {items.length === 0 ? (
            <div style={{ textAlign: "center", padding: "60px 10px" }}>
              <div style={{ fontSize: "40px", marginBottom: "16px" }}>🛍️</div>
              <h4 style={{ fontSize: "1.15rem", fontFamily: "Georgia, serif", margin: "0 0 8px" }}>
                Your bag is empty
              </h4>
              <p style={{ fontSize: "13px", color: "#8888AA", marginBottom: "20px" }}>
                Explore our salon-quality treatments & beauty retail.
              </p>
              <a
                href="/shop/"
                onClick={onClose}
                style={{
                  display: "inline-block",
                  backgroundColor: "#C9A84C",
                  color: "#1A1A2E",
                  padding: "10px 24px",
                  borderRadius: "50px",
                  fontWeight: "700",
                  textDecoration: "none",
                  fontSize: "13px"
                }}
              >
                Start Shopping
              </a>
            </div>
          ) : (
            items.map((item) => (
              <CartItem
                key={item.key || item.id}
                item={item}
                loading={loading}
                onUpdateQuantity={onUpdateQuantity}
                onRemove={onRemove}
              />
            ))
          )}
        </div>

        {/* Footer */}
        {items.length > 0 && (
          <div
            style={{
              padding: "20px 24px",
              borderTop: "1px solid #ECECF2",
              backgroundColor: "#FAF9F6"
            }}
          >
            <CartSummary subtotal={subtotal} total={total} currency={currency} />

            <div style={{ display: "flex", flexDirection: "column", gap: "10px" }}>
              <a
                href="/checkout/"
                style={{
                  display: "block",
                  textAlign: "center",
                  backgroundColor: "#C9A84C",
                  color: "#1A1A2E",
                  padding: "14px 20px",
                  borderRadius: "50px",
                  fontWeight: "800",
                  fontSize: "14px",
                  textDecoration: "none",
                  letterSpacing: "0.5px"
                }}
              >
                🔒 PROCEED TO CHECKOUT
              </a>
              <button
                type="button"
                onClick={onClose}
                style={{
                  background: "none",
                  border: "none",
                  color: "#8888AA",
                  fontSize: "13px",
                  cursor: "pointer",
                  textDecoration: "underline"
                }}
              >
                Continue Shopping
              </button>
            </div>
          </div>
        )}
      </div>
    </>
  );
}

export default CartDrawer;

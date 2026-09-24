import React from "react";
import QuickBuyForm from "./QuickBuyForm";

export function QuickBuy({ isOpen, product, quantity, subtotal, onClose, onQtyChange, onSubmit, loading, error, orderResult }) {
  if (!isOpen || !product) return null;

  return (
    <>
      <div
        className="rawr-modal-backdrop"
        onClick={onClose}
        style={{
          position: "fixed",
          inset: 0,
          backgroundColor: "rgba(0, 0, 0, 0.6)",
          backdropFilter: "blur(4px)",
          zIndex: 99998
        }}
      />
      <div
        className="rawr-modal-box"
        style={{
          position: "fixed",
          top: "50%",
          left: "50%",
          transform: "translate(-50%, -50%)",
          width: "90%",
          maxWidth: "460px",
          maxHeight: "90vh",
          overflowY: "auto",
          backgroundColor: "#fff",
          color: "#1A1A2E",
          borderRadius: "20px",
          padding: "28px",
          zIndex: 99999,
          boxShadow: "0 20px 40px rgba(0,0,0,0.25)"
        }}
      >
        <div style={{ display: "flex", justifyContent: "space-between", alignItems: "center", marginBottom: "18px" }}>
          <h3 style={{ margin: 0, fontSize: "1.3rem", fontFamily: "Georgia, serif" }}>⚡ Quick Buy</h3>
          <button
            onClick={onClose}
            style={{ background: "none", border: "none", fontSize: "24px", cursor: "pointer", color: "#8888AA" }}
          >
            &times;
          </button>
        </div>

        {orderResult ? (
          <div style={{ textAlign: "center", padding: "20px 0" }}>
            <div style={{ fontSize: "40px", marginBottom: "12px" }}>🎉</div>
            <h4 style={{ fontSize: "1.4rem", fontFamily: "Georgia, serif", color: "#1A1A2E", marginBottom: "8px" }}>
              Order Placed!
            </h4>
            <p style={{ color: "#4A4A6A", fontSize: "14px", marginBottom: "16px" }}>
              Order <strong>#{orderResult.order_number || orderResult.order_id}</strong> has been registered in WooCommerce.
            </p>
            <div style={{ background: "#FAF9F6", padding: "14px", borderRadius: "8px", marginBottom: "20px", fontSize: "15px", fontWeight: "700" }}>
              Total: {orderResult.total_html ? <span dangerouslySetInnerHTML={{ __html: orderResult.total_html }} /> : `£${orderResult.total}`}
            </div>
            <button
              onClick={onClose}
              style={{ background: "#1A1A2E", color: "#fff", padding: "10px 24px", borderRadius: "50px", border: "none", fontWeight: "700", cursor: "pointer" }}
            >
              Continue Shopping
            </button>
          </div>
        ) : (
          <>
            {/* Product Card Row */}
            <div style={{ display: "flex", gap: "14px", alignItems: "center", paddingBottom: "16px", borderBottom: "1px solid #ECECF2", marginBottom: "16px" }}>
              {product.image && (
                <img
                  src={product.image}
                  alt={product.name}
                  style={{ width: "64px", height: "64px", objectFit: "cover", borderRadius: "8px", border: "1px solid #E0E0E8" }}
                />
              )}
              <div style={{ flex: 1 }}>
                <h4 style={{ margin: "0 0 4px", fontSize: "1rem", fontWeight: "700" }}>{product.name}</h4>
                <div style={{ fontSize: "1rem", fontWeight: "700", color: "#C9A84C" }}>
                  £{Number(product.price).toFixed(2)}
                </div>
              </div>
            </div>

            {/* Quantity Stepper */}
            <div style={{ display: "flex", justifyContent: "space-between", alignItems: "center", marginBottom: "18px", paddingBottom: "14px", borderBottom: "1px solid #ECECF2" }}>
              <span style={{ fontSize: "13px", fontWeight: "700" }}>Quantity</span>
              <div style={{ display: "inline-flex", alignItems: "center", border: "1px solid #D5D5E2", borderRadius: "50px", padding: "2px 6px" }}>
                <button
                  type="button"
                  onClick={() => onQtyChange(-1)}
                  style={{ background: "none", border: "none", width: "28px", height: "28px", fontSize: "16px", cursor: "pointer", fontWeight: "700" }}
                >
                  −
                </button>
                <span style={{ width: "32px", textAlign: "center", fontWeight: "700", fontSize: "14px" }}>{quantity}</span>
                <button
                  type="button"
                  onClick={() => onQtyChange(1)}
                  style={{ background: "none", border: "none", width: "28px", height: "28px", fontSize: "16px", cursor: "pointer", fontWeight: "700" }}
                >
                  +
                </button>
              </div>
            </div>

            {/* Subtotal Banner */}
            <div style={{ background: "#FAF9F6", padding: "12px 16px", borderRadius: "8px", marginBottom: "18px", display: "flex", justifyContent: "space-between", alignItems: "center" }}>
              <span style={{ fontSize: "13px", color: "#4A4A6A" }}>Order Total:</span>
              <span style={{ fontSize: "1.1rem", fontWeight: "800", color: "#1A1A2E" }}>£{subtotal.toFixed(2)}</span>
            </div>

            <QuickBuyForm onSubmit={onSubmit} loading={loading} error={error} />
          </>
        )}
      </div>
    </>
  );
}

export default QuickBuy;

import React from "react";
import ProductPrice from "./ProductPrice";

export function ProductCard({ product, onAddToCart, onQuickBuy }) {
  return (
    <div
      className="rawr-product-card"
      style={{
        backgroundColor: "#fff",
        borderRadius: "16px",
        border: "1px solid rgba(201,168,76,0.18)",
        overflow: "hidden",
        display: "flex",
        flexDirection: "column",
        justifyContent: "space-between",
        boxShadow: "0 4px 15px rgba(0,0,0,0.03)",
        position: "relative"
      }}
    >
      {product.onSale && (
        <span
          style={{
            position: "absolute",
            top: "12px",
            left: "12px",
            background: "#E53935",
            color: "#fff",
            fontSize: "11px",
            fontWeight: "800",
            padding: "4px 8px",
            borderRadius: "4px",
            zIndex: 2
          }}
        >
          SALE
        </span>
      )}

      <div style={{ position: "relative", paddingTop: "100%", backgroundColor: "#FAF9F6", overflow: "hidden" }}>
        <img
          src={product.image || "/assets/images/placeholder.jpg"}
          alt={product.name}
          style={{ position: "absolute", top: 0, left: 0, width: "100%", height: "100%", objectFit: "cover" }}
        />
      </div>

      <div style={{ padding: "20px", display: "flex", flexDirection: "column", flexGrow: 1, justifyContent: "space-between" }}>
        <div>
          <span style={{ fontSize: "11px", textTransform: "uppercase", color: "#8888AA", fontWeight: "700", letterSpacing: "1px" }}>
            {product.category || "Beauty"}
          </span>
          <h3 style={{ fontSize: "1.1rem", fontFamily: "Georgia, serif", margin: "6px 0 10px", color: "#1A1A2E" }}>
            {product.name}
          </h3>
          <ProductPrice price={product.price} regularPrice={product.regularPrice} onSale={product.onSale} />
        </div>

        <div style={{ display: "flex", flexDirection: "column", gap: "8px", marginTop: "18px" }}>
          <button
            type="button"
            onClick={() => onAddToCart(product.id, 1)}
            style={{
              width: "100%",
              backgroundColor: "#C9A84C",
              color: "#1A1A2E",
              padding: "11px 18px",
              borderRadius: "50px",
              fontWeight: "700",
              fontSize: "13px",
              border: "none",
              cursor: "pointer"
            }}
          >
            Add to Bag
          </button>
          <button
            type="button"
            onClick={() => onQuickBuy(product)}
            style={{
              width: "100%",
              backgroundColor: "#1A1A2E",
              color: "#fff",
              padding: "11px 18px",
              borderRadius: "50px",
              fontWeight: "700",
              fontSize: "13px",
              border: "none",
              cursor: "pointer"
            }}
          >
            ⚡ Quick Buy
          </button>
        </div>
      </div>
    </div>
  );
}

export default ProductCard;

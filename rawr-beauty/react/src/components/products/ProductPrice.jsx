import React from "react";

export function ProductPrice({ price, regularPrice, onSale, currency = "£" }) {
  return (
    <div className="rawr-product-price" style={{ display: "flex", alignItems: "baseline", gap: "8px" }}>
      <span style={{ fontSize: "1.15rem", fontWeight: "700", color: "#C9A84C" }}>
        {currency}{Number(price).toFixed(2)}
      </span>
      {onSale && regularPrice && (
        <span style={{ fontSize: "0.9rem", color: "#8888AA", textDecoration: "line-through" }}>
          {currency}{Number(regularPrice).toFixed(2)}
        </span>
      )}
    </div>
  );
}

export default ProductPrice;

import React from "react";
import ProductCard from "./ProductCard";

export function ProductGrid({ products = [], onAddToCart, onQuickBuy }) {
  if (products.length === 0) {
    return (
      <div style={{ textAlign: "center", padding: "60px 0", color: "#8888AA" }}>
        No products found in this category.
      </div>
    );
  }

  return (
    <div
      className="rawr-product-grid"
      style={{
        display: "grid",
        gridTemplateColumns: "repeat(auto-fill, minmax(260px, 1fr))",
        gap: "28px"
      }}
    >
      {products.map((product) => (
        <ProductCard
          key={product.id}
          product={product}
          onAddToCart={onAddToCart}
          onQuickBuy={onQuickBuy}
        />
      ))}
    </div>
  );
}

export default ProductGrid;

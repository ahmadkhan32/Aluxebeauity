import React, { useState } from "react";

export default function ProductSearch() {
  const [query, setQuery] = useState("");

  const products = [
    { id: 1, name: "Luxury Cuticle Oil", price: "£12.00", category: "Nails" },
    { id: 2, name: "Brow Definition Gel", price: "£14.00", category: "Brows" },
    { id: 3, name: "Lash Growth Serum", price: "£28.00", category: "Lashes" },
    { id: 4, name: "Hydrating Facial Mist", price: "£18.00", category: "Skincare" },
  ];

  const filtered = query.trim()
    ? products.filter((p) => p.name.toLowerCase().includes(query.toLowerCase()) || p.category.toLowerCase().includes(query.toLowerCase()))
    : products;

  return (
    <div className="rawr-product-search" style={{ margin: "20px 0" }}>
      <input
        type="search"
        placeholder="🔍 Search salon products by name or category..."
        value={query}
        onChange={(e) => setQuery(e.target.value)}
        style={{ width: "100%", padding: "12px 18px", borderRadius: "50px", border: "1px solid #C9A84C", outline: "none", fontSize: "14px", marginBottom: "14px" }}
      />
      <div style={{ display: "grid", gridTemplateColumns: "repeat(auto-fill, minmax(200px, 1fr))", gap: "12px" }}>
        {filtered.map((item) => (
          <div key={item.id} style={{ padding: "14px", background: "#fff", border: "1px solid #E8E8F0", borderRadius: "12px" }}>
            <span style={{ fontSize: "10px", color: "#C9A84C", fontWeight: 700, textTransform: "uppercase" }}>{item.category}</span>
            <h4 style={{ fontSize: "14px", margin: "4px 0" }}>{item.name}</h4>
            <strong style={{ color: "#A8862E" }}>{item.price}</strong>
          </div>
        ))}
      </div>
    </div>
  );
}

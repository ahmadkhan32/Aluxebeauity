import React, { useState } from "react";

export default function ProductFilter({ products = [], onSelectCategory }) {
  const [activeCategory, setActiveCategory] = useState("all");

  const categories = [
    { id: "all", label: "All Items" },
    { id: "skincare", label: "Skincare" },
    { id: "waxing", label: "Waxing Kits" },
    { id: "brows", label: "Brows & Lashes" },
  ];

  const handleFilter = (catId) => {
    setActiveCategory(catId);
    if (onSelectCategory) onSelectCategory(catId);
  };

  return (
    <div style={{ display: "flex", gap: "8px", justifyContent: "center", marginBottom: "30px", flexWrap: "wrap" }}>
      {categories.map((c) => (
        <button
          key={c.id}
          type="button"
          onClick={() => handleFilter(c.id)}
          className={`rawr-btn rawr-btn-sm ${activeCategory === c.id ? "rawr-btn-primary" : "rawr-btn-outline"}`}
        >
          {c.label}
        </button>
      ))}
    </div>
  );
}

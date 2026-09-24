import { useState, useEffect } from "react";

export function useProducts() {
  const [products, setProducts] = useState([
    { id: 1, name: "Luxury Cuticle Oil", price: 12.00, category: "Nails" },
    { id: 2, name: "Brow Lamination Balm", price: 16.00, category: "Brows" },
    { id: 3, name: "Lash Defining Mascara", price: 18.00, category: "Lashes" },
    { id: 4, name: "Hydra Glow Serum", price: 24.00, category: "Skincare" },
  ]);

  return { products };
}

import { useState, useEffect } from "react";

export function useCart() {
  const [items, setItems] = useState([]);

  const addToCart = (product) => {
    setItems((prev) => [...prev, product]);
  };

  const removeFromCart = (id) => {
    setItems((prev) => prev.filter((item) => item.id !== id));
  };

  const total = items.reduce((acc, curr) => acc + (Number(curr.price) || 0), 0);

  return { items, addToCart, removeFromCart, total };
}

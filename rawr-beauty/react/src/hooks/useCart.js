import { useState, useEffect, useCallback } from "react";
import cartApi from "../services/cartApi";

export function useCart() {
  const [cart, setCart] = useState({
    items: [],
    item_count: 0,
    subtotal: 0,
    total: 0,
    currency: "£"
  });
  const [isOpen, setIsOpen] = useState(false);
  const [loading, setLoading] = useState(false);

  // Sync with WooCommerce server
  const refreshCart = useCallback(async () => {
    try {
      const data = await cartApi.getCart();
      if (data && data.success) {
        setCart(data);
      }
    } catch (err) {
      console.warn("Could not load WooCommerce cart:", err);
    }
  }, []);

  useEffect(() => {
    refreshCart();
  }, [refreshCart]);

  const openCart = () => setIsOpen(true);
  const closeCart = () => setIsOpen(false);

  const addToCart = async (productId, quantity = 1) => {
    setLoading(true);
    try {
      const res = await cartApi.addToCart(productId, quantity);
      if (res && res.success) {
        setCart(res);
        setIsOpen(true);
      }
    } catch (err) {
      console.error("Add to cart error:", err);
    } finally {
      setLoading(false);
    }
  };

  const updateQuantity = async (cartItemKey, newQty) => {
    setLoading(true);
    try {
      const res = await cartApi.updateQuantity(cartItemKey, newQty);
      if (res && res.success) {
        setCart(res);
      }
    } catch (err) {
      console.error("Update quantity error:", err);
    } finally {
      setLoading(false);
    }
  };

  const removeItem = async (cartItemKey) => {
    setLoading(true);
    try {
      const res = await cartApi.removeItem(cartItemKey);
      if (res && res.success) {
        setCart(res);
      }
    } catch (err) {
      console.error("Remove item error:", err);
    } finally {
      setLoading(false);
    }
  };

  const clearCart = async () => {
    setLoading(true);
    try {
      const res = await cartApi.clearCart();
      if (res && res.success) {
        setCart(res);
      }
    } catch (err) {
      console.error("Clear cart error:", err);
    } finally {
      setLoading(false);
    }
  };

  return {
    items: cart.items || [],
    itemCount: cart.item_count || 0,
    subtotal: cart.subtotal || 0,
    total: cart.total || 0,
    currency: cart.currency || "£",
    isOpen,
    loading,
    openCart,
    closeCart,
    addToCart,
    updateQuantity,
    removeItem,
    clearCart,
    refreshCart
  };
}

export default useCart;

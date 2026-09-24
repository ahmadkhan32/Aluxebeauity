import { useState } from "react";
import orderApi from "../services/orderApi";

export function useQuickBuy() {
  const [product, setProduct] = useState(null);
  const [quantity, setQuantity] = useState(1);
  const [isOpen, setIsOpen] = useState(false);
  const [loading, setLoading] = useState(false);
  const [orderResult, setOrderResult] = useState(null);
  const [error, setError] = useState(null);

  const openQuickBuy = (productData) => {
    setProduct(productData);
    setQuantity(productData.quantity || 1);
    setOrderResult(null);
    setError(null);
    setIsOpen(true);
  };

  const closeQuickBuy = () => {
    setIsOpen(false);
    setProduct(null);
  };

  const changeQuantity = (delta) => {
    setQuantity((prev) => Math.max(1, prev + delta));
  };

  const submitOrder = async (customerData) => {
    if (!product) return;
    setLoading(true);
    setError(null);

    try {
      const payload = {
        product_id: product.id,
        quantity,
        ...customerData
      };
      const res = await orderApi.quickBuy(payload);
      if (res && res.success) {
        setOrderResult(res);
        return res;
      } else {
        setError(res?.message || "Failed to process Quick Buy order.");
        return res;
      }
    } catch (err) {
      setError(err.message || "An unexpected error occurred.");
    } finally {
      setLoading(false);
    }
  };

  const unitPrice = product ? Number(product.price) || 0 : 0;
  const subtotal = unitPrice * quantity;

  return {
    isOpen,
    product,
    quantity,
    subtotal,
    loading,
    error,
    orderResult,
    openQuickBuy,
    closeQuickBuy,
    changeQuantity,
    submitOrder
  };
}

export default useQuickBuy;

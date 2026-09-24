import { useState } from "react";
import checkoutApi from "../services/checkoutApi";

export function useCheckout() {
  const [loading, setLoading] = useState(false);
  const [error, setError] = useState(null);

  const processCheckout = async (formData) => {
    setLoading(true);
    setError(null);
    try {
      const res = await checkoutApi.processOrder(formData);
      return res;
    } catch (err) {
      setError(err.message || "Failed to process checkout");
      return { success: false, message: err.message };
    } finally {
      setLoading(false);
    }
  };

  return {
    loading,
    error,
    processCheckout
  };
}

export default useCheckout;

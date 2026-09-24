import React, { useState } from "react";
import CountrySelect from "./CountrySelect";
import CitySelect from "./CitySelect";
import OrderSummary from "./OrderSummary";
import PlaceOrder from "./PlaceOrder";
import useCheckout from "../../hooks/useCheckout";
import useCart from "../../hooks/useCart";

export function Checkout() {
  const { items, subtotal, total, currency, clearCart } = useCart();
  const { processCheckout, loading, error } = useCheckout();

  const [formData, setFormData] = useState({
    name: "",
    email: "",
    phone: "",
    address: "",
    country: "United Kingdom",
    city: "",
    postcode: ""
  });
  const [successOrder, setSuccessOrder] = useState(null);

  const handleChange = (field, val) => {
    setFormData((prev) => ({ ...prev, [field]: val }));
  };

  const handleSubmit = async (e) => {
    e.preventDefault();
    const result = await processCheckout(formData);
    if (result && result.success) {
      setSuccessOrder(result);
      clearCart();
    }
  };

  if (successOrder) {
    return (
      <div style={{ maxWidth: "600px", margin: "60px auto", padding: "40px", background: "#fff", borderRadius: "16px", textAlign: "center", border: "1px solid rgba(201,168,76,0.3)" }}>
        <div style={{ fontSize: "48px", marginBottom: "16px" }}>🎉</div>
        <h2 style={{ fontSize: "2rem", fontFamily: "Georgia, serif", color: "#1A1A2E", marginBottom: "12px" }}>Order Confirmed!</h2>
        <p style={{ color: "#4A4A6A", marginBottom: "20px" }}>
          Thank you, <strong>{formData.name}</strong>. Your order #{successOrder.order_id} has been received and dispatched to our warehouse.
        </p>
        <a href="/shop/" style={{ display: "inline-block", background: "#C9A84C", color: "#1A1A2E", padding: "12px 28px", borderRadius: "50px", textDecoration: "none", fontWeight: "700" }}>
          Return to Shop
        </a>
      </div>
    );
  }

  return (
    <div className="rawr-checkout-container" style={{ maxWidth: "1100px", margin: "40px auto", padding: "0 20px" }}>
      <form onSubmit={handleSubmit} style={{ display: "grid", gridTemplateColumns: "1.4fr 1fr", gap: "40px", alignItems: "start" }}>
        <div>
          {error && (
            <div style={{ background: "#FEE2E2", color: "#DC2626", padding: "12px 16px", borderRadius: "8px", marginBottom: "20px" }}>
              {error}
            </div>
          )}

          <div style={{ background: "#fff", borderRadius: "12px", padding: "24px", border: "1px solid #ECECF2", marginBottom: "24px" }}>
            <h3 style={{ fontSize: "1.25rem", fontFamily: "Georgia, serif", color: "#1A1A2E", marginBottom: "18px" }}>
              1. Customer Information
            </h3>
            <div style={{ marginBottom: "14px" }}>
              <label style={{ display: "block", fontSize: "13px", fontWeight: "700", marginBottom: "6px" }}>Full Name *</label>
              <input type="text" value={formData.name} onChange={(e) => handleChange("name", e.target.value)} required style={{ width: "100%", padding: "11px 14px", border: "1px solid #D5D5E2", borderRadius: "8px" }} />
            </div>
            <div style={{ display: "grid", gridTemplateColumns: "1fr 1fr", gap: "14px" }}>
              <div>
                <label style={{ display: "block", fontSize: "13px", fontWeight: "700", marginBottom: "6px" }}>Email *</label>
                <input type="email" value={formData.email} onChange={(e) => handleChange("email", e.target.value)} required style={{ width: "100%", padding: "11px 14px", border: "1px solid #D5D5E2", borderRadius: "8px" }} />
              </div>
              <div>
                <label style={{ display: "block", fontSize: "13px", fontWeight: "700", marginBottom: "6px" }}>Phone *</label>
                <input type="tel" value={formData.phone} onChange={(e) => handleChange("phone", e.target.value)} required style={{ width: "100%", padding: "11px 14px", border: "1px solid #D5D5E2", borderRadius: "8px" }} />
              </div>
            </div>
          </div>

          <div style={{ background: "#fff", borderRadius: "12px", padding: "24px", border: "1px solid #ECECF2" }}>
            <h3 style={{ fontSize: "1.25rem", fontFamily: "Georgia, serif", color: "#1A1A2E", marginBottom: "18px" }}>
              2. Delivery Address
            </h3>
            <CountrySelect value={formData.country} onChange={(val) => handleChange("country", val)} />
            <div style={{ marginBottom: "14px" }}>
              <label style={{ display: "block", fontSize: "13px", fontWeight: "700", marginBottom: "6px" }}>Street Address *</label>
              <input type="text" value={formData.address} onChange={(e) => handleChange("address", e.target.value)} required style={{ width: "100%", padding: "11px 14px", border: "1px solid #D5D5E2", borderRadius: "8px" }} />
            </div>
            <div style={{ display: "grid", gridTemplateColumns: "1fr 1fr", gap: "14px" }}>
              <CitySelect value={formData.city} onChange={(val) => handleChange("city", val)} country={formData.country} />
              <div>
                <label style={{ display: "block", fontSize: "13px", fontWeight: "700", marginBottom: "6px" }}>Postcode *</label>
                <input type="text" value={formData.postcode} onChange={(e) => handleChange("postcode", e.target.value)} required style={{ width: "100%", padding: "11px 14px", border: "1px solid #D5D5E2", borderRadius: "8px" }} />
              </div>
            </div>
          </div>
        </div>

        <div style={{ position: "sticky", top: "100px" }}>
          <OrderSummary items={items} subtotal={subtotal} total={total} currency={currency} />
          <PlaceOrder loading={loading} total={total} currency={currency} />
        </div>
      </form>
    </div>
  );
}

export default Checkout;

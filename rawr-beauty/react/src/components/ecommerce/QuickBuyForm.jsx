import React, { useState } from "react";
import CountrySelect from "./CountrySelect";
import CitySelect from "./CitySelect";

export function QuickBuyForm({ onSubmit, loading, error }) {
  const [formData, setFormData] = useState({
    name: "",
    phone: "",
    address: "",
    country: "United Kingdom",
    city: "",
    postcode: ""
  });

  const handleChange = (field, value) => {
    setFormData((prev) => ({ ...prev, [field]: value }));
  };

  const handleSubmit = (e) => {
    e.preventDefault();
    onSubmit(formData);
  };

  return (
    <form onSubmit={handleSubmit} className="rawr-quick-buy-form">
      {error && (
        <div style={{ background: "#FEE2E2", color: "#DC2626", padding: "10px 14px", borderRadius: "8px", fontSize: "13px", marginBottom: "14px" }}>
          {error}
        </div>
      )}

      <div style={{ marginBottom: "12px" }}>
        <label style={{ display: "block", fontSize: "13px", fontWeight: "700", marginBottom: "4px", color: "#1A1A2E" }}>
          Full Name <span style={{ color: "#E53935" }}>*</span>
        </label>
        <input
          type="text"
          value={formData.name}
          onChange={(e) => handleChange("name", e.target.value)}
          placeholder="e.g. Sarah Jenkins"
          required
          style={{ width: "100%", padding: "10px 14px", border: "1px solid #D5D5E2", borderRadius: "8px", fontSize: "14px", outline: "none" }}
        />
      </div>

      <div style={{ marginBottom: "12px" }}>
        <label style={{ display: "block", fontSize: "13px", fontWeight: "700", marginBottom: "4px", color: "#1A1A2E" }}>
          Phone Number <span style={{ color: "#E53935" }}>*</span>
        </label>
        <input
          type="tel"
          value={formData.phone}
          onChange={(e) => handleChange("phone", e.target.value)}
          placeholder="e.g. 07398 926226"
          required
          style={{ width: "100%", padding: "10px 14px", border: "1px solid #D5D5E2", borderRadius: "8px", fontSize: "14px", outline: "none" }}
        />
      </div>

      <div style={{ marginBottom: "12px" }}>
        <label style={{ display: "block", fontSize: "13px", fontWeight: "700", marginBottom: "4px", color: "#1A1A2E" }}>
          Address <span style={{ color: "#E53935" }}>*</span>
        </label>
        <input
          type="text"
          value={formData.address}
          onChange={(e) => handleChange("address", e.target.value)}
          placeholder="Flat / House number and street"
          required
          style={{ width: "100%", padding: "10px 14px", border: "1px solid #D5D5E2", borderRadius: "8px", fontSize: "14px", outline: "none" }}
        />
      </div>

      <CountrySelect value={formData.country} onChange={(val) => handleChange("country", val)} />

      <CitySelect value={formData.city} onChange={(val) => handleChange("city", val)} country={formData.country} />

      <button
        type="submit"
        disabled={loading}
        style={{
          width: "100%",
          background: "#C9A84C",
          color: "#1A1A2E",
          padding: "14px 20px",
          borderRadius: "50px",
          fontWeight: "800",
          fontSize: "15px",
          border: "none",
          cursor: loading ? "not-allowed" : "pointer",
          letterSpacing: "0.5px",
          marginTop: "16px"
        }}
      >
        {loading ? "Placing Order..." : "⚡ PLACE ORDER NOW"}
      </button>
    </form>
  );
}

export default QuickBuyForm;

import React from "react";
import countries from "../../data/countries";

export function CountrySelect({ value, onChange }) {
  return (
    <div className="form-group mb-3">
      <label htmlFor="country-select" style={{ display: "block", fontSize: "13px", fontWeight: "700", marginBottom: "6px", color: "#1A1A2E" }}>
        Country / Region <span style={{ color: "#E53935" }}>*</span>
      </label>
      <select
        id="country-select"
        value={value}
        onChange={(e) => onChange(e.target.value)}
        style={{
          width: "100%",
          padding: "11px 14px",
          border: "1px solid #D5D5E2",
          borderRadius: "8px",
          fontSize: "14px",
          backgroundColor: "#fff",
          outline: "none"
        }}
      >
        {countries.map((c) => (
          <option key={c.code} value={c.name}>
            {c.name}
          </option>
        ))}
      </select>
    </div>
  );
}

export default CountrySelect;

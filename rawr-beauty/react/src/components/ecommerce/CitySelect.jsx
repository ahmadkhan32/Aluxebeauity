import React from "react";
import ukCities from "../../data/ukCities";

export function CitySelect({ value, onChange, country }) {
  const isUK = country === "United Kingdom" || country === "GB";

  return (
    <div className="form-group mb-3">
      <label htmlFor="city-select" style={{ display: "block", fontSize: "13px", fontWeight: "700", marginBottom: "6px", color: "#1A1A2E" }}>
        Town / City <span style={{ color: "#E53935" }}>*</span>
      </label>
      {isUK ? (
        <select
          id="city-select"
          value={value}
          onChange={(e) => onChange(e.target.value)}
          required
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
          <option value="">Select UK City</option>
          {ukCities.map((city) => (
            <option key={city} value={city}>
              {city}
            </option>
          ))}
        </select>
      ) : (
        <input
          type="text"
          id="city-select"
          value={value}
          onChange={(e) => onChange(e.target.value)}
          placeholder="Enter city"
          required
          style={{
            width: "100%",
            padding: "11px 14px",
            border: "1px solid #D5D5E2",
            borderRadius: "8px",
            fontSize: "14px",
            outline: "none"
          }}
        />
      )}
    </div>
  );
}

export default CitySelect;

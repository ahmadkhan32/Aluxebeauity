import React, { useState } from "react";

export function BranchSearch({ onSearch }) {
  const [query, setQuery] = useState("");

  const handleInput = (e) => {
    const val = e.target.value;
    setQuery(val);
    onSearch(val);
  };

  return (
    <div style={{ position: "relative", maxWidth: "450px", margin: "0 auto" }}>
      <input
        type="text"
        value={query}
        onChange={handleInput}
        placeholder="Enter city or postcode (e.g. Colchester, SW1A)..."
        style={{
          width: "100%",
          padding: "14px 20px",
          borderRadius: "50px",
          border: "1px solid #D5D5E2",
          fontSize: "14px",
          outline: "none",
          boxShadow: "0 4px 15px rgba(0,0,0,0.05)"
        }}
      />
    </div>
  );
}

export default BranchSearch;

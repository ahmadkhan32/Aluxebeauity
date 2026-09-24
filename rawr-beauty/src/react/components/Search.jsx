import React, { useState } from "react";

export default function Search() {
  const [query, setQuery] = useState("");

  const handleSearch = (e) => {
    e.preventDefault();
    if (!query) return;
    window.location.href = `/?s=${encodeURIComponent(query)}`;
  };

  return (
    <form onSubmit={handleSearch} style={{ display: "flex", gap: "8px" }}>
      <input
        type="search"
        placeholder="Search treatments or salons..."
        value={query}
        onChange={(e) => setQuery(e.target.value)}
        className="rawr-input"
        style={{ padding: "8px 14px", fontSize: "13px" }}
      />
      <button type="submit" className="rawr-btn rawr-btn-primary rawr-btn-sm">
        Search
      </button>
    </form>
  );
}

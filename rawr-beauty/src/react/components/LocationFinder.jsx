import React, { useState, useEffect } from "react";

export default function LocationFinder() {
  const [locations, setLocations] = useState([]);
  const [search, setSearch] = useState("");
  const [statusFilter, setStatusFilter] = useState("all");
  const [loading, setLoading] = useState(true);

  useEffect(() => {
    fetch("/wp-json/rawr/v1/locations")
      .then((res) => res.json())
      .then((data) => {
        if (Array.isArray(data)) setLocations(data);
        setLoading(false);
      })
      .catch(() => {
        // Fallback sample data if WordPress REST API not active locally
        setLocations([
          { id: 1, name: "Colchester", address: "Primark 2nd Floor, 9-11 High Street", postcode: "CO1 1DA", hours: "Mon–Sat 9am–7pm", status: "Active", phone: "07398 926226" },
          { id: 2, name: "Canterbury", address: "High Street Centre", postcode: "CT1 2HX", hours: "Mon–Sat 9am–7pm", status: "Active", phone: "07398 926226" },
          { id: 3, name: "Coventry", address: "Broadgate Shopping Arcade", postcode: "CV1 1NF", hours: "Mon–Sat 9am–7pm", status: "Active", phone: "07398 926226" },
          { id: 4, name: "Waltham Cross", address: "Pavilion Shopping Centre", postcode: "EN8 7BY", hours: "Mon–Sat 9am–7pm", status: "Active", phone: "07398 926226" },
          { id: 5, name: "Norwich", address: "Castle Quarter Shopping Centre", postcode: "NR1 3DD", hours: "Mon–Sat 9am–7pm", status: "Active", phone: "07398 926226" },
          { id: 6, name: "Windsor", address: "Windsor Royal Station Mall", postcode: "SL4 1PJ", hours: "Mon–Sat 9am–7pm", status: "Active", phone: "07398 926226" },
          { id: 7, name: "Reading", address: "Broad Street Mall", postcode: "RG1 7QE", hours: "Mon–Sat 9am–6pm", status: "Temporarily Closed", phone: "07398 926226" },
          { id: 8, name: "Doorstep Home Service", address: "Free mobile visit within 2 miles", postcode: "All Regions", hours: "Mon–Sun 9am–8pm", status: "Active", phone: "07398 926226" },
        ]);
        setLoading(false);
      });
  }, []);

  const filtered = locations.filter((loc) => {
    const matchesSearch =
      loc.name.toLowerCase().includes(search.toLowerCase()) ||
      (loc.address && loc.address.toLowerCase().includes(search.toLowerCase())) ||
      (loc.postcode && loc.postcode.toLowerCase().includes(search.toLowerCase()));

    const matchesStatus =
      statusFilter === "all" ||
      loc.status.toLowerCase().replace(" ", "-") === statusFilter.toLowerCase();

    return matchesSearch && matchesStatus;
  });

  return (
    <div className="rawr-location-finder-app" style={{ maxWidth: "1000px", margin: "0 auto" }}>
      {/* Search Bar & Filters */}
      <div
        style={{
          display: "flex",
          gap: "12px",
          marginBottom: "30px",
          flexWrap: "wrap",
        }}
      >
        <input
          type="search"
          placeholder="Search by city, shopping center, or postcode (e.g. Windsor, CO1, Norwich)..."
          value={search}
          onChange={(e) => setSearch(e.target.value)}
          className="rawr-input"
          style={{ flex: 1, minWidth: "260px" }}
        />
        <select
          value={statusFilter}
          onChange={(e) => setStatusFilter(e.target.value)}
          className="rawr-input"
          style={{ width: "auto" }}
        >
          <option value="all">All Branch Statuses</option>
          <option value="active">Open Today</option>
          <option value="temporarily-closed">Temporarily Closed</option>
          <option value="coming-soon">Coming Soon</option>
        </select>
      </div>

      {/* Loading state */}
      {loading ? (
        <p style={{ textAlign: "center", color: "#666" }}>Loading salon locations...</p>
      ) : filtered.length === 0 ? (
        <div style={{ textAlign: "center", padding: "40px", background: "white", borderRadius: "16px" }}>
          <p style={{ color: "#666", marginBottom: "16px" }}>No salon branches found for "{search}".</p>
          <button
            onClick={() => { setSearch(""); setStatusFilter("all"); }}
            className="rawr-btn rawr-btn-outline rawr-btn-sm"
          >
            Clear Filters
          </button>
        </div>
      ) : (
        <div
          style={{
            display: "grid",
            gridTemplateColumns: "repeat(auto-fill, minmax(280px, 1fr))",
            gap: "20px",
          }}
        >
          {filtered.map((loc) => {
            const isClosed = loc.status.toLowerCase().includes("closed");
            return (
              <article
                key={loc.id}
                style={{
                  background: "white",
                  borderRadius: "16px",
                  padding: "24px",
                  border: isClosed ? "1px solid #FFCDD2" : "1px solid #E8E5DF",
                  boxShadow: "0 4px 16px rgba(0,0,0,0.04)",
                  display: "flex",
                  flexDirection: "column",
                  opacity: isClosed ? 0.8 : 1,
                }}
              >
                <div style={{ display: "flex", justifyContent: "space-between", alignItems: "flex-start", marginBottom: "8px" }}>
                  <h3 style={{ fontSize: "18px", fontWeight: 700, margin: 0, color: "#1A1A2E" }}>
                    {loc.name}
                  </h3>
                  <span
                    className={`rawr-badge-status ${
                      isClosed ? "rawr-status-temp-closed" : "rawr-status-open"
                    }`}
                  >
                    ● {loc.status}
                  </span>
                </div>

                <p style={{ fontSize: "13px", color: "#666", lineHeight: 1.5, margin: "6px 0 12px" }}>
                  {loc.address} {loc.postcode && <strong>· {loc.postcode}</strong>}
                </p>

                <p style={{ fontSize: "12px", color: "#888", marginBottom: "20px" }}>
                  🕒 {loc.hours}
                </p>

                <div style={{ marginTop: "auto" }}>
                  {isClosed ? (
                    <a
                      href="https://wa.me/447398926226?text=Hi!%20Can%20you%20confirm%20when%20this%20branch%20will%20reopen?"
                      target="_blank"
                      rel="noopener noreferrer"
                      className="rawr-btn rawr-btn-outline rawr-btn-sm"
                      style={{ width: "100%", textAlign: "center" }}
                    >
                      Inquire on WhatsApp
                    </a>
                  ) : (
                    <a
                      href={`https://wa.me/447398926226?text=${encodeURIComponent(
                        `Hi! I would like to book an appointment at the ${loc.name} salon branch.`
                      )}`}
                      target="_blank"
                      rel="noopener noreferrer"
                      className="rawr-btn rawr-btn-whatsapp rawr-btn-sm"
                      style={{ width: "100%", textAlign: "center" }}
                    >
                      💬 Book This Salon
                    </a>
                  )}
                </div>
              </article>
            );
          })}
        </div>
      )}
    </div>
  );
}

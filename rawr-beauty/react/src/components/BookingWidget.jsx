import React, { useState } from "react";

export default function BookingWidget() {
  const [service, setService] = useState("Hydra Glow Facial (£60)");
  const [locationType, setLocationType] = useState("Home Service (≤ 2 miles free)");
  const [date, setDate] = useState("");
  const [time, setTime] = useState("Afternoon (12:00 - 16:00)");
  const [clientName, setClientName] = useState("");
  const [postcode, setPostcode] = useState("");

  const waMessage = `Hi A Luxe! I would like to book a RAWR Beauty treatment:
- Treatment: ${service}
- Format: ${locationType} ${postcode ? `(${postcode})` : ""}
- Preferred Date: ${date || "Soonest available"}
- Time: ${time}
- Client Name: ${clientName || "Valued Client"}`;

  const waUrl = `https://wa.me/447398926226?text=${encodeURIComponent(waMessage)}`;

  return (
    <div
      style={{
        background: "white",
        borderRadius: "24px",
        padding: "40px",
        border: "1px solid #E8E5DF",
        boxShadow: "0 10px 30px rgba(26,26,46,0.08)",
        maxWidth: "680px",
        margin: "0 auto",
      }}
    >
      <h2 style={{ fontFamily: "Cormorant Garamond, serif", fontSize: "28px", color: "#1A1A2E", marginBottom: "8px", textAlign: "center" }}>
        Interactive Treatment Reservation
      </h2>
      <p style={{ textAlign: "center", color: "#666", fontSize: "14px", marginBottom: "30px" }}>
        Configure your appointment and finalize in 1 click on WhatsApp.
      </p>

      <div style={{ display: "flex", flexDirection: "column", gap: "18px" }}>
        <div>
          <label style={{ display: "block", fontSize: "12px", fontWeight: 700, marginBottom: "6px" }}>
            1. Select Treatment
          </label>
          <select value={service} onChange={(e) => setService(e.target.value)} className="rawr-input">
            <option>Hydra Glow Facial (£60)</option>
            <option>Gold Facial (£30)</option>
            <option>Eyebrow Threading (£5)</option>
            <option>Full Face Threading (£18)</option>
            <option>Full Body Waxing (£80)</option>
            <option>Full Legs Waxing (£25)</option>
            <option>Laser Hair Removal - Full Face (£50)</option>
            <option>Laser Hair Removal - Full Legs (£120)</option>
            <option>Bridal / Full Care Package (£100)</option>
          </select>
        </div>

        <div>
          <label style={{ display: "block", fontSize: "12px", fontWeight: 700, marginBottom: "6px" }}>
            2. Appointment Location
          </label>
          <select value={locationType} onChange={(e) => setLocationType(e.target.value)} className="rawr-input">
            <option>Home Service (≤ 2 miles free)</option>
            <option>In-Salon Treatment Suite</option>
          </select>
        </div>

        {locationType.includes("Home") && (
          <div>
            <label style={{ display: "block", fontSize: "12px", fontWeight: 700, marginBottom: "6px" }}>
              Your Postcode (for free doorstep travel)
            </label>
            <input
              type="text"
              placeholder="e.g. B11 4AA"
              value={postcode}
              onChange={(e) => setPostcode(e.target.value)}
              className="rawr-input"
            />
          </div>
        )}

        <div style={{ display: "grid", gridTemplateColumns: "1fr 1fr", gap: "16px" }}>
          <div>
            <label style={{ display: "block", fontSize: "12px", fontWeight: 700, marginBottom: "6px" }}>
              Preferred Date
            </label>
            <input
              type="date"
              value={date}
              onChange={(e) => setDate(e.target.value)}
              className="rawr-input"
            />
          </div>
          <div>
            <label style={{ display: "block", fontSize: "12px", fontWeight: 700, marginBottom: "6px" }}>
              Time Slot
            </label>
            <select value={time} onChange={(e) => setTime(e.target.value)} className="rawr-input">
              <option>Morning (09:00 - 12:00)</option>
              <option>Afternoon (12:00 - 16:00)</option>
              <option>Evening (16:00 - 20:00)</option>
            </select>
          </div>
        </div>

        <div>
          <label style={{ display: "block", fontSize: "12px", fontWeight: 700, marginBottom: "6px" }}>
            Your Name
          </label>
          <input
            type="text"
            placeholder="e.g. Fatima"
            value={clientName}
            onChange={(e) => setClientName(e.target.value)}
            className="rawr-input"
          />
        </div>

        <a
          href={waUrl}
          target="_blank"
          rel="noopener noreferrer"
          className="rawr-btn rawr-btn-whatsapp rawr-btn-lg"
          style={{ width: "100%", textAlign: "center", marginTop: "12px" }}
        >
          💬 Confirm Appointment on WhatsApp
        </a>
      </div>
    </div>
  );
}

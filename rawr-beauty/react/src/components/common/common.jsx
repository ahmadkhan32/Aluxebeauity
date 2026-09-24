import React from "react";

export function Modal({ isOpen, onClose, title, children }) {
  if (!isOpen) return null;
  return (
    <>
      <div
        onClick={onClose}
        style={{ position: "fixed", inset: 0, backgroundColor: "rgba(0,0,0,0.6)", zIndex: 99998, backdropFilter: "blur(4px)" }}
      />
      <div
        style={{
          position: "fixed",
          top: "50%",
          left: "50%",
          transform: "translate(-50%, -50%)",
          width: "90%",
          maxWidth: "500px",
          maxHeight: "90vh",
          overflowY: "auto",
          backgroundColor: "#fff",
          borderRadius: "16px",
          padding: "28px",
          zIndex: 99999,
          boxShadow: "0 20px 40px rgba(0,0,0,0.2)"
        }}
      >
        <div style={{ display: "flex", justifyContent: "space-between", alignItems: "center", marginBottom: "18px" }}>
          <h3 style={{ margin: 0, fontFamily: "Georgia, serif", color: "#1A1A2E" }}>{title}</h3>
          <button onClick={onClose} style={{ background: "none", border: "none", fontSize: "24px", cursor: "pointer", color: "#8888AA" }}>&times;</button>
        </div>
        {children}
      </div>
    </>
  );
}

export function Loader({ text = "Loading..." }) {
  return (
    <div style={{ display: "flex", alignItems: "center", justifyContent: "center", gap: "10px", padding: "20px" }}>
      <div style={{ width: "20px", height: "20px", border: "2px solid #ECECF2", borderTopColor: "#C9A84C", borderRadius: "50%", animation: "spin 0.8s linear infinite" }} />
      <span style={{ fontSize: "14px", color: "#8888AA" }}>{text}</span>
    </div>
  );
}

export function Toast({ message, type = "success" }) {
  if (!message) return null;
  const isError = type === "error";
  return (
    <div
      style={{
        position: "fixed",
        bottom: "24px",
        right: "24px",
        backgroundColor: isError ? "#E53935" : "#1A1A2E",
        color: "#fff",
        padding: "12px 20px",
        borderRadius: "8px",
        fontSize: "14px",
        boxShadow: "0 10px 25px rgba(0,0,0,0.2)",
        zIndex: 100000
      }}
    >
      {message}
    </div>
  );
}

export function Button({ children, variant = "primary", onClick, ...props }) {
  const isPrimary = variant === "primary";
  return (
    <button
      onClick={onClick}
      style={{
        backgroundColor: isPrimary ? "#C9A84C" : "#1A1A2E",
        color: isPrimary ? "#1A1A2E" : "#fff",
        padding: "12px 24px",
        borderRadius: "50px",
        fontWeight: "700",
        fontSize: "14px",
        border: "none",
        cursor: "pointer",
        transition: "opacity 0.2s ease"
      }}
      {...props}
    >
      {children}
    </button>
  );
}

import React from "react";

export default function MobileMenu({ isOpen, onClose }) {
  if (!isOpen) return null;

  return (
    <div className="rawr-react-mobile-menu">
      <nav>
        <a href="/services">Services</a>
        <a href="/locations">Locations</a>
        <a href="/booking">Book Now</a>
        <a href="/shop">Shop</a>
        <a href="/franchise">Franchise</a>
        <a href="/careers">Careers</a>
      </nav>
    </div>
  );
}

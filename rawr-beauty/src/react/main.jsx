import React from "react";
import ReactDOM from "react-dom/client";
import LocationFinder from "./components/LocationFinder";
import BookingWidget from "./components/BookingWidget";
import CartDrawer from "./components/CartDrawer";

// Mount Location Finder
const locationEl = document.getElementById("rawr-location-app");
if (locationEl) {
  ReactDOM.createRoot(locationEl).render(<LocationFinder />);
}

// Mount Booking Widget
const bookingEl = document.getElementById("rawr-booking-widget-mount");
if (bookingEl) {
  ReactDOM.createRoot(bookingEl).render(<BookingWidget />);
}

// Mount Cart Drawer
const cartEl = document.getElementById("rawr-cart-drawer-mount");
if (cartEl) {
  ReactDOM.createRoot(cartEl).render(<CartDrawer />);
}

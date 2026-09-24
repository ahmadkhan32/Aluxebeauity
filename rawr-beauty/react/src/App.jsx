import React from "react";
import LocationFinder from "./components/LocationFinder";
import BookingWidget from "./components/BookingWidget";
import CartDrawer from "./components/CartDrawer";

export default function App() {
  return (
    <div>
      <LocationFinder />
      <BookingWidget />
      <CartDrawer />
    </div>
  );
}

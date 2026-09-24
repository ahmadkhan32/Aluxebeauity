import React from "react";
import Header from "./components/Header";
import LocationFinder from "./components/locations/LocationFinder";
import BookingWidget from "./components/BookingWidget";
import CartDrawer from "./components/ecommerce/CartDrawer";
import QuickBuy from "./components/ecommerce/QuickBuy";
import useCart from "./hooks/useCart";
import useQuickBuy from "./hooks/useQuickBuy";

export default function App() {
  const {
    items,
    itemCount,
    subtotal,
    total,
    currency,
    isOpen: isCartOpen,
    loading: cartLoading,
    openCart,
    closeCart,
    addToCart,
    updateQuantity,
    removeItem,
    clearCart
  } = useCart();

  const {
    isOpen: isQuickBuyOpen,
    product: quickBuyProduct,
    quantity: quickBuyQty,
    subtotal: quickBuySubtotal,
    loading: quickBuyLoading,
    error: quickBuyError,
    orderResult,
    closeQuickBuy,
    changeQuantity,
    submitOrder
  } = useQuickBuy();

  return (
    <div className="rawr-react-root">
      <Header cartCount={itemCount} onOpenCart={openCart} />
      <LocationFinder />
      <BookingWidget />

      {/* Global Interactive Cart Drawer */}
      <CartDrawer
        isOpen={isCartOpen}
        onClose={closeCart}
        items={items}
        itemCount={itemCount}
        subtotal={subtotal}
        total={total}
        currency={currency}
        loading={cartLoading}
        onUpdateQuantity={updateQuantity}
        onRemove={removeItem}
        onClear={clearCart}
      />

      {/* Global 1-Click Quick Buy Modal */}
      <QuickBuy
        isOpen={isQuickBuyOpen}
        product={quickBuyProduct}
        quantity={quickBuyQty}
        subtotal={quickBuySubtotal}
        onClose={closeQuickBuy}
        onQtyChange={changeQuantity}
        onSubmit={submitOrder}
        loading={quickBuyLoading}
        error={quickBuyError}
        orderResult={orderResult}
      />
    </div>
  );
}

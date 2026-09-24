/**
 * Cart API Calls (/wp-json/rawr/v1/cart)
 */
import request from './api';

export const cartApi = {
  getCart: () => request('/cart', { method: 'GET' }),
  
  addToCart: (productId, quantity = 1) => 
    request('/cart/add', {
      method: 'POST',
      body: JSON.stringify({ product_id: productId, quantity })
    }),

  updateQuantity: (cartItemKey, quantity) => 
    request('/cart/update', {
      method: 'POST',
      body: JSON.stringify({ cart_item_key: cartItemKey, quantity })
    }),

  removeItem: (cartItemKey) => 
    request('/cart/remove', {
      method: 'POST',
      body: JSON.stringify({ cart_item_key: cartItemKey })
    }),

  clearCart: () => 
    request('/cart/clear', { method: 'POST' })
};

export default cartApi;

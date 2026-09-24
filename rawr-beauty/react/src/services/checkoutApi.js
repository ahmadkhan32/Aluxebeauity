/**
 * Checkout API Service
 */
import request from './api';

export const checkoutApi = {
  processOrder: (checkoutData) => 
    request('/checkout/process', {
      method: 'POST',
      body: JSON.stringify(checkoutData)
    })
};

export default checkoutApi;

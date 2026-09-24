/**
 * Orders & Quick Buy API Service
 */
import request from './api';

export const orderApi = {
  quickBuy: (quickBuyPayload) => 
    request('/quick-buy', {
      method: 'POST',
      body: JSON.stringify(quickBuyPayload)
    })
};

export default orderApi;

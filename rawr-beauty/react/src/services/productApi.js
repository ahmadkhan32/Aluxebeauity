/**
 * Products API Service
 */
import request from './api';

export const productApi = {
  getProducts: (category = '') => {
    const query = category ? `?category=${encodeURIComponent(category)}` : '';
    return request(`/products${query}`, { method: 'GET' });
  }
};

export default productApi;

/**
 * Base API Client for WordPress & WooCommerce REST Endpoints
 */
const BASE_URL = typeof window !== 'undefined' && window.rawrSettings?.restUrl 
  ? window.rawrSettings.restUrl 
  : '/wp-json/rawr/v1';

const NONCE = typeof window !== 'undefined' && window.rawrSettings?.nonce 
  ? window.rawrSettings.nonce 
  : '';

export async function request(endpoint, options = {}) {
  const url = endpoint.startsWith('http') ? endpoint : `${BASE_URL}${endpoint}`;
  const headers = {
    'Content-Type': 'application/json',
    ...(NONCE ? { 'X-WP-Nonce': NONCE } : {}),
    ...(options.headers || {})
  };

  try {
    const response = await fetch(url, {
      ...options,
      headers
    });
    const data = await response.json();
    return data;
  } catch (error) {
    console.error(`API Error on ${endpoint}:`, error);
    return { success: false, message: error.message };
  }
}

export default request;

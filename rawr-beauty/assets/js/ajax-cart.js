/**
 * RAWR Beauty Global AJAX Cart Handler
 */
(function() {
  'use strict';

  var cartState = {
    items: [],
    subtotal: 0,
    itemCount: 0,
    currency: '£'
  };

  function updateDrawerUI() {
    var countBadges = document.querySelectorAll('.rawr-cart-count');
    countBadges.forEach(function(el) {
      el.textContent = cartState.itemCount;
    });

    var subtotalEl = document.getElementById('rawr-drawer-subtotal');
    if (subtotalEl) {
      subtotalEl.textContent = cartState.currency + cartState.subtotal.toFixed(2);
    }

    var totalEl = document.getElementById('rawr-drawer-total');
    if (totalEl) {
      totalEl.textContent = cartState.currency + cartState.subtotal.toFixed(2);
    }

    var shippingText = document.getElementById('rawr-shipping-threshold-text');
    var shippingBar = document.getElementById('rawr-shipping-bar');
    if (shippingText && shippingBar) {
      var remaining = 40 - cartState.subtotal;
      if (remaining <= 0) {
        shippingText.innerHTML = '🎉 <strong>FREE UK Tracked Delivery Unlocked!</strong>';
        shippingBar.style.width = '100%';
      } else {
        shippingText.innerHTML = 'Add <strong>£' + remaining.toFixed(2) + '</strong> for FREE UK Tracked Delivery';
        var pct = Math.min(100, (cartState.subtotal / 40) * 100);
        shippingBar.style.width = pct + '%';
      }
    }

    var listContainer = document.getElementById('rawr-drawer-items-list');
    if (!listContainer) return;

    if (cartState.items.length === 0) {
      listContainer.innerHTML = '<div style="text-align: center; padding: 60px 10px;">' +
        '<div style="font-size: 40px; margin-bottom: 16px;">🛍️</div>' +
        '<h4 style="font-size: 1.15rem; font-family: Georgia, serif; margin: 0 0 8px;">Your bag is empty</h4>' +
        '<p style="font-size: 13px; color: #8888AA; margin-bottom: 20px;">Explore our salon treatments & retail care.</p>' +
        '<a href="/shop/" class="btn btn-primary" onclick="window.rawrCloseCart && window.rawrCloseCart()" style="display:inline-block; background:#C9A84C; color:#1A1A2E; padding:10px 24px; border-radius:50px; font-weight:700; text-decoration:none; font-size:13px;">Start Shopping</a>' +
        '</div>';
      return;
    }

    var html = '';
    cartState.items.forEach(function(item) {
      html += '<div class="rawr-cart-item-row" style="display:flex; gap:14px; padding:14px 0; border-bottom:1px solid #F0F0F5;">' +
        '<div style="width:65px; height:65px; border-radius:8px; overflow:hidden; background:#FAF9F6; flex-shrink:0; border:1px solid #ECECF2;">' +
          '<img src="' + (item.image || '') + '" alt="' + item.name + '" style="width:100%; height:100%; object-fit:cover;" />' +
        '</div>' +
        '<div style="flex-grow:1; display:flex; flex-direction:column; justify-content:space-between;">' +
          '<div style="display:flex; justify-content:space-between; align-items:flex-start;">' +
            '<h4 style="font-size:14px; margin:0; font-weight:700; color:#1A1A2E;">' + item.name + '</h4>' +
            '<button type="button" onclick="window.rawrRemoveCartItem(\'' + item.key + '\')" style="background:none; border:none; cursor:pointer; color:#A0A0B2; font-size:16px;">🗑</button>' +
          '</div>' +
          '<div style="display:flex; justify-content:space-between; align-items:center; margin-top:8px;">' +
            '<div style="display:inline-flex; align-items:center; border:1px solid #D5D5E2; border-radius:50px; padding:2px 6px;">' +
              '<button type="button" onclick="window.rawrUpdateCartQty(\'' + item.key + '\', ' + (item.quantity - 1) + ')" style="background:none; border:none; width:26px; height:26px; font-size:16px; cursor:pointer; font-weight:700;">−</button>' +
              '<span style="width:28px; text-align:center; font-weight:700; font-size:13px;">' + item.quantity + '</span>' +
              '<button type="button" onclick="window.rawrUpdateCartQty(\'' + item.key + '\', ' + (item.quantity + 1) + ')" style="background:none; border:none; width:26px; height:26px; font-size:16px; cursor:pointer; font-weight:700;">+</button>' +
            '</div>' +
            '<div style="font-size:14px; font-weight:700; color:#1A1A2E;">' + cartState.currency + (item.price * item.quantity).toFixed(2) + '</div>' +
          '</div>' +
        '</div>' +
      '</div>';
    });
    listContainer.innerHTML = html;
  }

  window.rawrOpenCart = function() {
    var drawer = document.getElementById('rawr-cart-drawer');
    var overlay = document.getElementById('rawr-cart-drawer-overlay');
    if (drawer && overlay) {
      overlay.style.display = 'block';
      setTimeout(function() {
        overlay.style.opacity = '1';
        drawer.style.right = '0';
      }, 10);
    }
  };

  window.rawrCloseCart = function() {
    var drawer = document.getElementById('rawr-cart-drawer');
    var overlay = document.getElementById('rawr-cart-drawer-overlay');
    if (drawer && overlay) {
      drawer.style.right = '-450px';
      overlay.style.opacity = '0';
      setTimeout(function() {
        overlay.style.display = 'none';
      }, 350);
    }
  };

  window.rawrAddToCart = function(productId, quantity, productMeta) {
    quantity = quantity || 1;
    var existing = cartState.items.find(function(it) { return it.id === productId; });
    if (existing) {
      existing.quantity += quantity;
    } else {
      var itemMeta = productMeta || {
        name: 'RAWR Beauty Treatment Care',
        price: 25.00,
        image: ''
      };
      cartState.items.push({
        key: 'item_' + productId + '_' + Date.now(),
        id: productId,
        name: itemMeta.name,
        price: itemMeta.price,
        quantity: quantity,
        image: itemMeta.image
      });
    }
    recalculateTotals();
    updateDrawerUI();
    window.rawrOpenCart();
  };

  window.rawrUpdateCartQty = function(itemKey, newQty) {
    if (newQty <= 0) {
      window.rawrRemoveCartItem(itemKey);
      return;
    }
    var item = cartState.items.find(function(it) { return it.key === itemKey; });
    if (item) {
      item.quantity = newQty;
      recalculateTotals();
      updateDrawerUI();
    }
  };

  window.rawrRemoveCartItem = function(itemKey) {
    cartState.items = cartState.items.filter(function(it) { return it.key !== itemKey; });
    recalculateTotals();
    updateDrawerUI();
  };

  function recalculateTotals() {
    var sub = 0;
    var count = 0;
    cartState.items.forEach(function(it) {
      sub += it.price * it.quantity;
      count += it.quantity;
    });
    cartState.subtotal = sub;
    cartState.itemCount = count;
  }

  // Wire overlay click to close
  document.addEventListener('DOMContentLoaded', function() {
    var overlay = document.getElementById('rawr-cart-drawer-overlay');
    if (overlay) {
      overlay.addEventListener('click', window.rawrCloseCart);
    }
  });

})();

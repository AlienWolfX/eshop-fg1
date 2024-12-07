<?php

use HTTP\Router;



/* Testing Routes */

Router::add('/api/users/show', 'UserController', 'showUser');
Router::add('/api/getToken', 'TokenController', 'getToken', 'POST');

/* Routes for the Cart */

Router::add('/api/cart', 'CartController', 'viewCart', 'GET');
Router::add('/api/cart/items', 'CartController', 'addItemToCart', 'POST');
Router::add('/api/cart/items/{product_id}', 'CartController', 'updateItemQuantity', 'PUT');
Router::add('/api/cart/items/{product_id}', 'CartController', 'deleteItemInCart', 'DELETE');
Router::add('/api/cart', 'CartController', 'removeAllItemInCart', 'DELETE');


/* Routes for the Checkout */

Router::add('/api/checkout/initiate', 'CheckoutController', 'checkout_initiate', 'POST');
Router::add('/api/checkout/payment', 'CheckoutController', 'paymentMethod', 'POST');
Router::add('/api/checkout/review/{order_id}', 'CheckoutController', 'review', 'GET');
Router::add('/api/checkout/confirm', 'CheckoutController', 'confirm_order', 'POST');
Router::add('/api/checkout/cancel', 'CheckoutController', 'cancel_order', 'POST');
Router::add('/api/checkout/{order_id}/status', 'CheckoutController', 'track_order', 'GET');
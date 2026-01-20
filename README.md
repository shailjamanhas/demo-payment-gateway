# 💳 Demo Payment Gateway Plugin for WooCommerce

Demo Payment Gateway is a custom WooCommerce payment gateway plugin built for learning and testing purposes. It simulates the payment process and successfully completes orders without making any real transactions.

This plugin demonstrates how to integrate a custom payment method into the WooCommerce checkout flow.

---

## ✨ Features

- Adds a custom payment option on WooCommerce checkout page
- Fake payment processing for testing orders
- Automatically completes and updates order status
- Admin settings to enable/disable gateway and change title
- Lightweight and easy to understand code structure

---

## 🛠 Technologies Used

- PHP
- WordPress Plugin API
- WooCommerce Payment Gateway API
- Basic JavaScript

---

## ⚙ Requirements

- WordPress installed
- WooCommerce plugin activated

---

## ⚙ Installation Steps

1. Download or clone this repository
2. Upload folder to:  
   `wp-content/plugins/demo-payment-gateway/`
3. Go to WordPress Admin → Plugins → Activate **Demo Payment Gateway**
4. Go to **WooCommerce → Settings → Payments**
5. Enable **DemoPay Gateway** and save changes
6. Go to checkout page and place an order using DemoPay

---

## 🔍 How It Works

- Plugin registers a new WooCommerce payment gateway
- Custom payment fields appear on checkout
- On order submission, order is marked as paid programmatically
- Cart is emptied and user is redirected to thank you page

---

## 🎯 Purpose of Project

This project was created to practice:
- WooCommerce payment gateway integration
- Checkout customization
- Order status handling via code
- Plugin file structuring

---

## 🚀 Future Improvements

- Add transaction ID generation
- Validate card fields using JavaScript
- Add webhook simulation
- Save payment meta in order details

---

## 👩‍💻 Author

Developed by **Shailja**  
For learning and portfolio purposes.

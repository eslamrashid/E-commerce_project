# 🐴 HorseMart – Horse Equipment Online Store

## 📌 Project Overview

HorseMart is an e-commerce web application designed to provide horse owners and riders with a convenient online platform for purchasing horse equipment. The system allows customers to browse products, manage a shopping cart, place orders, and receive order confirmations. Administrators can manage products and view customer orders through an admin dashboard.

---

## 🎯 Project Objectives

### Main Objective

To develop a responsive e-commerce website for selling horse equipment online.

### Specific Objectives

* Display horse equipment online.
* Organize products into categories.
* Allow customers to add products to a shopping cart.
* Enable customers to place orders.
* Store customer and order information in a database.
* Provide a responsive website interface.

---

## ❗ Problem Statement

Many horse owners and riders must visit multiple stores to purchase riding equipment, feeding supplies, and horse care products. This process is time-consuming and inconvenient. HorseMart solves this problem by providing a centralized online marketplace where customers can browse and purchase all required horse equipment from one platform.

---

## 🛍️ Product Categories

### 1. Riding Equipment

* Saddles
* Stirrups
* Riding Boots
* Riding Helmets

### 2. Horse Care Equipment

* Brushes
* Grooming Kits
* Horse Shampoo
* Hoof Care Tools

### 3. Feeding Equipment

* Feed Buckets
* Water Troughs
* Hay Nets
* Feed Storage Containers

---

## ✨ System Features

### Customer Features

* Browse products
* View product details
* Add products to cart
* Remove products from cart
* Update product quantities
* Checkout and place orders
* Receive order confirmation

### Admin Features

* Admin login
* Add products
* Update products
* Delete products
* View customer orders

---

## 📄 Website Pages

1. Home Page
2. Products Page
3. Product Details Page
4. Cart Page
5. Checkout Page
6. Order Confirmation Page
7. Admin Login Page
8. Admin Dashboard

---

## 🛠️ Technologies Used

### Frontend

* HTML5
* CSS3
* JavaScript

### Backend

* PHP

### Database

* MySQL

### Version Control

* Git
* GitHub

---

## 🗄️ Database Design

### products Table

| Field       | Type    |
| ----------- | ------- |
| id          | INT     |
| name        | VARCHAR |
| description | TEXT    |
| price       | DECIMAL |
| image       | VARCHAR |
| category    | VARCHAR |

### customers Table

| Field    | Type    |
| -------- | ------- |
| id       | INT     |
| fullname | VARCHAR |
| email    | VARCHAR |
| phone    | VARCHAR |
| address  | TEXT    |

### orders Table

| Field        | Type     |
| ------------ | -------- |
| id           | INT      |
| customer_id  | INT      |
| total_amount | DECIMAL  |
| order_date   | DATETIME |

### order_items Table

| Field      | Type |
| ---------- | ---- |
| id         | INT  |
| order_id   | INT  |
| product_id | INT  |
| quantity   | INT  |

---

## 🚀 Installation Guide

1. Clone the repository:

```bash
git clone https://github.com/your-username/HorseMart.git
```

2. Move the project folder to your web server directory (XAMPP htdocs or WAMP www).

3. Create a MySQL database named:

```sql
horsemart
```

4. Import the provided SQL database file.

5. Configure database connection settings in:

```php
config.php
```

6. Start Apache and MySQL.

7. Open the project in your browser:

```text
http://localhost/HorseMart
```

---

## 📷 Screenshots

Add screenshots of:

* Home Page
* Products Page
* Shopping Cart
* Checkout Page
* Admin Dashboard

---

## 🔮 Future Improvements

* User registration and login
* Online payment integration
* Product search and filtering
* Order tracking system
* Customer reviews and ratings
* Email notifications

---

## 👨‍💻 Author

**Islam Hassan**

Student Project – E-Commerce Website Development

---

## 📜 License

This project was developed for educational purposes as part of a university coursework assignment.

# ShopSphere - PHP E-Commerce Management System

## Overview

ShopSphere is a simple e-commerce and inventory management web application developed using PHP, MySQL, HTML, CSS, and JavaScript. The application allows users to browse products, place orders, manage inventory, and view order details through a user-friendly dashboard.

This project demonstrates core web development concepts including authentication, database integration, session management, product management, and order processing.

---

## Features

### User Authentication

* User Registration
* User Login
* Logout Functionality
* Session Management

### Product Dashboard

* Display products with images
* Product pricing and stock information
* Responsive product cards
* Inventory overview section

### Order Management

* Place product orders
* Store order details in MySQL database
* View placed orders
* Display ordered products in a card/grid layout
* Order history page

### Inventory Features

* Product stock tracking
* Product catalog management
* Inventory dashboard statistics

---

## Technology Stack

### Frontend

* HTML5
* CSS3
* JavaScript
* Responsive Grid Layout

### Backend

* PHP

### Database

* MySQL
* phpMyAdmin

### Development Environment

* XAMPP
* VS Code

---

## Project Structure

```
assessment/
│
├── dashboard.php
├── login.php
├── register.php
├── logout.php
├── orders.php
├── place_order.php
├── home.php
├── db.php
├── style.css
│
├── images/
│   ├── 1plus.jpg
│   ├── iphone.jpg
│   ├── samsung.jpg
│   ├── vivo.jpg
│   ├── oppo.jpg
│   ├── watch1.jpg
│   └── ...
│
├── user.sql
├── order.sql
│
└── backend/
    └── database/
        └── migrations/
```

---

## Database Tables

### Users Table

Stores registered user information.

### Orders Table

Stores order details including:

* Product Name
* Price
* Quantity
* Product Image
* User Information

### Products Table

Stores product inventory information.

---

## Application Workflow

1. User registers an account.
2. User logs into the application.
3. Products are displayed on the dashboard.
4. User selects a product and clicks **Buy Now**.
5. Order information is stored in the database.
6. User can view all ordered products in the Orders page.
7. Orders are displayed as responsive product cards.

---

## Learning Outcomes

This project helped demonstrate:

* PHP Fundamentals
* MySQL Database Operations
* CRUD Concepts
* Session Handling
* Form Processing
* Authentication Systems
* Inventory Management
* Order Processing
* Responsive UI Design

---

## Future Enhancements

* Shopping Cart Functionality
* Product Search and Filtering
* Admin Dashboard
* Order Status Tracking
* Payment Gateway Integration
* Email Notifications
* Laravel Migration
* REST API Development

---

## Screenshots

### Dashboard

* Product catalog with inventory details

### Orders Page

* Grid-based order display with product images

### Authentication

* Login and Registration pages

---

## Author

**Sakthivel P**

Aspiring Full Stack Developer

Skills:

* PHP
* MySQL
* Java
* Spring Boot
* HTML
* CSS
* JavaScript
* REST APIs



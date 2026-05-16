# Warehouse Inventory Management System

Modern warehouse inventory management application built using Laravel 12 and Tailwind CSS.

---

## Features

### Authentication
- Login
- Register
- Logout

### Dashboard
- Total Products
- Total Stock
- Low Stock Alert
- Total Asset Value
- Incoming Goods Statistics
- Outgoing Goods Statistics

### Product Management
- Add Product
- Edit Product
- Delete Product
- Product Search
- Pagination

### Supplier Management
- Add Supplier
- Edit Supplier
- Delete Supplier

### Incoming Goods
- Add Incoming Goods
- Select Supplier
- Auto Increase Product Stock

### Outgoing Goods
- Add Outgoing Goods
- Auto Reduce Product Stock

### Reporting
- Export Excel
- Export PDF

---

## Tech Stack

- Laravel 12
- PHP 8
- MySQL
- Tailwind CSS
- Laravel Breeze
- DomPDF
- Laravel Excel

---

## Installation

```bash
git clone https://github.com/USERNAME/inventory_gudang.git

cd inventory_gudang

composer install

npm install

cp .env.example .env

php artisan key:generate

php artisan migrate

npm run dev

php artisan serve
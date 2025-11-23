<!-- portfolio -->
<!-- slug: php-simple-inventory -->
<!-- title: PHP Simple Inventory -->
<!-- description: Simple inventory management system built with native PHP and MySQL for small businesses -->
<!-- image: https://github.com/user-attachments/assets/1f040d7c-6b50-4d07-b93b-d23c638ea418 -->
<!-- tags: php, mysql, inventory, crud, simple -->

# PHP Simple Inventory System

<img width="1536" height="1024" alt="php-simple-inventory" src="https://github.com/user-attachments/assets/1f040d7c-6b50-4d07-b93b-d23c638ea418" />

A straightforward inventory management system built with native PHP and MySQL. This project was created during my high school years to help small businesses manage their product inventory efficiently.

## 📋 Overview

This simple inventory system provides essential functionality for tracking products, stock levels, and basic transactions. Built without frameworks, it demonstrates fundamental PHP and MySQL concepts in a practical business application.

## ✨ Features

- **Product Management**
  - Add new products
  - View all products
  - Update product information
  - Delete products
  - Track stock quantities

- **Stock Operations**
  - Add stock (incoming goods)
  - Reduce stock (outgoing goods/sales)
  - View current stock levels
  - Low stock alerts

- **Basic Reporting**
  - Product list
  - Stock movements
  - Current inventory status

- **Simple Interface**
  - Easy-to-use dashboard
  - Clean data tables
  - Quick add/edit forms

## 🛠️ Technologies Used

- **PHP**: Native PHP (no frameworks)
- **MySQL**: Database
- **HTML/CSS**: Frontend
- **JavaScript**: Client interactions
- **Bootstrap** (if used): UI framework

## 📁 Project Structure

```
php_simple_inventory/
├── index.php              # Main dashboard
├── proses/
│   ├── tambah.php        # Add product
│   ├── edit.php          # Edit product
│   ├── hapus.php         # Delete product
│   ├── stok_masuk.php    # Add stock
│   └── stok_keluar.php   # Reduce stock
├── assets/
│   └── css/
│       └── style.css     # Custom styles
├── inventory.sql         # Database schema
└── README.md
```

## 🚀 Getting Started

### Prerequisites

- XAMPP, WAMP, or similar local server
- PHP 5.6 or higher
- MySQL 5.5 or higher

### Installation

1. **Clone or Download**
   ```bash
   git clone <repository-url>
   ```

2. **Move to Server Directory**
   ```bash
   # XAMPP
   mv php_simple_inventory C:/xampp/htdocs/
   
   # WAMP
   mv php_simple_inventory C:/wamp64/www/
   ```

3. **Create Database**
   - Open phpMyAdmin:  `http://localhost/phpmyadmin`
   - Create database named `inventory`

4. **Import Schema**
   - Select `inventory` database
   - Import `inventory.sql` file
   - Tables will be created automatically

5. **Start Server**
   - Start Apache and MySQL in XAMPP/WAMP

6. **Access Application**
   ```
   http://localhost/php_simple_inventory
   ```

## 💻 Usage

### Dashboard
- View summary of total products
- See low stock warnings
- Quick access to all features

### Adding Products
1. Click "Add Product"
2. Enter product details:
   - Product name
   - Product code/SKU
   - Category
   - Initial stock
   - Unit price
3. Save product

### Managing Stock

**Add Stock (Stock In):**
1. Select product
2. Enter quantity to add
3. Add notes (supplier, purchase order, etc.)
4. Submit

**Reduce Stock (Stock Out):**
1. Select product
2. Enter quantity to reduce
3. Add notes (sales, damage, etc.)
4. Submit

### Viewing Inventory
- Main page shows all products
- Displays current stock levels
- Color-coded low stock indicators

## 🗄️ Database Schema

### Table: `products`
```sql
CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    code VARCHAR(50) UNIQUE,
    name VARCHAR(100),
    category VARCHAR(50),
    stock INT DEFAULT 0,
    min_stock INT DEFAULT 10,
    price DECIMAL(10,2),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

### Table: `stock_transactions`
```sql
CREATE TABLE stock_transactions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    product_id INT,
    type ENUM('in', 'out'),
    quantity INT,
    notes TEXT,
    transaction_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (product_id) REFERENCES products(id)
);
```

## 🎯 Use Cases

- Small retail shops
- Warehouses
- School/office supply management
- Workshop inventory
- Home-based businesses

## 🔧 Configuration

Database connection in `config.php` or similar:
```php
<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "inventory";

$conn = mysqli_connect($host, $user, $pass, $db);
?>
```

## 🐛 Troubleshooting

**Can't Connect to Database**
- Ensure MySQL is running
- Check database credentials
- Verify database name is correct

**Products Not Showing**
- Check if data exists in database
- Verify SQL query syntax
- Check for PHP errors

## 🚀 Future Enhancements

- User authentication
- Supplier management
- Purchase orders
- Sales tracking
- Advanced reporting
- Barcode scanning
- Export to Excel/PDF
- Multi-warehouse support

## 🎓 Learning Value

Built during high school, this project taught:
- PHP fundamentals
- MySQL operations
- CRUD implementation
- Inventory management concepts
- Web application structure

## 🤝 Contributing

This is a learning project. Feel free to fork and improve!

## 📄 License

Open source - educational use.

---

**Built in High School** 📦✨  
A simple solution for small business inventory needs


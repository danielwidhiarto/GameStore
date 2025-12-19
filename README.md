<div align="center">

# 🎮 GameStore

[![Laravel](https://img.shields.io/badge/Laravel-10.x-FF2D20?style=flat&logo=laravel)](https://laravel.com)
[![PHP](https://img.shields.io/badge/PHP-8.1+-777BB4?style=flat&logo=php)](https://www.php.net)
[![License](https://img.shields.io/badge/License-MIT-green.svg)](LICENSE)

**A modern, feature-rich online game marketplace built with Laravel**

[Features](#-features) • [Installation](#-installation) • [Usage](#-usage) • [Tech Stack](#-tech-stack) • [Contributing](#-contributing)

</div>

---

## 📖 About

GameStore is a comprehensive e-commerce platform designed specifically for digital game distribution. Built with Laravel 10, it provides a seamless shopping experience for game enthusiasts while offering robust management tools for administrators. The platform features a clean, intuitive interface and implements role-based access control for enhanced security.

## ✨ Features

### 🛒 For Customers

-   **Browse Game Catalog** - Explore an extensive collection of games with detailed information
-   **Advanced Search** - Find games quickly using our powerful search functionality
-   **Shopping Cart** - Add multiple games to cart and manage your selections
-   **Secure Checkout** - Complete purchases with a streamlined checkout process
-   **User Profile** - Manage personal information and view purchase history
-   **Guest Access** - Browse the catalog without registration

### 👨‍💼 For Administrators

-   **Game Management** - Add, update, or remove games from the catalog
-   **Genre Management** - Organize games by categories and manage genre metadata
-   **Product CRUD Operations** - Full control over game inventory
-   **Search & Filter** - Quick access to products through admin search tools
-   **Profile Management** - Update administrator profile information

### 🔒 Security & Access Control

-   **Role-Based Authentication** - Separate access levels for Admin and Customer roles
-   **Middleware Protection** - Secure routes with custom middleware
-   **Session Management** - Safe and secure user sessions

## 🛠 Tech Stack

-   **Backend Framework:** Laravel 10.x
-   **PHP Version:** 8.1+
-   **Database:** PostgreSQL
-   **Frontend Assets:** Vite
-   **Authentication:** Laravel Sanctum
-   **Deployment:** Vercel (Serverless)

## 📋 Prerequisites

Before you begin, ensure you have the following installed:

-   PHP >= 8.1
-   Composer
-   PostgreSQL
-   Node.js & NPM
-   Git

## 🚀 Installation

Follow these steps to set up GameStore on your local machine:

### 1. Clone the Repository

```bash
git clone https://github.com/danielwidhiarto/GameStore.git
cd GameStore
```

### 2. Install PHP Dependencies

```bash
composer install
```

### 3. Install Node Dependencies

```bash
npm install
```

### 4. Environment Configuration

```bash
# Copy the example environment file
cp .env.example .env

# Generate application key
php artisan key:generate
```

### 5. Configure Database

Open `.env` file and update database credentials:

```env
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=gamestore
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

### 6. Run Migrations

```bash
php artisan migrate
```

### 7. Seed Database (Optional)

```bash
# Seed all data (recommended for testing)
php artisan db:seed

# Or seed specific seeders
php artisan db:seed --class=GenreSeeder
php artisan db:seed --class=GameSeeder
php artisan db:seed --class=UserSeeder
```

### 8. Build Frontend Assets

```bash
# For development
npm run dev

# For production
npm run build
```

### 9. Start Development Server

```bash
php artisan serve
```

### 10. Access the Application

Open your browser and navigate to:

```
http://localhost:8000
```

## 👥 Usage

### Default Credentials (After Seeding)

**Admin Account:**

```
Email: admin@gamestore.com
Password: (check UserSeeder)
```

**Customer Account:**

```
Email: customer@gamestore.com
Password: (check UserSeeder)
```

### Customer Workflow

1. **Register/Login** - Create an account or sign in
2. **Browse Games** - Explore the game catalog
3. **Search** - Use the search feature to find specific games
4. **Add to Cart** - Select games and add them to your shopping cart
5. **Checkout** - Complete the purchase process
6. **View Profile** - Access your profile to see purchase history

### Admin Workflow

1. **Login** - Sign in with admin credentials
2. **Manage Games** - Add, edit, or delete games from the catalog
3. **Manage Genres** - Create and update game categories
4. **Search Products** - Quickly find games in the admin panel
5. **Update Profile** - Maintain admin account information

## 📁 Project Structure

```
GameStore/
├── app/
│   ├── Http/
│   │   ├── Controllers/      # Application controllers
│   │   └── Middleware/        # Custom middleware
│   └── Models/                # Eloquent models
├── database/
│   ├── migrations/            # Database migrations
│   └── seeders/               # Database seeders
├── resources/
│   ├── views/                 # Blade templates
│   ├── css/                   # Stylesheets
│   └── js/                    # JavaScript files
├── routes/
│   └── web.php               # Web routes
└── public/                    # Public assets
```

## 🔑 Key Routes

| Route                 | Description       | Access   |
| --------------------- | ----------------- | -------- |
| `/`                   | Landing page      | Public   |
| `/gamestore/login`    | Login page        | Public   |
| `/gamestore/register` | Registration page | Public   |
| `/home/customer`      | Customer home     | Customer |
| `/home/admin`         | Admin home        | Admin    |
| `/cart/view`          | Shopping cart     | Customer |
| `/managegame`         | Manage games      | Admin    |
| `/managegenre`        | Manage genres     | Admin    |

## 🧪 Testing

Run the test suite:

```bash
# Run all tests
php artisan test

# Run specific test
php artisan test --filter TestName
```

## 🤝 Contributing

Contributions are welcome! Here's how you can help:

1. **Fork the repository**
2. **Create a feature branch**
    ```bash
    git checkout -b feature/AmazingFeature
    ```
3. **Commit your changes**
    ```bash
    git commit -m 'Add some AmazingFeature'
    ```
4. **Push to the branch**
    ```bash
    git push origin feature/AmazingFeature
    ```
5. **Open a Pull Request**

Please ensure your code follows Laravel best practices and includes appropriate tests.

## 🐛 Issues & Support

If you encounter any problems or have questions about GameStore, please:

-   Check existing [issues](https://github.com/danielwidhiarto/GameStore/issues)
-   Open a new issue with detailed information
-   Include steps to reproduce any bugs

## 📝 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 👨‍💻 Author

**Daniel Widhiarto**

-   GitHub: [@danielwidhiarto](https://github.com/danielwidhiarto)

## 🙏 Acknowledgments

-   Built with [Laravel](https://laravel.com)
-   Deployed on [Vercel](https://vercel.com)
-   Icons and badges from [Shields.io](https://shields.io)

---

<div align="center">
Made with ❤️ by Daniel Widhiarto
</div>

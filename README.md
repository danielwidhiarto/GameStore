# GameStore

GameStore is a Laravel-based online game purchase website that allows users to browse a variety of games, add them to their shopping cart and proceed to checkout. The system supports two user roles: admin and customer, providing an interactive platform for game enthusiasts.

## Features include

- Game Catalogue: Browse a comprehensive catalogue of games with detailed information.

- Shopping Cart: Add games to your shopping cart for easy and convenient purchasing.

- User Roles: Two user roles - Admin and Customer - each with specific functionalities and permissions.

- Checkout Process: Seamless checkout process for customers to complete their game purchases.

## Installation

To set up GameStore in your local environment, follow these steps

1. **Clone the repository: Clone this repository to your local machine using `git clone https://github.com/danielwidhiarto/GameStore.git`.

2. **Install dependencies: Navigate to the project directory and install the Laravel dependencies by running `composer install`.

3. **Environment Configuration**: Copy the `.env.example` file to `.env` and configure your database and other settings.

4. **Generate Application Key: Run `php artisan key:generate` to generate the application key.

5. **Database Migration: Run `php artisan migrate` to create the necessary database tables.

6. **Database seeding (optional)**: If required, you can seed the database with sample data using `php artisan db:seed`.

7. **Deploy the application**: Start the Laravel development server with `php artisan serve`.

8. **Access the application**: Open your web browser and visit `http://localhost:8000` to access the GameStore.

## Usage

- **Admin Role**: Log in with Admin credentials to manage games, users, and orders.

- **Customer Role**: Register or login as a customer to browse games, add them to your shopping basket, and complete purchases.

## Contribute

If you would like to contribute to the development of GameStore, please fork the repository and submit a pull request. We welcome your contributions and feedback.
## Support and issues

For any questions or issues related to the GameStore, please feel free to open an issue on the [GitHub repository] (https://github.com/danielwidhiarto/GameStore/issues). We appreciate your feedback and will do our best to help you.

## Licence

GameStore is open-source software licensed under the [MIT License](LICENSE).

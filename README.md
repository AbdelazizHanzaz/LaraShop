# E-commerce App

This is a simple e-commerce application built with Laravel, Vue.js, Tailwind CSS, and Stripe.

## Features

- Browse and search products
- Add products to the shopping cart
- Process payments with Stripe integration
- User registration and authentication
- Order management
- Product reviews and ratings

## Installation

1. Clone the repository:

git clone https://github.com/your-username/ecommerce-app.git

2. Install the dependencies:

composer install
npm install


3. Set up the environment variables:
   - Copy the `.env.example` file to `.env`:
     ```
     cp .env.example .env
     ```
   - Open the `.env` file and configure the database connection and Stripe API keys.

4. Generate an application key:

    ```
    php artisan key:generate
    ```

5. Run the database migrations:
    
    ```
    php artisan migrate
    ```

6. Compile the assets:

    ```
    npm run dev
    ```

7. Start the development server:

    ```
    php artisan serve
    ```

You can now access the application by visiting `http://localhost:8000` in your browser.

## Usage

- Browse the products on the home page.
- Register a user account or log in if you already have one.
- Add products to the shopping cart and proceed to checkout.
- Enter the necessary payment details and complete the purchase.
- View your order history in the user dashboard.
- Leave reviews and ratings for products.

## Contributing

Contributions are welcome! If you find any issues or have suggestions for improvements, please open an issue or submit a pull request.

## License

This project is licensed under the [MIT License](LICENSE).

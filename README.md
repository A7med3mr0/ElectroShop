ElectroShop - E-Commerce RESTful API (Laravel Backend)

A complete e-commerce RESTful API service built with Laravel. This application handles user authentication, category and product management, shopping cart operations with dynamic stock validations, and an atomic checkout system that places orders and updates database state reliably using database transactions.

---

System Architecture and Key Features

1. Authentication System
Developed using Laravel Sanctum to provide secure, token-based authentication for state-agnostic API clients.
- User Registration
- User Login with API Token generation
- User Logout with active token revocation

2. Catalog Management
Structured product and category database layout with seeded real product images.
- Fetch all categories
- Fetch paginated/listed products with category relations
- Retrieve specific product details
- Built-in inventory stock monitoring

3. Dynamic Shopping Cart Operations
Full-featured cart management designed to prevent race conditions and over-purchasing.
- Automatic creation or retrieval of user-specific carts
- Pre-addition check to verify available inventory stock before adding items
- Dynamic recalculation of total cart items and total prices
- Cart updating (quantity modifications) and deletion capabilities (single item or full clear)

4. Transactional Checkout System
Robust order processing built to maintain data consistency across database tables.
- Wrapped in database transactions (DB::transaction) for fault tolerance
- Automated inventory deduction upon successful order placement
- Automatic clearance of shopping cart items following checkout
- Order history tracking for authenticated users

5. Automated Testing & Quality Assurance
Comprehensive Feature Test Suite built using PHPUnit to ensure API stability and data integrity.
- Isolated database testing using `RefreshDatabase`
- Test Coverage for Authentication, Cart lifecycle, Stock validation, and Checkout transactions
- Dynamic data mocking via Laravel Database Factories

6. Frontend Decoupling (CORS Configured)
Fully configured for Cross-Origin Resource Sharing (CORS), enabling seamless communication with decoupled SPA frontends such as React, Vue, or Next.js.

---

Database Schema Structure

Categories Table
- id
- name
- timestamps

Products Table
- id
- category_id (Foreign Key referencing Categories)
- name
- description
- price
- stock
- image
- timestamps

Carts Table
- id
- user_id (Foreign Key referencing Users)
- timestamps

Cart Items Table
- id
- cart_id (Foreign Key referencing Carts)
- product_id (Foreign Key referencing Products)
- quantity
- timestamps

Orders Table
- id
- user_id (Foreign Key referencing Users)
- total_price
- status
- timestamps

Order Items Table
- id
- order_id (Foreign Key referencing Orders)
- product_id (Foreign Key referencing Products)
- quantity
- price
- timestamps

---

API Endpoints Documentation

Authentication
- POST /api/register
  Description: Register a new user account.
  Auth Required: No

- POST /api/login
  Description: Authenticate credentials and generate a Sanctum API token.
  Auth Required: No

- POST /api/logout
  Description: Revoke active session token.
  Auth Required: Yes (Bearer Token)

Products and Categories
- GET /api/categories
  Description: Fetch list of available categories.
  Auth Required: No

- GET /api/products
  Description: Fetch list of products with optional relations.
  Auth Required: No

- GET /api/products/{id}
  Description: Fetch specific product details.
  Auth Required: No

Shopping Cart
- GET /api/cart
  Description: Retrieve the current user's shopping cart and calculated totals.
  Auth Required: Yes (Bearer Token)

- POST /api/cart/add
  Description: Add a product to the cart with stock availability checks.
  Auth Required: Yes (Bearer Token)

- PUT /api/cart/update/{productId}
  Description: Modify product quantity inside the cart.
  Auth Required: Yes (Bearer Token)

- DELETE /api/cart/remove/{productId}
  Description: Remove a specific item from the cart.
  Auth Required: Yes (Bearer Token)

- DELETE /api/cart/clear
  Description: Empty all items from the current cart.
  Auth Required: Yes (Bearer Token)

Checkout and Orders
- POST /api/cart/checkout
  Description: Process cart checkout, decrease product stock, clear cart, and generate an order inside a database transaction.
  Auth Required: Yes (Bearer Token)

- GET /api/orders
  Description: Fetch order history for the authenticated user.
  Auth Required: Yes (Bearer Token)

- GET /api/orders/{id}
  Description: Fetch details of a specific order.
  Auth Required: Yes (Bearer Token)

---

Local Setup and Installation

1. Clone the repository to your local machine:
   git clone https://github.com/A7med3mr0/ElectroShop.git
   cd ElectroShop

2. Install PHP dependencies using Composer:
   composer install

3. Create environment configuration file:
   cp .env.example .env

4. Configure database settings inside .env file:
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=ElectroShop
   DB_USERNAME=root
   DB_PASSWORD=

5. Generate application security key:
   php artisan key:generate

6. Run migrations and database seeders:
   php artisan migrate --seed

7. Start the Laravel development server:
   php artisan serve

---

Running Automated Tests

To run the full PHPUnit test suite (Feature & Unit tests):

```bash
# Run all automated tests
php artisan test

# Filter and run a specific test suite (e.g., Cart Lifecycle)
php artisan test --filter CartTest

# Run tests with code coverage report (Requires PCOV or Xdebug extension)
php artisan test --coverage

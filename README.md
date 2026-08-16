# 🛒 Online Store REST API

A RESTful API for an **Online Store** built with **Laravel**.

This project provides API endpoints for user authentication and managing store data such as categories and products.

---

## 🚀 Features

* User Registration
* User Login & Authentication
* Token-based Authentication
* User Logout
* Create Categories
* Create Products
* Product–Category Relationship
* JSON API Responses
* RESTful API Structure

---

## 🛠️ Technologies

* **Laravel**
* **PHP**
* **MySQL**
* **REST API**
* **JSON**
* **Postman / API Client**

---

## 🔐 Authentication

The API uses **Bearer Token Authentication**.

After a successful login, the API returns an authentication token that can be used to access protected endpoints.

### Register

**POST**

```text
/api/register
```

Example parameters:

```text
name
email
password
password_confirmation
```

### Login

**POST**

```text
/api/login
```

Example:

```text
email: eslam123@gmail.com
password: ********
```

The login response returns the authenticated user and an access token.

### Logout

**POST**

```text
/api/logout
```

The token is sent using the **Authorization → Bearer Token** header.

---

## 📦 Categories

Categories can be created through the API.

### Create Category

**POST**

```text
/api/category
```

Example:

```text
Name: Hoodies
```

Example response:

```json
{
    "Name": "Hoodies",
    "id": 1
}
```

---

## 🛍️ Products

Products are associated with categories using `category_id`.

### Create Product

**POST**

```text
/api/product
```

Example parameters:

```text
category_id: 1
name: red hody
p_price: 350
```

Example response:

```json
{
    "message": "okay",
    "product": {
        "category_id": "1",
        "name": "red hody",
        "p_price": "350",
        "id": 1
    }
}
```

---

## 📸 API Testing

The following screenshots demonstrate the API endpoints and their responses.

### 1. User Registration

A new user can be registered using the `/api/register` endpoint.

![User Registration](screenshots/register.png)

---

### 2. User Login

After login, the API returns the authenticated user information and an access token.

![User Login](screenshots/login.png)

---

### 3. Create Category

A category can be created by sending its name to the category endpoint.

![Create Category](screenshots/category.png)

---

### 4. Create Product

Products can be created by providing the category ID, product name, and price.

![Create Product](screenshots/product.png)

---

### 5. User Logout

Authenticated users can log out by sending their Bearer Token to the logout endpoint.

![User Logout](screenshots/logout.png)

---

## 📂 API Structure

```text
Online Store API
│
├── Authentication
│   ├── Register
│   ├── Login
│   └── Logout
│
├── Categories
│   └── Create Category
│
└── Products
    └── Create Product
```

---

## ⚙️ Installation

Clone the repository:

```bash
git clone https://github.com/USERNAME/online-store-api.git
```

Navigate to the project:

```bash
cd online-store-api
```

Install dependencies:

```bash
composer install
```

Create the environment file:

```bash
cp .env.example .env
```

Generate the application key:

```bash
php artisan key:generate
```

Configure your database in `.env`:

```env
DB_DATABASE=online_store
DB_USERNAME=root
DB_PASSWORD=
```

Run migrations:

```bash
php artisan migrate
```

Start the development server:

```bash
php artisan serve
```

The API will be available at:

```text
http://127.0.0.1:8000
```

---

## 🧪 API Testing

The endpoints were tested using an API client, with query parameters and Bearer Token authentication.

All API responses are returned in **JSON format**.

---

## 👨‍💻 Author

**Islam Ahmed**

Backend Developer | Laravel Developer

---

## 📄 License

This project is created for learning and portfolio purposes.

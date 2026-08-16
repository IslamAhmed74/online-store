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

---

## 📸 API Testing

The following screenshots demonstrate the API endpoints and their responses.

### 1. User Registration

A new user can be registered using the `/api/register` endpoint.

<img width="994" height="347" alt="image" src="https://github.com/user-attachments/assets/ae78ff23-58d4-49a4-a3f1-5df8379e7c30" />


---

### 2. User Login

After login, the API returns the authenticated user information and an access token.

<img width="1051" height="369" alt="image" src="https://github.com/user-attachments/assets/a5cbb0f7-6246-4ff2-bd7c-7c6fc766d87d" />


---

### 3. Create Category

A category can be created by sending its name to the category endpoint.

<img width="954" height="232" alt="image" src="https://github.com/user-attachments/assets/e1bff375-bc1e-437b-9c73-706b8f567c18" />


---

### 4. Create Product

Products can be created by providing the category ID, product name, and price.

<img width="985" height="317" alt="image" src="https://github.com/user-attachments/assets/edfcb730-32bd-4b70-9a92-96e49143cd48" />


---

### 5. User Logout

Authenticated users can log out by sending their Bearer Token to the logout endpoint.

<img width="874" height="248" alt="image" src="https://github.com/user-attachments/assets/eb5bd70d-641c-422a-8061-520df5fe5285" />


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

# 📝 Laravel Simple To-Do App

![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![PostgreSQL](https://img.shields.io/badge/PostgreSQL-316192?style=for-the-badge&logo=postgresql&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)

A clean and functional task management web application built with **Laravel 12**, **Blade**, and **Bootstrap**.  
This project was developed as a practical exercise to master the MVC (Model-View-Controller) architecture, routing, and database persistence with PostgreSQL.

---

## 🚀 Features

- **Full CRUD**: Create, view, and manage tasks seamlessly.  
- **Smart Sorting**: Active tasks stay at the top, while completed tasks are automatically moved to the bottom.  
- **Persistence**: Data is securely stored in a PostgreSQL database.  
- **Responsive Design**: Styled with Bootstrap for a great experience on both mobile and desktop.  
- **CSRF Protection**: Secure form handling built-in by Laravel.  

---

## 🛠️ Installation & Setup

Follow these steps to get the project running on your local machine:

### 1. Prerequisites
- **PHP 8.2+**
- **Composer**
- **PostgreSQL**
- **Git**

### 2. Clone the Repository
```bash
git clone https://github.com/StonishVicer/laravel-simple-todo.git
cd laravel-simple-todo
```

### 3. Install Dependencies
```bash
composer install
```

### 4. Database Setup
Create a database named `todo_db` in your PostgreSQL instance.

Duplicate the example environment file:
```bash
cp .env.example .env
```

Configure your `.env` file with your database credentials:
```env
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=todo_db
DB_USERNAME=your_user
DB_PASSWORD=your_password
```

### 5. Final Steps
Generate the application key and run the migrations:
```bash
php artisan key:generate
php artisan migrate
```

### 6. Run the Server
```bash
php artisan serve
```

Visit [http://127.0.0.1:8000](http://127.0.0.1:8000) in your browser. ✨

---

## 🏗️ Architecture Note
This project follows a **Monolithic Architecture**:

- **Backend**: Laravel handles the business logic, database interactions (Eloquent ORM), and routing.  
- **Frontend**: Blade templates with Bootstrap for server-side rendering (SSR).  
- **Database**: PostgreSQL for robust and reliable data storage.  

---

## 📄 License
This project is open-source and available under the **MIT License**.  

Developed with ❤️ by [**StonishVicer**](https://github.com/StonishVicer)

# 📋 Task List App

A simple, elegant task management application built with **Laravel 12**. This project demonstrates fundamental Laravel concepts including routing, Eloquent ORM, Blade templating, form validation, and database migrations.

> **Note**: This is a learning project built to practice Laravel fundamentals.

## ✨ Features

-   **Create Tasks** — Add new tasks with title, description, and long description
-   **View Tasks** — Browse all tasks with pagination (5 per page)
-   **Edit Tasks** — Update existing task details
-   **Delete Tasks** — Remove tasks permanently
-   **Toggle Completion** — Mark tasks as complete/incomplete with visual feedback
-   **Flash Messages** — User-friendly success notifications with dismiss functionality
-   **Form Validation** — Server-side validation with error display
-   **Responsive UI** — Clean interface styled with Tailwind CSS

## 🛠️ Tech Stack

| Technology   | Version     | Purpose                    |
| ------------ | ----------- | -------------------------- |
| PHP          | ^8.2        | Backend runtime            |
| Laravel      | ^12.0       | Web framework              |
| Tailwind CSS | 4 (Browser) | Styling                    |
| Alpine.js    | Latest      | Frontend interactivity     |
| SQLite       | Default     | Database                   |
| MariaDB      | 10.8.3      | Optional database (Docker) |
| Docker       | -           | Development environment    |

## 📁 Project Structure

```
task-app/
├── app/
│   ├── Http/
│   │   └── Requests/
│   │       └── TaskRequest.php      # Form validation rules
│   └── Models/
│       └── Task.php                 # Task Eloquent model
├── database/
│   ├── factories/
│   │   └── TaskFactory.php          # Fake data generation
│   ├── migrations/
│   │   └── *_create_tasks_table.php # Tasks table schema
│   └── seeders/
│       └── DatabaseSeeder.php       # Database seeding
├── resources/views/
│   ├── layouts/
│   │   └── app.blade.php            # Main layout template
│   ├── index.blade.php              # Task list view
│   ├── show.blade.php               # Single task view
│   ├── create.blade.php             # Create task view
│   ├── edit.blade.php               # Edit task view
│   └── form.blade.php               # Reusable form component
├── routes/
│   └── web.php                      # All application routes
└── docker-compose.yml               # Docker configuration
```

## 🗃️ Database Schema

### Tasks Table

| Column             | Type            | Description                        |
| ------------------ | --------------- | ---------------------------------- |
| `id`               | bigint          | Primary key                        |
| `title`            | string          | Task title (max 255 chars)         |
| `description`      | text            | Short description                  |
| `long_description` | text (nullable) | Detailed description               |
| `completed`        | boolean         | Completion status (default: false) |
| `created_at`       | timestamp       | Creation timestamp                 |
| `updated_at`       | timestamp       | Last update timestamp              |

## 🚀 Getting Started

### Prerequisites

-   PHP 8.2 or higher
-   Composer
-   Node.js & npm
-   Docker (optional, for MariaDB)

### Installation

1. **Clone the repository**

    ```bash
    git clone https://github.com/ThureinS/task-list-laravel.git
    cd task-list-laravel
    ```

2. **Install dependencies**

    ```bash
    composer install
    npm install
    ```

3. **Environment setup**

    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

4. **Run database migrations**

    ```bash
    php artisan migrate
    ```

5. **Seed the database (optional)**

    ```bash
    php artisan db:seed
    ```

6. **Start the development server**

    ```bash
    php artisan serve
    ```

    Visit `http://localhost:8000` in your browser.

### Using Docker (Optional)

If you want to use MariaDB instead of SQLite:

1. **Start Docker containers**

    ```bash
    docker compose up -d
    ```

2. **Update `.env` file**

    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=laravel
    DB_USERNAME=root
    DB_PASSWORD=root
    ```

3. **Access Adminer** (Database UI): `http://localhost:8080`

### Quick Setup (Composer Script)

```bash
composer run-script setup
```

This runs: install dependencies, copy `.env`, generate key, migrate, install npm, and build assets.

## 🔗 API Routes

| Method | URI                             | Action   | Description            |
| ------ | ------------------------------- | -------- | ---------------------- |
| GET    | `/`                             | redirect | Redirects to task list |
| GET    | `/tasks`                        | index    | Display all tasks      |
| GET    | `/tasks/create`                 | create   | Show create form       |
| POST   | `/tasks`                        | store    | Store new task         |
| GET    | `/tasks/{task}`                 | show     | Display single task    |
| GET    | `/tasks/{task}/edit`            | edit     | Show edit form         |
| PUT    | `/tasks/{task}`                 | update   | Update task            |
| DELETE | `/tasks/{task}`                 | destroy  | Delete task            |
| PUT    | `/tasks/{task}/toggle-complete` | toggle   | Toggle completion      |

## 📝 Key Laravel Concepts Demonstrated

-   **Route Model Binding** — Automatic model injection in route closures
-   **Form Requests** — Centralized validation with `TaskRequest`
-   **Eloquent ORM** — Model relationships and query building
-   **Blade Templates** — Layouts, components, and directives
-   **Flash Messages** — Session-based success notifications
-   **Pagination** — Built-in Laravel pagination
-   **Factories & Seeders** — Test data generation
-   **Docker Integration** — Containerized database setup

## 🧪 Running Tests

```bash
php artisan test
```

Or using Pest:

```bash
./vendor/bin/pest
```

---

<p align="center">
  Built with ❤️ while learning Laravel
</p>

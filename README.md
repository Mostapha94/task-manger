# Task Manager API

This project is a **RESTful API** built with **Laravel 12.0**, using the **Repository** and **Service** patterns.  
It allows you to **create tasks** with attributes like title, description, status, and priority.

---

## 📦 Requirements

- PHP >= 8.2
- Composer
- MySQL or any SQL database
- Node.js (optional, if you want to compile frontend assets)

---

## ⚙️ Installation

1. Clone the repository or create the project manually:

    ```bash
    git clone git@github.com:Mostapha94/task-manger.git
    cd task-manager-api
    ```

2. Install PHP dependencies:

    ```bash
    composer install
    ```

3. Copy `.env` file and configure it:

    ```bash
    cp .env.example .env
    ```

4. Set your **database credentials** inside `.env`:

    ```dotenv
    DB_DATABASE=your_database_name
    DB_USERNAME=your_username
    DB_PASSWORD=your_password
    ```

5. Generate the application key:

    ```bash
    php artisan key:generate
    ```

6. Run database migrations:

    ```bash
    php artisan migrate
    ```

7. (Optional) Start the development server:

    ```bash
    php artisan serve
    ```

    API will be available at:  
    `http://127.0.0.1:8000`

---

## 🛠️ API Endpoints

### Create a New Task

- **Method:** `POST`
- **URL:** `/api/tasks`
- **Body Parameters (JSON):**

    ```json
    {
      "title": "Finish API project",
      "description": "Complete the Task Manager API with full structure.",
      "status": "To Do",
      "priority": "High"
    }
    ```

- **Validation Rules:**
  - `title`: required, string, max 255
  - `description`: optional, string
  - `status`: required, one of `To Do`, `In Progress`, `Completed`
  - `priority`: required, one of `High`, `Medium`, `Low`

- **Response Example:**

    ```json
    {
      "message": "Task created successfully.",
      "data": {
        "id": 1,
        "title": "Finish API project",
        "description": "Complete the Task Manager API with full structure.",
        "status": "To Do",
        "priority": "High",
        "created_at": "2025-04-26T12:00:00.000000Z",
        "updated_at": "2025-04-26T12:00:00.000000Z"
      }
    }
    ```

---

## 🏛️ Project Structure

- **app/Models/Task.php** — Eloquent Model for tasks
- **app/Repositories/TaskRepository.php** — Handles DB operations
- **app/Services/TaskService.php** — Handles business logic
- **app/Http/Controllers/Api/TaskController.php** — Handles HTTP requests
- **app/Http/Requests/TaskStoreRequest.php** — Validates incoming request
- **routes/api/tasks.php** — Task routes (loaded via `routes/api.php`)

---

## 🧪 Running Tests

You can run unit tests to

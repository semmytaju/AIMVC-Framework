<img src="/mvc-architecture.png" width="800">

# AIMVC Framework

AIMVC is a lightweight PHP MVC framework that implements the Model-View-Controller (MVC) architectural pattern. The framework is designed to provide a simple and organized structure for building web applications while remaining easy to understand, customize, and extend.

---

## Features

- MVC (Model-View-Controller) Architecture
- URL Routing System
- MySQL Database Integration
- Lightweight Core Structure
- Centralized Configuration
- Reusable Base Controller
- Easy Customization for Different Project Requirements
- Clear Separation Between Business Logic and Presentation Layer

---

## Project Structure

```text
aimvc/
│
├── app/
│   ├── config/
│   │   └── config.php
│   │
│   ├── controller/
│   ├── core/
│   ├── model/
│   ├── view/
│   ├── init.php
│   └── .htaccess
│
├── public/
│   ├── css/
│   ├── img/
│   ├── js/
│   ├── index.php
│   └── .htaccess
│
└── README.md
```

---

# MVC Architecture

## Model

The Model layer handles application data and database operations.

Responsibilities:

- Retrieve data from MySQL
- Insert new records
- Update existing records
- Delete records
- Provide data to Controllers

---

## View

The View layer is responsible for presenting information to the user.

Responsibilities:

- Display HTML pages
- Render dynamic content
- Present data received from Controllers

Views do not directly communicate with the database.

---

## Controller

The Controller acts as the bridge between Models and Views.

Responsibilities:

- Receive requests from the routing system
- Execute application logic
- Request data from Models
- Send data to Views

AIMVC provides a base Controller class that can be extended by application controllers.

Example:

```php
class Controller
{
    public function display($view, $data = [])
    {
        require_once "../app/view/" . $view . ".php";
    }
}
```

The `display()` method is used to load and render view files.

---

# URL Routing

AIMVC uses a routing mechanism to process incoming URLs and determine:

- Controller
- Method
- Parameters

Example URL:

```text
http://localhost/aimvc/public/home/index
```

The router resolves the request and forwards it to the appropriate controller method.

Example:

```text
/home/index/10
```

Can be interpreted as:

```php
Home->index(10);
```

If a matching route is not found, the routing system can return an error response.

---

# Request Flow

The general request lifecycle in AIMVC is:

```text
User Request
      │
      ▼
 URL Routing
      │
      ▼
 Controller
      │
      ├────────► Model
      │             │
      │             ▼
      │        MySQL Database
      │
      ▼
     View
      │
      ▼
 Browser Response
```

---

# Database Configuration

Database configuration is stored in:

```text
app/config/config.php
```

Example:

```php
define("HOST_DB", "localhost");
define("NAME_DB", "database_name");
define("USER_DB", "root");
define("PASS_DB", "password");
```

These constants are used throughout the framework to establish MySQL database connections.

---

# Design Goals

AIMVC was created with the following goals:

- Keep the framework lightweight and easy to understand.
- Provide a clean implementation of the MVC pattern.
- Simplify URL routing and request handling.
- Support MySQL-based web applications.
- Allow developers to customize the framework structure and frontend design according to project or company requirements.

---

# Suitable For

- Learning MVC Architecture
- PHP Framework Development Studies
- Academic Projects
- Internal Business Systems
- CRUD Applications
- Custom Web Applications

---

## License

Open-source project available for educational and development purposes.

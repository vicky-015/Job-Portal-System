# Job Portal System

A web-based **Job Portal System** developed using **Laravel 11**, **PHP**, **MySQL**, **Blade**, and **Bootstrap**. The system provides separate functionality for candidates and recruiters, making it easier for recruiters to publish job opportunities and for candidates to find and apply for jobs.

## 🚀 Features

### 👤 Authentication

* User registration and login
* Logout functionality
* Authentication using Laravel Breeze
* Role-based access control

### 🧑‍💼 Candidate

Candidates can:

* Register and login
* View available jobs
* View job details
* Apply for jobs
* Upload a resume
* Track their job applications

### 🏢 Recruiter

Recruiters can:

* Login to the recruiter dashboard
* Add new job opportunities
* Edit existing jobs
* Delete jobs
* View posted jobs
* View applicants for their jobs

### 🔐 Admin

The system is designed to support administration features such as:

* User management
* Job management
* Application management

## 🛠️ Technologies Used

| Technology     | Purpose                   |
| -------------- | ------------------------- |
| Laravel 11     | Backend Framework         |
| PHP            | Server-side Programming   |
| MySQL          | Database                  |
| Blade          | Template Engine           |
| Bootstrap      | UI Design                 |
| Laravel Breeze | Authentication            |
| HTML5          | Frontend                  |
| CSS3           | Styling                   |
| JavaScript     | Client-side functionality |
| Git & GitHub   | Version Control           |

## 📂 Project Structure

```text
Job-Portal-System/
│
├── app/
│   ├── Http/
│   ├── Models/
│   └── ...
│
├── database/
│   ├── migrations/
│   └── seeders/
│
├── resources/
│   └── views/
│
├── routes/
│   └── web.php
│
├── public/
├── config/
├── storage/
├── tests/
├── .env.example
├── artisan
├── composer.json
└── README.md
```

## ⚙️ Installation

### 1. Clone the Repository

```bash
git clone https://github.com/vicky-015/Job-Portal-System.git
```

### 2. Go to the Project Directory

```bash
cd Job-Portal-System
```

### 3. Install PHP Dependencies

```bash
composer install
```

### 4. Create Environment File

Copy `.env.example` and create a `.env` file.

```bash
cp .env.example .env
```

On Windows, you can also create a copy of `.env.example` and rename it to:

```text
.env
```

### 5. Generate Application Key

```bash
php artisan key:generate
```

### 6. Configure MySQL

Create a MySQL database and update the database details in `.env`.

Example:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=jobportal
DB_USERNAME=root
DB_PASSWORD=
```

### 7. Run Migrations

```bash
php artisan migrate
```

### 8. Start the Laravel Development Server

```bash
php artisan serve
```

The application will normally be available at:

```text
http://127.0.0.1:8000
```

## 🔄 Application Flow

```text
User
 │
 ├── Register / Login
 │
 ├── Candidate
 │     ├── View Jobs
 │     ├── View Job Details
 │     ├── Apply for Job
 │     └── Upload Resume
 │
 └── Recruiter
       ├── Add Job
       ├── View Jobs
       ├── Edit Job
       ├── Delete Job
       └── View Applicants
```

## 🗄️ Database

The application uses **MySQL** for storing:

* Users
* Jobs
* Applications
* User roles
* Job-related information

## 🔒 Security

* Authentication and authorization
* Role-based access
* CSRF protection provided by Laravel
* Password hashing
* Environment variables for sensitive configuration

> **Note:** Never upload your `.env` file or database passwords to GitHub.

## 📸 Screenshots

Add screenshots of your application here to demonstrate the main features.

Recommended screenshots:

1. Login Page
2. Registration Page
3. Candidate Dashboard
4. Jobs Listing
5. Job Details
6. Application Page
7. Recruiter Dashboard
8. Add Job Page
9. Edit Job Page
10. Applicants Page

Example:

```markdown
## 📸 Screenshots

### Candidate Dashboard
![Candidate Dashboard](screenshots/candidate-dashboard.png)

### Recruiter Dashboard
![Recruiter Dashboard](screenshots/recruiter-dashboard.png)
```

## 🎯 Project Objective

The main objective of this project is to develop a centralized platform where **job seekers can find and apply for job opportunities**, while **recruiters can efficiently manage job postings and applicants**.

## 📚 Learning Outcomes

Through this project, I gained practical experience in:

* Laravel MVC architecture
* PHP development
* MySQL database management
* CRUD operations
* Authentication and authorization
* Laravel routing
* Controllers and Models
* Blade templates
* Database migrations
* Form handling and validation
* File upload
* Git and GitHub

## 👨‍💻 Developer

**Vignesh V**

B.E. Computer Science and Engineering

## 📄 License

This project is developed for **educational and portfolio purposes**.

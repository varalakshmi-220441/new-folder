# MongoDB Integration Project (Signup & Login System)

## 📌 Project Description
This project integrates PHP with MongoDB to implement a complete Signup and Login system using MongoDB Community Server.

It demonstrates:
- Database connection using MongoDB PHP library
- User Signup
- User Login
- Session-based authentication
- Password encryption using bcrypt
- Basic CRUD operations

---

## 🛠 Technologies Used
- PHP 8.x
- MongoDB Community Server
- MongoDB Compass
- XAMPP (Apache Server)
- Composer

---

## 📁 Project Structure

mongodb_project/
│
├── config/
│   └── db.php
├── index.html
├── signup.php
├── login.php
├── dashboard.php
├── logout.php
├── composer.json
├── composer.lock
└── README.md

---

## ⚙️ Setup Instructions

1. Install MongoDB Community Server
2. Install XAMPP and start Apache
3. Install MongoDB PHP Extension
4. Install Composer
5. Navigate to project folder:

   cd C:\xampp\htdocs\mongodb_project

6. Install dependencies:

   composer install

7. Open browser:

   http://localhost/mongodb_project/index.html

---

## 🗄 Database Details

- Database Name: i_mongoDB
- Collection Name: users
- Connection String: mongodb://localhost:27017

---

## 🔐 Features

- Prevents duplicate users
- Encrypts password using password_hash()
- Validates login using password_verify()
- Session-based dashboard protection
- Logout functionality

---

## 📸 Screenshots
### Signup Page
![Signup](screenshots/signup.jpeg)

### Login Page
![Login](screenshots/login.jpeg)

### Dahboard Page
![Dashboard](screenshots/dashboard.jpeg)

### Mongo Compass-Users Collection
![MongoDB](screenshots/mongodb.jpg)



---

## 👨‍💻 Author
Varalakshmi Doddi
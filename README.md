# PHP Contact Form

A contact form built with PHP and MySQL featuring full CRUD operations and admin authentication.

## Features

- Contact form with name, email, and message fields
- Server-side validation and email format validation using `filter_var()`
- XSS protection using `htmlspecialchars()`
- SQL injection prevention using prepared statements
- MySQL database integration
- Admin panel for viewing, editing, and deleting submitted contacts
- Admin login with session-based authentication
- Passwords hashed using `password_hash()` and verified with `password_verify()`
- Automatic submission timestamp

## Technologies Used

- HTML5
- CSS3
- PHP 8.2
- MySQL
- XAMPP (local development)
- Git & GitHub

## Project Structure

```text
php-contact-form/
│
├── assets/
│   ├── css/
│   │   └── style.css
│   └── js/
│       └── script.js
│
├── config/
│   └── database.example.php
│
├── database/
│   └── schema.sql
│
├── includes/
│   └── functions.php
│
├── admin.php
├── delete.php
├── edit.php
├── update.php
├── login.php
├── logout.php
├── index.php
└── .gitignore
```

## Setup

1. Clone the repo
2. Update database credentials in `config/database.php`
3. Import `database/schema.sql` into MySQL
4. Visit `http://localhost/php-contact-form/`

## Security

- Prepared statements prevent SQL injection
- `htmlspecialchars()` prevents XSS attacks
- Passwords hashed with bcrypt via `password_hash()`
- Admin panel protected by session authentication
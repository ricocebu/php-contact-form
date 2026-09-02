# PHP Contact Form

A simple contact form built with PHP and MySQL. Users can submit their name, email, and message, which are stored in a MySQL database. An admin panel allows submitted contacts to be viewed and deleted.

## Features

- Contact form with name, email, and message fields
- Server-side form validation
- Email format validation using `filter_var()`
- XSS protection using `htmlspecialchars()`
- MySQL database integration
- Prepared statements for database queries
- Admin panel for viewing submitted contacts
- Delete functionality for submitted contacts
- Automatic submission timestamp
- Environment variables for database configuration

## Technologies Used

- HTML5
- CSS3
- PHP 8.2
- MySQL
- XAMPP
- Git & GitHub
- Composer

## Project Structure

```text
php-contact-form/
│
├── assets/
│   └── css/
│       └── style.css
│
├── config/
│   └── database.php
│
├── admin.php
├── delete.php
├── index.php
├── .env
├── .gitignore
├── composer.json
└── composer.lock
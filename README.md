This README provides a comprehensive overview of this project:

# Quiz App

## Table of Contents

1. A brief description of the app](#A brief description of the app)
2. Key features
3. Prerequisites for running the app
4. Installation instructions
5. Configuration details
6. Usage instructions
7. License information
8. Acknowledgments for third-party libraries or resources used
9. Contact information

## Description
This is an interactive quiz application developed using HTML5, PHP, MySQL, and JavaScript. The app features user authentication via OpenID Connect, random question selection from a MySQL database, and a timed quiz interface.

## Features
- User authentication using OpenID Connect
- Random question selection from a database
- Timed quiz interface with a 5-second countdown for each question
- User profile page displaying quiz history
- Responsive design for various screen sizes

## Prerequisites
- PHP 7.4 or higher
- MySQL 5.7 or higher
- Web server (Apache or Nginx)
- Composer (for managing PHP dependencies)

## Installation
1. Clone the repository: git clone https://github.com/ty-tm/quiz_app.git
2. Navigate to the project directory: cd quiz-app
3. Install PHP dependencies: composer install
4. Create a MySQL database for the application.
5. Import the database schema: mysql -u your_username -p quiz-app < database/schema.sql
6. Edit `config.php` and update it with your database credentials and OpenID Connect settings.

## Configuration
Update the following in your `config.php` file:
- ## Database settings:
php
- define('DB_HOST', 'your_database_host');
- define('DB_USER', 'your_database_username');
- define('DB_PASS', 'your_database_password');
- define('DB_NAME', 'your_database_name');
- ## OpenID Connect settings:
- define('OIDC_CLIENT_ID', 'your_client_id');
- define('OIDC_CLIENT_SECRET', 'your_client_secret');
- define('OIDC_REDIRECT_URI', 'http://your-domain.com/login.php');
- define('OIDC_PROVIDER_URL', 'https://your-openid-provider.com');

## Usage
- Start your local web server.
- Navigate to http://localhost/quiz_app in your web browser.
- Log in using your OpenID Connect credentials.
- Click "Start Quiz" to begin answering questions.

## License
This project is licensed under the MIT License - see the LICENSE.md file for details.

## Acknowledgments
- OpenID Connect PHP library: jumbojett/OpenID-Connect-PHP
- Bootstrap for responsive design

## Contact
## Moses Oyakhilome - cybermoses404@gmail.com
## Project Link: https://github.com/ty-tm/quiz_app


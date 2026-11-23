# PHP Lab Applications

A collection of three simple web applications developed using PHP, HTML and CSS.

## Programs

### Program A – Session Management
- Accepts the user's name.
- Displays a welcome message.
- Shows the session start time.
- Provides a logout option.
- Displays the total session duration.

### Program B – Date and Time
- Displays the current date.
- Displays the current time.
- Displays the current day.
- Uses Indian Standard Time (IST).

### Program C – Age Validation
- Accepts the user's name and age.
- If age is below 18, displays an unauthorized message.
- If age is 18 or above, displays a welcome message.

## Technologies Used
- HTML
- CSS
- PHP
- Docker

## Project Structure

```text
PHP LAB/
├── index.php
├── style.css
├── header.php
├── footer.php
├── Dockerfile
├── README.md
├── A_Session/
├── B_DateTime/
└── C_AgeValidation/
```

## Run Locally

1. Install PHP.
2. Open the project folder in VS Code.
3. Open the terminal.
4. Run:

```bash
php -S localhost:8000
```

5. Open this URL in your browser:

http://localhost:8000

## Docker Deployment

This project includes a Dockerfile and can be deployed on Render using the Docker runtime.

## Author
Dharshan S S

## Project Purpose
Created as part of a PHP Web Programming Lab exercise.
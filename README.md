# PHP Validation Form with Login System Using Cookies

This project demonstrates a PHP-based validation form and a simple login system using cookies. The application includes input validation for a username, email, and password, as well as a "Remember Me" functionality to store the username in a cookie for 30 days.

## Features

1. **Validation Form**:
    - Validates the username to ensure it starts with a letter, can contain letters, numbers, underscores, and dashes, and is 5 to 15 characters long.
    - Validates the email to ensure it is in a valid email format.
    - Validates the password to ensure it contains:
      - At least one uppercase letter.
      - At least one lowercase letter.
      - At least one digit.
      - At least one special character.
      - A minimum length of 8 characters.

2. **Login System Using Cookies**:
    - A "Remember Me" checkbox that stores the username in a cookie for 30 days.
    - Displays a welcome message if the cookie is found.
    - A logout button to clear the cookie and redirect to the login page.

## File Structure

- `task.php`: The main PHP file containing the validation form and login system logic.
- `style.css`: (Optional) A CSS file for styling the form.

## How to Use

1. Clone or download this repository.
2. Place the files in your local server directory (e.g., `C:/xampp/htdocs/` for XAMPP).
3. Start your local server (e.g., Apache in XAMPP).
4. Open the `task.php` file in your browser (e.g., `http://localhost/PHP Task 1 - Validation Form/task.php`).

## Validation Rules

- **Username**:
  - Must start with a letter.
  - Can contain letters, numbers, underscores, and dashes.
  - Must be 5 to 15 characters long.

- **Email**:
  - Must be a valid email format.

- **Password**:
  - Must contain at least one uppercase letter, one lowercase letter, one digit, and one special character.
  - Must be at least 8 characters long.

## Remember Me Functionality

- If the "Remember Me" checkbox is checked, the username is stored in a cookie for 30 days.
- If a cookie is found, a welcome message is displayed.
- The logout button clears the cookie and logs the user out.

## Example Usage

1. Fill in the form with a valid username, email, and password.
2. Check the "Remember Me" checkbox to store the username in a cookie.
3. Submit the form to see validation results.
4. Reload the page to see the welcome message if the cookie is set.
5. Use the logout button to clear the cookie.

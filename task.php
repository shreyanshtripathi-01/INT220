<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Validation Task</title>
    <link href="style.css" rel=stylesheet>
</head>
<body>
    <h1 class="head">Validation Form</h1>
    <form method="post" class="form">
        <label for="name" class="e">Name: </label>
        <input type="text" name="name" id="name" required><br><br>
        <label for="email" class="e">Email: </label>
        <input type="email" name="email" id="email" required><br><br>
        <label for="password" class="e">Password: </label>
        <input type="password" name="password" id="password" required><br><br>
        <input type="submit" value="Submit" class="sub"><br><br>
        <label for="remember" class="e">Remember Me: </label>
        <input type="checkbox" name="remember" id="remember"><br><br>
    </form>
    <?php
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);

    if ($name && preg_match('/^[a-zA-Z][a-zA-Z0-9_-]{4,14}$/', $name)) {
        echo "Valid username.<br>";
    } else {
        echo "Invalid username. It must start with a letter, can contain letters, numbers, underscores, and dashes, and be 5 to 15 characters long.<br>";
    }

    if ($email && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Valid email.<br>";
    } else {
        echo "Invalid email.<br>";
    }

    if ($password && preg_match('/^(?=.*\d)(?=.*[A-Z])(?=.*[a-z])(?=.*[!@#$%^&*]).{8,}$/', $password)) {
        echo "Valid password.<br>";
    } else {
        echo "Invalid password. It must contain at least one uppercase letter, one lowercase letter, one digit, one special character, and be at least 8 characters long.<br>";
    }

    //Task 2: Remember me functionality - Login System Using Cookies in PHP : Your task is to create a login system using cookies in PHP. The login system should have the following features:
    // 1. A login form that accepts a username and password.
    // 2. A "Remember Me" checkbox that, when checked, stores the username in a cookie for 30 days.
    // 3. A logout button that clears the cookie and redirects to the login page.

    if (isset($_POST['remember'])) {
        setcookie('username', $name, time() + (86400 * 30), "/"); // 86400 = 1 day
        echo "Cookie set for username: " . htmlspecialchars($name) . "<br>";
    }
    if (isset($_COOKIE['username'])) {
        echo "Welcome back, " . htmlspecialchars($_COOKIE['username']) . "!<br>";
    } else {
        echo "No cookie found.<br>";
    }
    if (isset($_POST['logout'])) {
        setcookie('username', '', time() - 3600, "/"); // Clear the cookie
        echo "Logged out successfully.<br>";
    }
    if (isset($_POST['login'])) {
        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
        // Here you would typically check the username and password against a database
        if ($username === 'admin' && $password === 'password') {
            echo "Login successful!<br>";
        } else {
            echo "Invalid username or password.<br>";
        }
    }
    ?>
</body>
</html>
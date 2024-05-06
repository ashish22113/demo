<!DOCTYPE html>
<html>
<head>
    <title>Sign Up Page</title>
</head>
<body>
    <h2>Sign Up</h2>
    <form action="signup_process.php" method="post">
        <div>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div>
            <label for="confirm_password">Confirm Password:</label>
            <input type="password" id="confirm_password" name="confirm_password" required>
        </div>
        <div>
            <button type="submit" name="signup">Sign Up</button>
        </div>
    </form>
    <p>Already have an account? <a href="login.php">Login</a></p>
</body>
</html>




<html>
<head>
    <title>Login Page</title>
</head>
<body>
    <h2>Login</h2>
    <form action="login.php" method="post">
        <div>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div>
            <button type="submit" name="login">Login</button>
        </div>
    </form>
    <p>Don't have an account? <a href="signup.php">Sign Up</a></p>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>

    <h2>Login</h2>

    <form action="afterLogin.php" method="POST">
        <input type="email" name="login_email" placeholder="Email" required><br><br>

        <input type="password" name="login_password" placeholder="Password" required><br><br>

        <button type="submit">Login</button>
    </form>

    <a href="password-recovery.php">Password Recovery</a>

</body>
</html>

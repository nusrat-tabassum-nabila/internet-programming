<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
</head>
<body>

    <h2>Registration</h2>

    <form action="afterRegistration.php" method="POST">
        <label>
            Full Name:<br>
            <input type="text" name="name" required>
        </label><br><br>

        <label>
            Student ID:<br>
            <input type="text" name="student_id" required>
        </label><br><br>

        <label>
            Email:<br>
            <input type="email" name="email" required>
        </label><br><br>

        <label>
            Password:<br>
            <input type="password" name="password" required>
        </label><br><br>

        <button type="submit">Register</button>
    </form>

</body>
</html>

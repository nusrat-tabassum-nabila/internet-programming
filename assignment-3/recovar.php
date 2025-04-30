<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Password Recovery</title>
</head>
<body>

    <h2>Password Recovery</h2>

    <form action="after-recovery.php" method="POST">
        <label>
            Email:<br>
            <input type="email" name="email" required>
        </label><br><br>

        <label>
            Enter New Password:<br>
            <input type="password" name="password" required>
        </label><br><br>

        <button type="submit">Recover Password</button>
    </form>

</body>
</html>

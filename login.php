<?php include './layout/head.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
<a href="./index.php"><img src="bh.jpg" height="100"></a> <br>
    <div class="container">
        <h1>User Login</h1>
        <form action="#" method="POST">
            <div class="input-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="forgot-password">
                <a href="Forgot.php">Forgot Password?</a>
            </div>
            <button type="submit" class="btn">Login</button>
        </form>
        <p>Don't have an account? <a href="register.php">Register here</a></p>
    </div>
</body>
</html>


<br>

<?php include './layout/foot.php'; ?>

<!-- include will only produce a warning (E_WARNING) and the script will continue -->
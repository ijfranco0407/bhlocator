<?php include './layout/head.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="forgot.css">
</head>
<body>
    
<a href="./index.php"><img src="bh.jpg" height="100"></a> <br>
    <div class="container">
        <h1>Forgot Password</h1>
        <p>Please enter your email address below to reset your password.</p>
        <form action="#" method="POST">
            <div class="input-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <button type="submit" class="btn">Reset Password</button>
        </form>
        <p>Remembered your password? <a href="login.php">Login here</a></p>
    </div>
</body>
</html>


<br>

<?php include './layout/foot.php'; ?>

<!-- include will only produce a warning (E_WARNING) and the script will continue -->
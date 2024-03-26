<?php include './layout/head.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="homepage.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Main Page</a></li>
                <li><a href="register.php">Register</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero">
    </section>

    <section class="hero1">
    <h1>Welcome to Our Website</h1>
        <p>Your Boarding House Finder Companion</p>
    </section>

    <section>

        <div class="map" style="text-align: center;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3925.4479346359585!2d125.34135922297523!3d8.986696678023753!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2sph!4v1709889321185!5m2!1sen!2sph" width="1000" height="800" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>

    </section>

    <footer>
        <p>&copy; 2024 BH Locator. All rights reserved.</p>
    </footer>
</body>
</html>


<?php include './layout/foot.php'; ?>
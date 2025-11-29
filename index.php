<?php
session_start();
$username = "Guest";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<header>
    <img src="images/banner.jpg" alt="bannerImage">
</header>

<main class="welcome-card">
    <h2>Hello, <?php echo htmlspecialchars($username); ?>!</h2>
    <p>We’re glad you’re here! Explore the site and have fun learning.</p>
    <button onclick="window.location.href='home.html'">Get Started</button>
</main>

<footer>
    <small>&copy; <?php echo date("Y"); ?> Demo Site</small>
</footer>

</body>
</html>

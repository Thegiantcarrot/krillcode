<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="icon" type="image/x-icon" href="Krillcode.png">
        <meta name="description" content="Get started with Krillcode">
        <meta name="keywords" content="Krillcode">
        <meta name="author" content="Alex Fife">
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7705895438900352"
     crossorigin="anonymous"></script>
    <title>Home - Krillcode</title>
    <style>
        body {
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            background-color: #fafafa;
            color: #262626;
        }

        .topnav {
            display: flex;
            justify-content: center;
            background-color: #ffffff;
            border-bottom: 1px solid #dbdbdb;
            padding: 10px 0;
        }

        .topnav a {
            margin: 0 15px;
            font-size: 16px;
            color: #262626;
            font-weight: bold;
            text-decoration: none;
        }

        .topnav a.active {
            border-bottom: 2px solid #0095f6;
        }

        .container {
            width: 90%;
            max-width: 900px;
            margin: 20px auto;
            padding: 20px;
            background: #ffffff;
            border: 1px solid #dbdbdb;
            border-radius: 8px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        .welcome, .get-started {
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            text-align: center;
        }

        .welcome h1 {
            font-size: 24px;
            margin-bottom: 20px;
            font-weight: bold;
        }

        .welcome p {
            font-size: 16px;
        }

        .get-started h2 {
            font-size: 20px;
            margin-bottom: 20px;
            font-weight: bold;
        }

        .get-started p {
            font-size: 16px;
        }

        .get-started a {
            display: inline-block;
            margin: 15px;
            padding: 12px 20px;
            background-color: #0095f6;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        .get-started a:hover {
            background-color: #007bb5;
        }
    </style>
</head>
<body>

<div class="topnav">
    <a href="index.php" class="active">Home</a>
    <?php if (isset($_SESSION['username'])): ?>
        <a href="profile.php">Profile</a>
                    <a href="friends.php">Friends</a>
        <a href="feed.php">Feed</a>
        <a href="logout.php">Logout</a>
    <?php else: ?>
        <a href="login.php">Login</a>
        <a href="register.php">Register</a>
    <?php endif; ?>
</div>

<div class="container">
    <?php if (isset($_SESSION['username'])): ?>
        <div class="welcome">
            <h1>Welcome back, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
            <p>Explore your dashboard, connect with friends, and stay updated.</p>
        </div>
    <?php else: ?>
        <div class="welcome">
            <img src="Krillcode.png" alt="krillcode logo" style="width:100px; height:100px;">
            <h1>Welcome to Krillcode</h1>
            <p>Post mugshots of all your friends on here in a safe and secure way!</p>
        </div>

        <div class="get-started">
            <h2>Get Started</h2>
            <p>Ready to join the community? Create an account or log in to start connecting.</p>
            <a href="register.php">Register</a>
            <a href="login.php">Login</a>
        </div>
    <?php endif; ?>
</div>
</body>
</html>

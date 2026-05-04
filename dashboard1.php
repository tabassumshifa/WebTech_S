<?php
session_start();

if (!isset($_SESSION['user_name'])) {
    header("Location: loginpage.php");
    exit();
}

// Get last login cookie
$last_login = isset($_COOKIE['last_login']) ? $_COOKIE['last_login'] : "First time login!";
?>

<h2>Welcome, <?php echo $_SESSION['user_name']; ?>!</h2>

<p>Last Login Time: <?php echo $last_login; ?></p>

<a href="logout.php">Logout</a>
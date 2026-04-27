<?php
session_start();

if(!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="Login.css">
</head>

<body>

<div class="page-bg">

    <div class="dashboard">

    <h1>Welcome, <?php echo $_SESSION['user']; ?></h1>

    <p>You are successfully logged in.</p>

    <div class="cards">

        <div class="card">📊 Profile</div>
        <div class="card">📁 Projects</div>
        <div class="card">⚙️ Settings</div>

    </div>

    <br>

    <a href="logout.php" class="logout">Logout</a>

</div>

</div>

</body>
</html>
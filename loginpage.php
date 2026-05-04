<?php
session_start();
include "db.php";

// Cookie autofill
$email_cookie = isset($_COOKIE['user_email']) ? $_COOKIE['user_email'] : "";

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        if (password_verify($password, $user['password'])) {

            $_SESSION['user_name'] = $user['name'];
            $_SESSION['user_email'] = $user['email'];

            // Set cookies
            setcookie("user_email", $email, time() + (86400 * 7)); // 7 days
            setcookie("last_login", date("Y-m-d H:i:s"), time() + (86400 * 7));

            header("Location: dashboard.php");
        } else {
            echo "Wrong password!";
        }
    } else {
        echo "User not found!";
    }
}
?>

<form method="POST">
    Email: <input type="email" name="email" value="<?php echo $email_cookie; ?>" required><br>
    Password: <input type="password" name="password" required><br>
    <button type="submit" name="login">Login</button>
</form>
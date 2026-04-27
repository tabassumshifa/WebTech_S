<?php
session_start(); // to start a session
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Login page</title>
</head>
<body>
    
    <form action="" method="post">
        <h2>Login Page</h2>

        <input type="text" name="username" placeholder="username" required><br><br>
        <input type="password" name="password" placeholder="password" required ><br><br>
        <button type="submit" name="login" value="Login">Login</button><br><br>
    </form>

</body>
</html>

<?php
if(isset($_POST['login']))
    {
        $username=$_POST['username'];
        $password=$_POST['password'];

        if($username=="shifa" && $password==1234)
            {
                $_SESSION['user']=$username;

                header("location: dashboard.php");
                exit();
            }
        else
            {
                echo "Invalid username or password";
            }
    }

?>
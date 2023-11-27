 <?php
    // login
    include "dbconnect.php";
    session_start();

    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $sql = "SELECT * FROM `users` where username = '$username' AND password = '$password'";
        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);
        if($num > 0) {
            $_SESSION['username'] = $username;
            header("Location: http://localhost/semproject/display.php");
            exit();
        } else {
            echo "Login failed";
        }
    }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="" method= "POST">
        username: <input type="text" name="username" id="" required> <br><br>
        password: <input type="password" name="password" id="" required> <br><br>
        <input type="submit" name="login" id="" value="Login">
    </form>
</body>
</html>
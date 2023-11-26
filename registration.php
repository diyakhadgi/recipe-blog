<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <form action="" method="POST">
        Email: <input type="email" name="email" id="" placeholder= "Email" required> <br><br>
        Username: <input type="text" name="username" id="" placeholder= "Username" required> <br><br>
        Password: <input type="password" name="password" id="" placeholder="Password" required> <br><br>
        Confirm Password: <input type="password" name="cpassword" id="" placeholder="Re-type Password"> <br><br>
        <input type="submit" name="register" id="" value= "Register">

        <?php
        include 'dbconnect.php';
        if(isset($_POST['register'])) {
            $username = $_POST['username'];
            $password = md5($_POST['password']);
            $cpassword = md5($_POST['cpassword']);
            $email = $_POST['email'];

            //validating the username 

            $query = "SELECT * FROM users WHERE username = '$username'";
            $user_result = mysqli_query($conn, $query);

            //check number of rows returned by the query
            $num_rows = mysqli_num_rows($user_result);
            
            if ($num_rows > 0) {
                echo "<br>";
                echo "Username already in use.";
            } else {

                // check if password matches

                if ($password == $cpassword) {
                    $sql = "INSERT INTO `users` (`username`, `password`, `email`) VALUES ('$username', '$password', '$email')";
                    $result = mysqli_query($conn, $sql);
                    if($result) {
                        echo "<br>";
                        echo "Account created successfully";
                    } else {
                        echo "<br>";
                        echo "Something went wrong";
                    }
                } 
                else {
                    echo "<br>";
                    echo "Password doesn't match";
                }
            }
    
        }
        ?>
    </form>
</body>
</html>
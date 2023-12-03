<?php
include 'dbconnect.php';
session_start();
$user_id = $_GET['user_id'];
$sql = "SELECT * FROM users WHERE user_id = '$user_id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method = "post">
        Update username: <input type="text" name="username" id="" value= "<?php echo $row['username']?>"> <br> <br>
        Insert current password: <input type="password" name="user_password" id="" value= ""> <br> <br> 
        New password: <input type="password" name="password" id="" value= ""> <br> <br> 
        Confirm password: <input type="password" name="cpassword" id="" value= ""> <br> <br> 
        Update email: <input type="email" name="email" id="" value= "<?php echo $row['email']?>"> <br><br>
        <input type="submit" name="update" id="" value= "Update changes">
    </form>
    <?php
    if(isset($_POST['update'])) {
        $user_pass = $row['password'];
        $username = $_POST['username'];
        $user_password =md5( $_POST['user_password']);
        $password =md5($_POST['password']);
        $cpassword = md5($_POST['cpassword']);
        $email = $_POST['email'];
        
        if ($user_pass == $user_password){
            if($password == $cpassword) {
                $sql = "UPDATE users SET username = '$username', `password` = '$password', email = '$email' WHERE user_id = '$user_id'";
                $result = mysqli_query($conn, $sql);
                if($result) {
                    echo "Updated successfully";
                } else {
                    echo "Update fail";
                }
            } else {
                echo "Password doesn't match";
            }
        
        } else {
            echo "Password doesn't match with the current password";
        }
        
    }
    session_destroy();
    ?>
</body>
</html>
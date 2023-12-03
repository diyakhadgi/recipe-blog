<html>
    <style>
        a{
            text-decoration:none;
        }
    </style>
<body>
    <table border="1">
    <tr>
        <!-- <th>User Id</th> -->
        <th>Name</th>
        <th>Email</th>
        <th colspan="2">Action</th>
    </tr>

</html>
<style>
    .myre-btn {
        border: none;
        background-color:#fff;
    }
    .myre-btn:hover {
        background-color:red;
    }
</style>

<?php
include 'dbconnect.php';

session_start();
if (isset($_SESSION['username'])) {
    // echo "we did it "; 
} else {
    echo "Please login";
}
session_destroy();
$profile = $_SESSION['username'];
$sql = "SELECT * from `users` where `username` = '$profile'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if ($row) {
    echo "<h1><center>Welcome, " . ucfirst($row['username']);   
    echo "<tr>";
    // echo "<td>".$row['user_id']."</td>";
    echo "<td>".$row['username']."</td>";
    echo "<td>".$row['email']."</td>";
    echo "<td><button onClick=\"location.href='http://localhost/semproject/display.php'\" class='myre-btn'>View my recipes</button></td>";
    echo "<td><a href='update.php?user_id=".$row['user_id']."'>Update Profile</a>";
} else {
    // echo "no";
}
 


?>

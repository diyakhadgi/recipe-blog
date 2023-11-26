<?php
$server = "localhost";
$user = "root";
$password = "";
$db = "recipe";
$conn = mysqli_connect($server, $user, $password, $db);
if (!$conn) {
    echo "db connected";
}
?>
<html>
    <head>
        <link rel= "stylesheet" href= "styles/display.css">
    </head>
</html>
<div class=content>
<?php
    include 'nav.php';
?>

</div>
<?php
include 'dbconnect.php';

session_start();
if (isset($_SESSION['username']))
{
    //check if session is available or not
    $var = 1;
}
else {
    $var = 0;
}

if ($var == 1) {
    include 'nav.php';
}
else {
    include 'nav.php';
}
$username = $_SESSION['username'];
$sql1 = "SELECT user_id FROM users WHERE username = '$username'";
$result1 = mysqli_query($conn, $sql1);
$num = mysqli_num_rows($result1);
if($num > 0) {
    while($row = mysqli_fetch_assoc($result1)) {
        // $num1 = $row['user_id'];
        echo $row['user_id'];
    }
    
}

$sql = "SELECT * FROM recipes";
$result = mysqli_query($conn, $sql);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row['title']; 
        echo "<p><strong>Ingredients:</strong> " . $row['ingredients'] . "</p>";
        echo "<p><strong>Methods:</strong> " . $row['methods'] . "</p>";
        echo "<p><strong>Category:</strong> " . $row['category'] . "</p>";
        
        echo '<img src="' . $row['image'] . '" class="food" alt="Image">';
        
        echo '<a href="edit.php?update='.$row["user_id"].'" class="edit">Edit</a>
        </div>';
            
        echo "<hr>"; 

}

}

?>

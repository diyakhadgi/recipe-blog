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
    //check for session if session exists then put a value in a variable 
    //otherwise dont
    //to display the button first check if the value is stored in the variable 
    //or not. if the value is stored then display button. otherwise dont
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

$sql = "SELECT * FROM recipes";
$result = mysqli_query($conn, $sql);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row['title']; 
        echo "<p><strong>Ingredients:</strong> " . $row['ingredients'] . "</p>";
        echo "<p><strong>Methods:</strong> " . $row['methods'] . "</p>";
        echo "<p><strong>Category:</strong> " . $row['category'] . "</p>";
        
        echo '<img src="' . $row['image'] . '" class="food" alt="Image">';
            
        echo "<hr>"; 

}

}


?>


<html>
    <a href="addRecipe.php"><button>Add your recipe</button></a>
    <a href="logout.php"><button>Logout</button></a>
</html>
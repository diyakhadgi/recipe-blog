<?php
include 'dbconnect.php';
$id = $_GET['update'];
$sql = "SELECT * FROM `recipes` WHERE recipe_id = $id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$title = $row['title'];
$ingredients = $row['ingredients'];
$methods = $row['methods'];
$category = $row['category'];
$image = $row['image'];

if(isset($_POST['submit'])) {
    $title = $_POST['title'];
    $ingredients = $_POST['ingredients'];
    $methods = $_POST['methods'];
    $category = $_POST['category'];
    $image = $_POST['image'];
    $sql = "UPDATE `recipes` SET title = '$title', ingredients = '$ingredients', methods = '$methods',
    category = '$category', `image` = '$image' ";
    $result = mysqli_query($conn, $sql);
    if($result) {
        echo "updated ";
    } else 
    {
        echo "not";
    }
}
?>

<html>
    <head>

    </head>
    <body>
        <h4>Edit your page</h4>
        <form action="" method= "post">
        <input type="text" name="title" id="title" value= <?php echo $title;?>>
        <input type="text" name="ingredients" id="ingredients" value= <?php echo $ingredients;?>>
        <input type="text" name="methods" id="methods" value= <?php echo $methods;?>>
        <input type="text" name="category" id="category" value= <?php echo $category;?>>
        <input type="text" name="image" id="image" value= <?php echo $image;?>>
        <input type="submit" name="submit" id="" value= "Edit">
        </form>
        
    </body>
</html>

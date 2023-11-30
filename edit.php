<?php
include 'dbconnect.php';
session_start();
    $recipe_id = $_GET['edit'];
    $sql = "SELECT * FROM recipes WHERE recipe_id = $recipe_id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
?>

<html>
    <head>

    </head>
    <body>
    <form action="" method= "post">

        <!-- <h4>Edit your page</h4>
        <form action="" method= "post">
        <input type="text" name="title" id="title" value= <?php echo $row['title']?>>
        <input type="text" name="ingredients" id="ingredients" value= <?php echo $row['ingredients']?>>
        <input type="text" name="methods" id="methods" value= <?php echo $row['methods'];?>>
        <input type="text" name="category" id="category" value= <?php echo $category;?>>
        <input type="text" name="image" id="image" value= <?php echo $image;?>> -->
        <!-- <img src="<?php echo $row['image']?>" alt="" srcset=""> -->
        <select name="cat" id="">
            <option value="main"
            <?php
               
                if($row['category']=='main'){
                    echo 'selected';
                }
            ?>
            >main</option>
            <option value="soup"
            <?php
                
                if($row['category']=='soups'){
                    echo 'selected';
                }
            ?>
            >soup</option>

        </select>
        <input type="submit" name="submit" id="" value= "save">
        </form>
        <?php
             if (isset($_POST['submit'])) {
                $category = $_POST['cat'];
                echo $category;
        }
        ?>
        
    </body>
</html>

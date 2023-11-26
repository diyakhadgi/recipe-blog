<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method= "POST" enctype="multipart/form-data">
        Name of the food: <input type="text" name="name" id=""> <br><br>
        Ingredients: 
        <textarea name="ingredients" id="" placeholder= "Enter the ingredients needed"> </textarea>
         <br><br>
        Method: 
        <textarea name="methods" id="" cols="30" rows="10"></textarea>
        <br><br>
        Category: <select name="category" id="">
            <option value="select">Select a category</option>
            <option value="main">Main Course</option>
            <option value="desserts">Desserts</option>
            <option value="soups">Soups</option>
            <option value="snacks">Snacks</option>
            <option value="dinner">Dinner</option>
        </select>
        Recipe picture: <input type="file" name="file" id=""> <br><br>
        <input type="submit" name="upload" id="" value="Upload Recipe">
    </form>
    <?php
        include 'dbconnect.php';

        if (isset($_POST['upload'])) {
            $name = $_POST['name'];
            $ingredients = $_POST['ingredients'];
            $methods = $_POST['methods'];
            $category = $_POST['category'];
                // query to save the selected option to database
               //file upload

            $file = $_FILES['file']['name'];
            $temp = $_FILES['file']['tmp_name'];
            $folder = './images/' .$file;

                if (move_uploaded_file($temp, $folder)) {
                    echo "file moved";

                    //insert data into database
                    $sql = "INSERT INTO `recipes` (`title`, `ingredients`, `methods`, `category`, `image`) VALUES ('$name', '$ingredients', '$methods', '$category', '$folder')";


                    if (mysqli_query($conn, $sql)) {
                        echo " svaed";
                    } else {
                        echo "error in saving";
                    }
                } else {
                    echo "file not moved in images";
                }
    
}
?>

</body>
</html>
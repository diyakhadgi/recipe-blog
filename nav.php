<html>
    <head>
    <link rel="stylesheet" href="styles/nav.css">
    </head>
    <body>
    <?php
include 'dbconnect.php';

if (isset($_SESSION['username'])) :
    // if logged in user
?>
    <nav>
        <div><a href="#">Home</a></div>
        <div><a href="addRecipe.php">Add recipe</a></div>
        <div><a href="profile.php">Profile</a></div>
        <div><a href="logout.php">Logout</a></div>
    </nav>
<?php else: ?>
    <nav>
        <div><a href="#">Home</a></div>
        <div><a href="login.php">Login</a></div>
        <div><a href="addRecipe.php">Add recipe</a></div>
        
    </nav>
<?php endif; ?>

        
    </body>
</html>
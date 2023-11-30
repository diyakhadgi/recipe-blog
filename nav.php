<html>
    <head>
    <link rel="stylesheet" href="styles/nav.css">
    </head>
    <body>
    <?php
include 'dbconnect.php';

if (isset($_SESSION['username'])) :
<<<<<<< HEAD
    // if logged in here
=======
    // if logged in 
>>>>>>> 32927acd48861bbad3a3e18c26ae6e1342a1503d
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
<?php 
     $title = "Pour les boucles";
    include 'includes/header.php' ?>
    <h1>For Loops</h1>

    <?php 
        // For Loops
        for($count = 0; $count < 10; $count++){
            echo '<p>HELLO WORLD</p>';
        }
        
        for($count = 0; $count < 10; $count++){
            echo "<p>c: $count</p>";
        }
    ?>
 <?php require 'includes/footer.php' ?>
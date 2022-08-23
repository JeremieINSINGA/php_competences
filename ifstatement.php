<?php 
     $title = "IF-ELSE Statements";
    include 'includes/header.php' ?>
    <h1>IF-ELSE Statements</h1>
    <?php 
        
        //An If statement that will carry out an action based on the value of the variable.

        echo '<h2>If Statement</h2>';

        $grade = 80;
        // ===, ==, >, < , <=, >=, 
        if($grade >= 50){
            echo '<h3 style="color: green">VOUS AVEZ PASSÉ</h3>';
        }
        else{
            echo '<h3 style="color: red">VOUS AVEZ ÉCHOUÉ</h3>';
        }
        $grade = 'C';
        // If-Else IF-Else
        if($grade == 'A'){
            echo '<h2 style="color: green">VOUS ÊTES UNE SUPERSTAR!</h2>';
        }
        elseif ($grade == 'B'){
            echo '<h2 style="color: blue">VOUS AVEZ BIEN FAIT !</h2>';
        }
        else{
            echo '<h2 style="color: red">VOUS AVEZ ÉCHOUÉ....</h2>';
        }


    ?>

<?php require 'includes/footer.php' ?>
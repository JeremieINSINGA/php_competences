<?php 
     $title = "Manipulation de la date et de l'heure";
    include 'includes/header.php' ?>
    <h1>Manipulation de la date et de l'heure</h1>

    <?php
        $datenow = getdate();
        echo "La date d'aujourd'hui: <br/>";
        echo $datenow['mday'] . '<br/>';
        echo $datenow['mon']. "<br/>";
        echo $datenow['year']. "<br/>";
        
        echo "Today's Date: " . $datenow['mday'] . '/' . $datenow['mon'] . '/'. $datenow['year']. '<br/>';

        echo time() . '<br/>';


        print date("m/d/y G.i:s<br>", time()) . '<br/>';
        print "Today is ";
        print date("j of F Y, \a\\t g.i a", time());
    ?>
 <?php require 'includes/footer.php' ?>
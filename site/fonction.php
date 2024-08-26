<?php
    function connexion(){
        @$bdd = mysqli_connect("localhost", "root", "","croisiere");
        return $bdd;
    } 
?>


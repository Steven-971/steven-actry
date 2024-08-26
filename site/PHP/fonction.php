<?php
    function connexion (){
    $bdd = mysqli_connect('172.16.201.112','sio','slam','croisiere');
    return ($bdd);
    }
?>
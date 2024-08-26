<?php
    include ("fonction.php");
    $bdd = connexion();
    if($connect = true){
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $mail = $_POST['mail'];
        $login = $_POST['login'];
        $mdp = md5($_POST['motDePasse']);

    if($mail == "" and $mdp == ""){
        echo '<script>';
        echo 'alert("Veuillez remplir le formulaire pour acceder a votre compte !");';
        echo '</script>';
    }
    else {
        $sql = mysqli_query($bdd,"INSERT INTO user VALUES ('$nom','$prenom','$mail','$login','$mdp')");
        if ($sql == TRUE){
            echo '<script>';
            echo 'alert("Votre compte a été crée !");';
            echo '</script>';
        }
        else {
            echo 'ta échoué';
        }
    }

    }
    else{
        echo 'NOPE';
    }

?>
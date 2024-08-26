<?php
function connexion (){
    include ("fonction.php");
    if($bdd = mysqli_connect('localhost','root','','croisiere')){
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $mail = $_POST['mail'];
        $login = $_POST['login'];
        $mdp = md5($_POST['motDePasse']);

        $sql = "SELECT COUNT(*) AS nb FROM user WHERE login = '$login' and motDePasse ='$mdp';";

        $requete = mysqli_query($bdd, $sql);
        $donnes = mysqli_fetch_assoc($requete);

        if($donnes['nb'] == 1){
            echo "Connexion réussie";
        }
        else{
            echo "Erreur de connexion";
        }
    }
}
?>
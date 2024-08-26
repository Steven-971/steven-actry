<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <body>
           
            <div class="navbar">
            <a href="Accueil.html"><h1>Nos offres</h1></a>
             </div>
            <br><br><br><br><br><br>

        <?php
            if ($bdd = mysqli_connect("localhost", "root", "", "croisiere")) {
                $requete = 'SELECT * FROM produit';
                $resultat = mysqli_query($bdd, $requete);
                while ($donnees = mysqli_fetch_assoc($resultat)) {
                    echo '<div class="cruise-container">';
                    echo '<div class="cruise-item">';
                    echo '<img class="cruise-image" src="' . $donnees['lienImages'] . '" alt="Croisière">';
                    echo '<div class="cruise-description">';
                    echo '<h2>' . $donnees['NomProduits'] . '</h2>';
                    echo '<p>' . $donnees['DescriptionProduits'] . '</p>';
                    echo '<p><strong>Prix :</strong> ' . $donnees['PrixProduits'] . '</p>';
                    echo '<a href= '. $donnees['lienProduits'] . '';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
            } 
            else {
                echo 'erreur';
            }
        ?>
        </body>
</html>
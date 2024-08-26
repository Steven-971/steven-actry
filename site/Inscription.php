<html>
    <head>
        <title>Mot de passe oublié</title>
        <script type="text/javascript" src="js.js"></script>
        <link rel="stylesheet" href="form.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
            <body>
                <div class="formulaire">
                    <form action="insertion.php" method = "POST">
                        <h1>Créer un compte</h1>
                        <div class="dialogue">
                        <input type="text" placeholder="Nom" name ="nom" required>
                            <br><br>
                            <input type="text" placeholder="Prenom" name ="prenom" required>
                            <br><br>
                            <input type="text" placeholder="E-mail" name ="mail" required>
                            <br><br>
                            <input type="text" placeholder="Login" name ="login" required>
                            <br><br>
                            <input type="text" placeholder="Mot de passe" name ="motDePasse" required>
                            <br><br>
                            <button type="submit" class="btn" onclick="mdp();"> Créer mon compte </button>
                        </div>
                    </form>
                </div>
            </body>
    </head>
</html>
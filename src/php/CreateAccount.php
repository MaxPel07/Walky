<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Création compte</title>
        <link rel="stylesheet" href="../css/CreateAccount.css">
    </head>

    <body>

        <header>
            <h1>Créer un compte</h1>
        </header>
    
        <main>
            <form class="form-container" action="process_account.php" method="post">
                <div class="avatar">
                    <img src="../Images/profilGuy.png" alt="Avatar">
                </div>

                <label for="nom">Nom</label>
                <input type="text" id="nom" name="nom" required pattern="[a-zA-Z]+" title="Le nom ne doit contenir que des lettres.">

                <label for="prenom">Prénom</label>
                <input type="text" id="prenom" name="prenom" required pattern="[a-zA-Z]+" title="Le prénom ne doit contenir que des lettres.">

                <label for="pseudo">Pseudo</label>
                <input type="text" id="pseudo" name="pseudo" required pattern="[a-zA-Z0-9_]+" title="Le pseudo ne doit contenir que des lettres, des chiffres et des underscores.">

                <label for="email">e-mail</label>
                <input type="email" id="email" name="email" required>
                <button type="submit" id="btnConfirm">Confirmer</button>
                <button type="submit" id="btnConnect">Se connecter</button>
            </form>
        </main>

        <footer>

        </footer>

    </body>

</html>
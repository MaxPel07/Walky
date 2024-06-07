<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mon compte</title>
        <link rel="stylesheet" href="../css/CreateAccount.css">
    </head>

    <body>

        <header>
            <h1>Mon compte</h1>
        </header>

        <main>
            
        <?php
        include "process_account.php";
        ?>
        </main>

        <footer>
            <a href=""><img src="../Images/succes.svg" id="succesIco"></a>
            <a href=""><img src="../Images/trophy.png" id="trophyIco"></a>
            <a href=""><img src="../Images/profil.svg" id="profilIco"></a>
        </footer>
        
    </body>

</html>
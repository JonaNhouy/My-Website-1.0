<!DOCTYPE html>
<html lang="fr">
<head>

<title>Formulaire</title>
<meta charset="utf-8"/>
<meta name="author" content="Jonathan N"/>
<meta name="description" content="Formulaire pour donner votre avis"/>
<meta name="keywords" content="Projet, WIM, Formulaire"/>
<link rel="stylesheet" type="text/css" title="CSS1" href="style.css"/>
<!-- <script type="text/javascript" src="js/styleswitcher.js"></script> -->
<link rel="icon" href="img/Icone.png"/>

</head>
<body>
    <?php include("frontend/header.php"); ?>


    <div id="Formulaire">
        <h1>Formulaire</h1>
        <p>Actuellement non fonctionnel</p>

        <form method="post" action="saveform.php">
                <input placeholder="Nom" id="nom" type="text" name="nom"/><br/>
                <input placeholder="Prénom" id="prenom" type="text" name="prenom"/><br/>
                <input placeholder="E-mail" id="e-mail" type="email" name="e-mail"/><br/>

                <textarea placeholder="Commentaires..." rows="8" cols="60"></textarea><br/>

                <input type="submit" value="Envoyer"/>
        </form>
    </div> <!--Formulaire-->
    
    <?php include("frontend/footer.php"); ?>
</body>
</html>
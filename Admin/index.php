﻿<html>
<head>
        <!-- titre de la page -->
        <title>Société Dutoit</title>
        <!-- type d'encodage de la page -->
        <meta charset="utf-8" />
        <!-- taille et échelle de la page -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0 ">
        <!-- liens avec les fichiers css de bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">   
        <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
<div id=conteneur>
    <div id=contenu>
        <h2>Connexion</h2>
           <!-- aucune action : premier appel à partir de la page index.php -->
           <form method="post" action="connexion.php">
               <table>
                <tr>
                 <td>Identifiant :</td>
                 <td><input type="text" name='ident' /></td>
                </tr>
                <tr>
                 <td>Mot de passe :</td>
                 <td><input type="password" name='password' /></td>
                </tr>
                <tr>
                 <td><input type="submit" value="Connexion"/></td>
                </tr>
               </table>
            </form>
    </div>
        
    <p id=footer>Société Dutoit - <a href="../index.php">Retour</a></p>
</div>
    <!-- Obligatoirement avant la balise de fermeture de l'élément body  -->
    <!-- Intégration de la libraire jQuery -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <!-- Intégration de la libraire de composants du Bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>     
</body>
</html>

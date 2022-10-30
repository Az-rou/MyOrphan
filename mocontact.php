<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
      
        <link rel="stylesheet" href="MyOrphan.css" />
        <link rel="stylesheet" media="screen and (max-width: 1280px)" href="petite_resolution.css" />
 
       
        <meta name="viewport" content="width=device-width, initial-scale=1"> 

        <title> Contact </title>
       <!-- <link rel="stylesheet" href="contact2.css"> -->
    </head>
    <body>

    <div id="bloc_page">
            <header>
                <div id="titre_principal">
                    <h1><img src="\MyOrphan\images\logomyorphan.png" alt="Logo de myorphan" width="100" height="107,67" class="ico_categorie" /></h1>
                    <div id="logo"> 
                        <h1>MyOrphan</h1>    
                    </div>
                </div>
                <br>
                <small>
                    <nav>
                        <ul>
                            <li><a href="MyOrphan.php">Accueil</a></li>
                            <li><a href="moprojets.php">Projets</a></li>
                            <li><a href="modon.php">Don</a></li>
                            <li><a href="moadherent.php">Formulaire</a></li>
                            <li><a href="mobenevole.php">Bénévole</a></li>
                            <li><a href="moblog.php">Blog</a></li>
                           
                        </ul>
                    </nav>
                </small>
              <br> 
            </header>
        <br><br>
        <center> <h1>Contactez-nous </h1></center>
        <p>Pour toute demande remplissez le formulaire ci-dessous.</p>
        <form method="post">
            <label>Nom :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input type="text" name="nom" required><br><br>
            <label>Email :&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input type="email" name="email" required><br><br>
            <label>Sujet :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input type="text" name="sujet" required><br><br>
            <label>Message :</label>
            <textarea name="message" required></textarea><br><br>
            <input type="submit" value="Envoyer le message">
        </form>

        <br><br>
        <center><img src="\MyOrphan\images\moplan.jpg" alt="plan de myorphan" /></center>
        <center><p>Adresse : 8 Ter Rue d'Alsace, 59370 Mons-en-Barœul, France</p></center><br>
        <center>******************* Tous droits réservés -avril 2022 *******************</center>
        <br><br>

        <?php
        //si le formulaire existe alors on expedie le mail grace à isset
        if (isset($_POST["message"])) {
            $message = " ce message a été envoyé via la page contact du site exemple.fr
              nom : ".$_POST["nom"] . "
              email : ".$_POST["email"] . "
              message : ".$_POST["message"];
           
            $retour=mail(".ambrine8@gmail.com", $_POST["sujet"],/*$_POST["message"]*/ $message, "From:contact@exsite.fr" . "\r\n" . "Reply-to" . $_POST["email"]);
            if($retour){
                echo "<p>l'email a bien été envoyé.</p>";
            }
        
        }

        ?>
    </body>
</html>
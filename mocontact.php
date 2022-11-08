<!DOCTYPE html>
<html lang="fr">
    <head>
        <title> Contact </title>
        <?php include('composant/header.html');?>
    </head>
    <body>

    <div class="menus">
        <?php include('composant/menu.html');?>
    <div>

    <div id="bloc_page">
        <div class="nos-valeurs text-center mt-2 mb-5">
            <br><br>
            <h1>Contactez-nous</h1>
            <h4>-*-*-*-*-*-</h4>
            <p>Pour toute demande remplissez le formulaire ci-dessous.</p>
        </div>
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
        <center><img src="images/map.png" alt="plan de myorphan" /></center>
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
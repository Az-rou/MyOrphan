<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
      
        <link rel="stylesheet" href="MyOrphan.css" />
        <link rel="stylesheet" media="screen and (max-width: 1280px)" href="petite_resolution.css" />
 
       
        <meta name="viewport" content="width=device-width, initial-scale=1"> 

        <title> Page adherent </title>
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
                            <li><a href="moblog.php">Blog</a></li>
                            <li><a href="#">Connexion</a></li>
                            <li><a href="mocontact.php" title="page de contact">Contact</a></li>
                        </ul>
                    </nav>
                </small>
              <br> 
            </header>
        <br><br>
        <h1>Formulaire Adhérent ou Bénévole </h1>
        <p>Pour toute demande remplissez le formulaire ci-dessous.</p>
        <form action="mobenevole.php" method="POST">
            <label>Nom : * &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input type="text" name="nom" required><br><br>
            <label>Prénom : * &nbsp;&nbsp;</label>
            <input type="text" name="prenom" required><br><br>
            <label>Date de naissance : * </label>
            <input type="date" name="datenaiss" required><br><br>
            <label>Adresse : * &nbsp;&nbsp;</label>
            <input type="text" name="adresse" required><br><br>
            <label>Num tél : * &nbsp;</label>
            <input type="text" name="numtel" required><br><br>
            <label>Email : * &nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input type="email" name="email" required><br><br>

            <label>Avez vous des compétences particulières ?</label>
            <input type="radio" name="question" value="oui" id="oui" /> <label for="oui">oui</label>
            <input type="radio" name="question" value="non" id="non" /> <label for="non">non</label><br><br>

            <label>Si oui lesquelles ?</label><br>
            <textarea name="precision" ></textarea><br><br><br>   

            <label>Ecrivez en quelques lignes vos motivations et vos perspectives pour l'association ?</label><br>
            <textarea name="perspectives" ></textarea><br><br>  

            <label>Souhaitez vous devenir adhérent ou bénévole ?</label>
            <input type="radio" name="question2" value="adherent" id="adherent" /> <label for="adherent">adhérent</label>
            <input type="radio" name="question2" value="bénévole" id="bénévole" /> <label for="bénévole">bénévole</label><br><br>

            <input type="submit" value="Envoyer le formulaire">
        </form>
        <center>
            <p>******* Pour toutes adhésion, une participation vous sera demandé à hauteur de 30 euros à l'année *******</p><br>
            <img src="images/main.jpeg" alt="Logo de main enfant" width="80" height="80" class="ico_categorie" />
            <img src="images/main.jpeg" alt="Logo de main enfant" width="80" height="80" class="ico_categorie" />
            <img src="images/main.jpeg" alt="Logo de main enfant" width="80" height="80" class="ico_categorie" /> </center>
            <h3><center>   
        *********   Tous droits réservés ***********</center></h3>
        <br>
    </div>


    </body>
</html>
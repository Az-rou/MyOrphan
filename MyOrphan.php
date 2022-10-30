
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
       
        <link rel="stylesheet" media="screen and (max-width: 1280px)" href="petite_resolution.css" />
        <meta name="viewport" content="width=320" />
        <title>MyOrphan</title>
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
     
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 

        <link rel="stylesheet" href="MyOrphan.css" />
    </head>
    
    <body>
    <button type="button"
onclick="document.getElementById('demo').innerHTML = Date()">
Click me to display Date and Time.</button>
<p id="demo">toto</p>
        <!-- ************************** ********************************************************************************************* -->
        <!-- ************************** Créé en Php par Nadia Azrou - avril 2022 ***************************************************** -->
        <!-- ************************** ********************************************************************************************* -->
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
                            <li><a href="moblog.php">Blog</a></li>
                            <li><a href="#">Connexion</a></li>
                            <li><a href="mocontact.php" title="page de contact">Contact</a></li>
                        </ul>
                    </nav>
                </small>
              <br> 
            </header>
            
           <br><br>


                 
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
               
                  <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                  </ol>
              
                 
                  <div class="carousel-inner">
                    <div class="item active">
                      <img src="images\enfants1.jpeg" alt="enfants1" style="width:100%;">
                    </div>
              
                    <div class="item">
                      <img src="images\enfants3.jpeg" alt="enfants3" style="width:100%;">
                    </div>
                  
                    <div class="item">
                      <img src="images\enfants4.jpeg" alt="enfants4" style="width:100%;">
                    </div>
                  </div>
              
               
                  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>  
                <br>
                
            <section>
                <article>
                    <h2>&nbsp;<img src="images/main.jpeg" alt="Logo de main enfant" width="80" height="80" class="ico_categorie" />Je suis un enfant du monde &nbsp;&nbsp;<img src="images/main.jpeg" alt="Logo de main enfant" width="80" height="80" class="ico_categorie" /></h2>
                    <p>Fondée en 2019, l'Association <strong>MY ORPHAN </strong>est une association non lucrative de solidarité internationnale à vocation sociale et humanitaire agissant dans le dommaine de l'assistance humanitaire et de l'aide aux développement de l'enfant en France et dans le monde.</p>
                    <p>Nos actions sont destinées à soutenir toute personne dans le besoin, sans prosélytisme, ni distinction de genre, de religion, de culture.</p>
                    <p>Nous intervenons dans l'urgence en répondant aux besoins fondamentaux des orphelins dans le monde, en leur fournissant une sécurité alimentaire et un accès à l'éducation.</p>
                    <center>
                        <strong>**</strong>&nbsp;<img src="images/main.jpeg" alt="Logo de main enfant" width="80" height="80" class="ico_categorie" />
                        <strong>**</strong><img src="images/main.jpeg" alt="Logo de main enfant" width="80" height="80" class="ico_categorie" />
                        <strong>**</strong><img src="images/main.jpeg" alt="Logo de main enfant" width="80" height="80" class="ico_categorie" />
                        <strong>**</strong><img src="images/main.jpeg" alt="Logo de main enfant" width="80" height="80" class="ico_categorie" /><strong>**</strong>
                    </center>
                </article>
                <aside>
                    <h2><small>A propos de l'Association</small></h2>
                    <img src="images/bulle.png" alt="" id="fleche_bulle" />
                    <p id="photo_zozor"><img src="images/Nadia.jpg" alt="Photo de Nadia" /></p>
                    <p>C'est une association à but non lucratif qui s'est fixé comme objectif de venir en aide aux orphelins du monde.</p>
                    <p><center><img src="images/facebook.png" alt="Facebook" /><img src="images/twitter.png" alt="Twitter" width="40" height="40"/><img src="images/instagram.png" alt="Instagram" width="40" height="40"/><img src="images/snapchat.png" alt="Snapchat" width="80" height="45"/></center></p>
                </aside>
               
            </section>
            
            <footer>
                <div id="tweet">
                    <h1>MY Orphan</h1>
                    <p><?php 
                    date_default_timezone_set('UTC');

                    // Date en français
                    $jour = getdate();
                    //print_r(getdate());
                    $semaine = array(" Dimanche "," Lundi "," Mardi "," Mercredi "," Jeudi ",
                    " vendredi "," samedi ");
                    $mois =array(1=>" janvier "," février "," mars "," avril "," mai "," juin ",
                    " juillet "," août "," septembre "," octobre "," novembre "," décembre ");
                    // Avec getdate()
                    /*echo "Français : Avec getdate() : Aujourd'hui ", $semaine[$jour['wday']]
                    ,$jour['mday'], $mois[$jour['mon']], $jour['year'],"
                    ";*/
                    // Avec date()
                    echo " ",$semaine[date('w')] ," ",date('j'),"", $mois[date('n')], date('Y'),"";
                    ?></p>
                </div>
                <div id="mes_photos">
                    <center><h1>Nos photos</h1></center>
                    <p><img src="images/image6.jpg" alt="Photographie" width="150" height="100,65"/><img src="images/image8.jpg" alt="Photographie" width="150" height="99,02"/></p>
                </div>
                <div id="orphan">
                    <center><h1>A propos</h1></center>
                    <div id="listes_orphan">
                        <ul>
                            <li><a href="mocontact.php">Contact</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">A propos</a></li>
                        </ul>
                    </div>
                </div>
            </footer>
        </div>
    </body>
</html>
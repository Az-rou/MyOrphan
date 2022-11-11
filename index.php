
<!DOCTYPE html>
<html>
    <head>
        <title>MyOrphan</title>
        <?php include('composant/header.html')?>
    </head>
    
    <body>

    <div class="menus">
        <?php include('composant/menu.html');?>
    <div>
    <div class="carousel" style="height:350px">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="false">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active orphan-carousel-item">
          <img src="images/index_orphan_5.png" class="d-block w-100"/>
        </div>
        <div class="carousel-item orphan-carousel-item">
          <img src="images/index_orphan_3.jpg" class="d-block w-100"/>
        </div>
          <div class="carousel-item orphan-carousel-item">
              <img src="images/index_orphan_5.jpg" class="d-block w-100"/>
          </div>
          <div class="carousel-item orphan-carousel-item">
              <img src="images/index_orphan_6.jpg" class="d-block w-100"/>
          </div>
        <div class="carousel-item orphan-carousel-item">
          <img src="images/enfants4.jpeg" class="d-block w-100"/>
        </div>
        <div class="carousel-item orphan-carousel-item">
          <img src="images/enfants3.jpeg" class="d-block w-100"/>
        </div>
        <div class="carousel-item orphan-carousel-item">
          <img src="images/index_orphan_1.webp" class="d-block w-100"/>
        </div>

      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <div>

            <section class="article-section">
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

            <div class="separateur-footer-article">
                <hr>
            </div>

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

    <?php include("composant/js.html")?>
</html>
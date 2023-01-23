<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aceuil</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="slider.css">
</head>
<body>
<nav class="navbar">
        <p class="a"   ><img class="logo"  src="images/cap.png" >FOR <span>Taleb</span></p>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
           <i class="fas fa-bars"> </i>
        </label>
        <nav class="an">
            <nav class="navbar1">
            <a href="Aceuil.php" style="background-color:  rgb(212, 212, 237);">Aceuil</a>
            <a href="logement.php">logement</a>
            <a href="anonce.php">Déposer une annonce</a>
            <a href="Contacte.php">Contacte</a>
             </nav>
             <nav class="navbar2">
            <a href="register.php"><img src="images/reg.png"> S'inscrire </a>
            <a href="login.php"><img  src="images/log.png" > SE conecter </a>
        </nav>
        </nav>
    </nav>

<main>
<section class="secslid">
        <div class="slider">
            <div id="s2"  class="slide">
                <div class="content">
                    <h2>Location d'une chambre à Errachdia</h2>
                    <P>
                        1 chambre ,14m² <br>
                        Azmor à Errachidia <br>
                        Chambre à louer situé dans une maison à Azmor.
                        la maison compose de quatre chambre,
                        la salle de bain et la cuisine,la chambre ne contient pas 
                        un placard,avec l'eau et l'électricité gratuit.
                        <h3 class="prix">Prix:700dh</h3>
                    </P>
                </div>
                <div class="img">
                        <img id="mage" src="photo/im51.jpg" > <p></p>
                        <div class="inu">
                            <a href="#"><img class="i" src="photo/previous.png" onclick="réc()"></a>
                            <a href="#"><img  class="i" src="photo/next.png"  onclick="uiv()"></a>
                        </div>
                </div>
            </div>
            <div id="s3"   class="slide">
                <div class="content">
                    <h2>Location d'une maison à Errachdia</h2>
                    <P>
                        maison ,100m² <br>
                        Ain Laati2 à Errachidia <br>
                        Maison à louer situé dans une maison à Ain Laati2.
                        la maison compose de trois chambre et un salon,
                        deux salles de bain et la cuisine, 
                        le wifi,l'eau et l'electricité gratuit.
                        <h3 class="prix">Prix:1500dh</h3>
                    </P>
                </div>
                <div class="img">
                        <img id="mge" src="photo/im61.jpg" > <p></p>
                        <div class="inu">
                            <a href="#"><img  class="i" src="photo/previous.png"  onclick="rc()"></a>
                            <a href="#"><img  class="i" src="photo/next.png"   onclick="uv()"></a>
                        </div>
                </div>
            </div>
            <div id="s1"  class="slide">
                <div class="content">
                    <h2>Location d'une chambre à Errachdia</h2>
                    <P>
                        1 chambre ,12m² <br>
                        Ain Laati2 à Errachidia <br>
                        Chambre à louer situé dans une maison à Ain Laati2.
                        la maison compose de trois chambre et un grand salon,
                        la salle de bain et la cuisine,la chambre contient un 
                        grand placard,avec le wifi gratuit.
                        <h3 class="prix">Prix:600dh</h3>
                    </P>
                </div>
                <div class="img">
                        <img id="image" src="photo/im11.jpg" > <p></p>
                        <div class="inu">
                       
                        <a href="#" ><img class="i" src="photo/previous.png"  onclick="préc()"></a>
                        <a href="#" ><img  class="i" src="photo/next.png" onclick="suiv()" ></a>
                       
                    </div>
                </div>
            </div>
            </div>
    </section>

</main>



<footer class="footer">
        <div class="contfot">
           <div class="rowfot">
              <div class="colfot">
                 <h4>company</h4>
                  <ul>
                     <li><a href="#">About us</a></li>
                     <li><a href="#">our services</a></li>
                     <li><a href="#">privacy</a></li>
                  </ul>
              </div>
              <div class="colfot">
                 <h4>get help</h4>
                  <ul>
                     <li><a href="#">FAQ</a></li>
                  </ul>
              </div>
              <div class="colfot">
                 <h4>follow us</h4>
                    <div class="social-links">
                     <a href="#"><i class="fab fa-facebook-f"></i></a>
                     <a href="#"><i class="fab fa-twitter"></i></a>
                     <a href="#"><i class="fab fa-instagram"></i></a>
                     <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
              </div>
              <div class="colfot S">
                 <h4>Search</h4>
                 <div>
                 <input class="se" type="search">
                 <input class="ser" type="submit" value="search">
                 </div>
               </div>
           </div>
        </div>
 </footer>
 <div class="foer">
    <p>copyright &copy;<script>document.write(new date().getfullYear());</script>,fortaleb</p>
 </div>

   <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script src="pf.js"></script>
</body>
</html>
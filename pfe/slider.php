<?php?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="slider.css">
</head>
<body>
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

    <script src="slider.js"> </script>
</body>
</html>
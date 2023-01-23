<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="contacte.css">
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

    <form action="">
    <h1>Contacter-nous</h1>
    <div class="s"></div>
     <div class="all">
       <section>
         <div class="cont">
         <label for="Email">Votre Prénom</label>
         <input type="text">
         <i class="fa-solid fa-circle-user"></i>
         </div>
         <div class="cont">
         <label for="Email">Votre Email   </label>
         <input type="email">
         <i class="fa-solid fa-envelope"></i>         
        </div>
         <div class="cont">
         <label for="Télephone">Votre Numéro</label>
         <input type="number">
         <i class="fa-solid fa-mobile-screen"></i>
         </div>
       </section>
       <aside>
           <div class="cont">
           <label for="Subject">Sujet</label>
           <input type="text">
           </div>
           <div class="cont">
           <label for="text">Votre message</label>
           <textarea name="" id="" cols="30" rows="10"></textarea>
           </div>
        </aside>
     </div>
     <button>Envoyer le mesage</button>

    </form>


  


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
        </div>
 </footer>
 <div class="foer">
    <p>copyright &copy;<script>document.write(new date().getfullYear());</script>,fortaleb</p>
 </div>
</body>
</html>
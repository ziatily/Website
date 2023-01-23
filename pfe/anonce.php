
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="annonce.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
    


  
    <form  action="Aceuil.php" method="POST">
       <aside>
            <b> </b>
            <b> </b>
       </aside>
      <div id="div1" >
           <pre> <label class="lab" for="Nom"> Nom</label>             <input class="inputuy" type="text" name="Nom" placeholder="votre non"> </pre>
           <pre> <label class="lab" for="Prénom"> Prénom</label>         <input  class="inputuy"  type="text" name="Prénom" placeholder="votre prénon">  </pre>
           <pre> <label class="lab" for="télephone"> Télephone</label>     <input  class="inputuy"  type="number" name="Tél" placeholder="votre numéro">  </pre>
           <pre> <label class="lab" for="Email"> Email</label>          <input  class="inputuy"  type="email" name="Email" placeholder="exemple@gmail.com"> </pre>
           <pre> <label class="lab" for="password"> Mot de passe</label> <input  class="inputuy" type="password" name="Pass" placeholder="mot de passe">  </pre>
           <span class="span"></span>
      </div>
      <div id="div2">
           <pre> <label class="lab" for="Ville"> Ville </label>     <input  class="inputuy"  type="text" name="Ville" placeholder="Ville du logement"> </pre>
           <pre> <label class="lab" for="Prix"> Prix </label>      <input  class="inputuy"  type="number" name="Prix" placeholder="Prix de logement en dh"></pre>
           <pre> <label class="lab" for="Surface"> Surface </label>  <input  class="inputuy" type="number" name="Surface" placeholder="Surface du logement an m²"> </pre>
           <pre> <label class="lab" for="quartier"> Quartier </label> <input  class="inputuy"  type="text" name="quratier" placeholder="quartier du logement"> </pre>
           <pre> <label class="lab" for="duré"> Duré</label>       <input  class="inputuy"  type="text" name="Duré" placeholder="duré à la faculté en min"> </pre>
           <pre> <label class="lab" for="image"> photos du Logement</label></pre>
           <input class="inputuy"   type="file" name="image">
           <span class="span"></span>
      </div >
      
      <button  name="pré">Précedent</button>
      <button class="button1" name="suiv">Suivant</button> 

    </form>
    <footer class="footer">
        <section class="contfot">
           <section class="rowfot">
              <section class="colfot">
                 <h4>company</h4>
                  <ul>
                     <li><a href="#">About us</a></li>
                     <li><a href="#">our services</a></li>
                     <li><a href="#">privacy</a></li>
                  </ul>
              </section>
              <section class="colfot">
                 <h4>get help</h4>
                  <ul>
                     <li><a href="#">FAQ</a></li>
                  </ul>
              </section>
              <section class="colfot">
                 <h4>follow us</h4>
                    <section class="social-links">
                     <a href="#"><i class="fab fa-facebook-f"></i></a>
                     <a href="#"><i class="fab fa-twitter"></i></a>
                     <a href="#"><i class="fab fa-instagram"></i></a>
                     <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </section>
              </section>
              <section class="colfot S">
                 <h4>Search</h4>
                 <section>
                 <input class="se" type="search">
                 <input class="ser" type="submit" value="search">
                 </section>
               </section>
           </section>
        </section>
 </footer>
 <section class="foer">
    <p>copyright &copy;<script>document.write(new date().getfullYear());</script>,fortaleb</p>
 </section>
   
 <script src="anon.js">  </script>
</body>
</html>
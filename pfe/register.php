<?php
session_start();
   try{
     $conect=new PDO("mysql:host=localhost;dbname=pfe;port=3306;charset=utf8","root","");
   }catch(Exception $e){
     echo "Erreur ".$e->getMessage();
   }
  
@$name=htmlspecialchars($_POST["name"]);
@$pname=htmlspecialchars($_POST["pname"]);
@$user=htmlspecialchars($_POST["user"]);
@$gmail=htmlspecialchars($_POST["gmail"]);
@$pass=md5($_POST["pass"]);
@$cpass=md5($_POST["cpass"]);
@$inscri=$_POST["inscri"];
$erreur="";
if(isset($inscri)){
    if(empty($name) || empty($pname) || empty($user) || empty($gmail) || empty($pass) || empty($cpass)){
       $erreur="<li>tout lec champs sont obligatoirs </li>";
    }else if($pass!=$cpass){
        $erreur="<li>Entrer deux mot de pass compatible</li>";
           }else{
              $val=$conect->prepare('SELECT * FROM utilisateur WHERE Email=? ');
              $val->execute(array($gmail));
              $nbr=$val->rowcount();
              $gl=$conect->prepare('SELECT * FROM utilisateur WHERE user=?');
              $gl->execute(array($user));
              $tr=$gl->rowcount();
              if($nbr!=0 ){
                $erreur="<li>oops! cette email exicte déja</li>";
              }if($tr!=0){
                $erreur.="<li>oops! username exicte déja</li>";
              }else{
                  $val=$conect->prepare('INSERT INTO utilisateur(Nom,Prénom,user,Email,Pass) VALUES(?,?,?,?,?)');
                  $val->execute(array($name,$pname,$user,$gmail,$pass));
                  header('location:Aceuil1.php');
                   }
                }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
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
            <a href="anonce.php">Déposer une annonce</a>
            <a href="Contacte.php">Contacte-nous</a>
             </nav>
             <nav class="navbar2">
            <a href="register.php"><img src="images/reg.png"> S'inscrire </a>
            <a href="login.php"><img  src="images/log.png" > SE conecter </a>
        </nav>
        </nav>
    </nav>
   <form class="resi"  action="" method="post">
     
       <h1>Inscreption</h1>
         
        <div class="erre">
            <?php echo $erreur ?>
        </div>
       <div class="register1">
        <pre>   <input class="reg" type="text" name="name" placeholder="Nom">  <input   type="text" class="reg" name="pname" placeholder="Prénom" autocapitalize="off" > </pre>
        <pre>               <input class="reg" type="text" name="user" placeholder="Username" autocapitalize="off"> </pre>
        <pre>               <input class="reg" type="email" name="gmail" placeholder="Email" autocapitalize="off"> </pre>
        <pre>               <input class="reg" type="password" name="pass" placeholder="Mot de passe"> </pre>
        <pre>               <input class="reg" type="password" name="cpass" placeholder="Confirmer le mot de passe"> </pre>
        <input type="submit" value="M'inscrire" name="inscri" class="inscri">
          <P>Déja j'ai un compte <span><a href="login.php">Login</a></span></P>
        </div>
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
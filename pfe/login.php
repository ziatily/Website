<?php
   try{
    $conect=new PDO("mysql:host=localhost;dbname=pfe;port=3306;charset=utf8","root","");
   }catch(Exception $e){
      echo "Erreur".$e->getMessage();
   }



@$emil=$_POST["emil"];
@$passl=md5($_POST["passl"]);
@$slogin=($_POST["slogin"]);
$erreur="";
if(isset($slogin)){
    if(empty($emil) || empty($passl)){
        $erreur="<li>tous les champs sont obligatoirs</li>";
    }else{
        $val=$conect->prepare('SELECT * FROM utilisateur WHERE Email=? AND Pass=? ');
        $val->execute(array($emil,$passl));
        $nbr=$val->rowcount();
        if($nbr!=0){
            header('location:Aceuil1.php');
        }else{
            $erreur="<li>Email ou mot de pass incorecte</li>";
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
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="talebimg" src="images/cap.png" >
    <div class="taleb">
       <h1> FOR <span> Taleb</span></h1>
        <p>La plupart des étudiant sont confrontés de nombreux problémes <br> lors de la recherche des chambre ou des maison à louer parmi eux:.. </p>
        <button type="button"><a href="about.php">Lire la suite</a></button>
    </div>
    <div class="login">
        <h1 class="h1login">Se Conecter</h1>
        <div class="erl">
            <?php echo $erreur?>
        </div>
        <form action="" method="post">
        <pre> <input class="log" type="email" name="emil" placeholder="exemple@gmail.com"></pre>
        <pre> <input class="log" type="password" name="passl" placeholder="mot de passe"></pre>
        <input type="submit" name="slogin" value="Se conecter" class="slogin">
        <p>Je n'est pas un compte <span><a href="register.php">S'inscrire Ici</a></span></p>

        </form>
    </div>
</body>
</html>
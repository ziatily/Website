
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <?php
            try{
            $conet=new PDO("mysql:host=localhost;dbname=pfe;port=3306;charset=utf8","root","");
         }catch(Exception $r){
            echo "erreur: ".$r->getMessage();
         }
        @$id = $_POST['id'];
        $val=$conet->prepare('SELECT * FROM utilisateur WHERE id=?');
        $val->execute(array($id));
        while($ligne=$val->fetch()){

       
               ?>  
            <div class="continer">
                <div class="jumbotron">
                  <h1>Display data in php</h1>
                  <hr>
                  <form action="" method="post">
                    <input type="hidden" name="id" value="<?php echo $ligne['id']?>">
       
                    <div class="form-group">
                        <label for="Nom">Nom</label>
                        <input type="text" name="Nom" class="form-control" value="<?php echo $ligne['Nom']?>" placeholder="entrer votre nom"   >
                    </div>
                    <div class="form-group">
                        <label for=Prénom">Prénom</label>
                        <input type="text" name="Prénom" class="form-control" value="<?php echo $ligne['Prénom']?>" placeholder="Entrer votre Prénom"  >
                    </div>
                    <div class="form-group">
                        <label for="user">user</label>
                        <input type="text" name="user" class="form-control" value="<?php echo $ligne['user']?>" placeholder="Entrer votre username"    >
                    </div>
                    <div class="form-group">
                        <label for="Email">Email</label>
                        <input type="email" name="Email" class="form-control" value="<?php echo $ligne['Email']?>" placeholder="Entrer votre Email"   >
                    </div>
                    <div class="form-group">
                        <label for="Pass">Mot de passe</label>
                        <input type="password" name="Pass" class="form-control" value="<?php echo $ligne['Pass']?>" placeholder="Entrer votre Mot de passe" >
                    </div>
                  
                  <input name="update" type="submit" class="btn btn-primary" value="Modifier">
                  <a href="selecte.php"  class="btn btn-danger">Retour</a>
                </form>

                  <?php
        
                            @$nom=$_POST['Nom'];
                            @$prénom=$_POST['Prénom'];
                            @$user=$_POST['user'];
                            @$email=$_POST['Email'];
                            @$pass=$_POST['Pass'];
                            @$laloi=$_POST['laloi'];
                  if(isset($_POST['update'])){
                    $val=$conet->prepare('UPDATE utilisateur SET Nom=?,Prénom=?,user=?,Email=?,Pass=? WHERE id=?');
                    $val->execute(array($nom,$prénom,$user,$email,$pass,$id)); 
                    header('location:selecte.php');
                    
                  }
               
                  ?>
                  
                </div>
            </div>

            <?php }?>
     
</body>
</html>
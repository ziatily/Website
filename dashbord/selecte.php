<?php
try{
    $conet=new PDO("mysql:host=localhost;dbname=pfe;port=3306;charset=utf8","root","");
 }catch(Exception $e){
    echo "Erreur ".$e->getMessage();
 }
 $erreur="";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="select.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>  
<div class="continer">
        <div class="jumbotron">
            <h1>Display data in php</h1>
            <hr>
            <form action="" method="post">
            <div class="row" >
                <input type="hidden" name="id" value="<?php echo $ligne['id']; ?>">
                <input class="search1" name="search1" type="search">
                <input type="submit" name="search" class="search" value="chercher">
            </div>
            </form>
    <?php   
    @$supprime=$_POST['Supprimer'];
    @$id=$_POST['id'];
    $av=$conet->prepare('SELECT * FROM utilisateur');
    $av->execute();
    if(isset($_POST['search'])){
        if(empty($_POST['search1'])){
            echo "erreur";
        }else{
            $av=$conet->prepare('SELECT * FROM utilisateur WHERE Nom=?');
            $av->execute(array($_POST['search1']));
        }
    }
   
   
    ?>
     <table class="table table-border style="background-color:white;>
       <thead class="table-dark">
           <tr>
            <th>Id</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Username</th>
            <th>Email</th>
            <th>Password</th>
            <th>Modifier</th>
            <th>Supprimer</th>
           </tr>
       </thead>
    <?php
    while($ligne=$av->fetch()){
    ?>
     <tbody>
        <tr>
            <th><?php echo $ligne['id']; ?></th>
            <th><?php echo $ligne['Nom']; ?></th>
            <th><?php echo $ligne['Prénom']; ?></th>
            <th><?php echo $ligne['user']; ?></th>
            <th><?php echo $ligne['Email']; ?></th>
            <th><?php echo $ligne['Pass']; ?></th>
            <form action="update.php" method="post">
                <input type="hidden" name="id" value="<?php echo $ligne['id']?>">
            <th><input type="submit" class="btn btn-success"  name="updatee" value="Modifier"></th>
            </form>
            <form action="delete.php" method="post">
            <input type="hidden" name="id" value="<?php echo $ligne['id']?>">
            <th><input type="submit" value="Supprimer" class="btn btn-danger" name="Supprimer"></th>
            </form>
        </tr>
    </tbody>
    <?php
    }
   
    ?>
</body>
</html>
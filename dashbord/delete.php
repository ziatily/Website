<?php
try{
    $conet=new PDO("mysql:host=localhost;dbname=pfe;port=3306;charset=utf8","root","");
 }catch(Exception $e){
    echo "Erreur ".$e->getMessage();
 }
 $erreur="";
  @$id=$_POST['id'];
  $val=$conet->prepare('DELETE FROM utilisateur WHERE id=?');
  $val->execute(array($id));
  header('location:selecte.php');
?>


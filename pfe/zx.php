<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="zx.css">
    <link rel="stylesheet" href="style.css">
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
    <div id="hero">
         <div class="continer">
             <div class="info">
                 <h1>DISCOVER</h1>
                  <input type="text" placeholder="Search">
             </div>
         </div>
         <div class="slider">
             <img src="images/left-arrow.png" id="prev" >
             <div class="previw">
                 <img src="images/bg1.png"  class="active life" >
                 <img src="images/bg2.png" class="life" >
                 <img src="images/bg3.png" class="life" >
                 <img src="images/bg4.png" class="life" >
                 <img src="images/bg5.png" class="life" >

             </div>
             <img src="images/right-arrow.png" id="next" >
         </div>
    </div>
    <script src="zx.js">

    </script>
</body>
</html>
<?php
include("include/config.php");

 ?>
<!DOCTYPE HTML>
<html lang="nl">
    <head>
    <!-- Include head.php -->
    <?php include("include/head.php") ?>
    <!-- <link rel="stylesheet" href="css/styles.css"> -->
    </head>
    <body>
        <header>
        <!-- Include header.php -->
        <?php include("include/header.php") ?>
        </header>

    <div class="home">
        <h1>Welkom op onze website JoinUp.</h1>
            <br> 
          <p> Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de standaard proeftekst in deze bedrijfstak sinds de 16e eeuw, toen een onbekende drukker een zethaak met letters nam en ze door elkaar husselde om een font-catalogus te maken. Het heeft niet alleen vijf eeuwen overleefd maar is ook, vrijwel onveranderd, overgenomen in elektronische letterzetting. Het is in de jaren '60 populair geworden met de introductie van Letraset vellen met Lorem Ipsum passages en meer recentelijk door desktop publishing software zoals Aldus PageMaker die versies van Lorem Ipsum bevatten.
        </p>
    </div>


    <div class="container">
        <h2>Populaire games:</h2>
        <h3> League of Legends </h3> 
        <img src="image/lol.jpg" width="350px" height="200px" alt="League of Legends">
        
        <h3>Counterstrike: Global Offensive</h3> 
        <img src="image/csgo.jpg" width="350px" height="200px" alt="Counterstrike: Global Offensive"> 
        
        <h3>Rainbow Six Siege</h3>
        <img src="image/siege.jpg" width="350px" height="200px" alt="Rainbow Six Siege"> 
        
            
        
    </div>

    <br> <br> <br>
    <div class="forum">
        <p>Forum onderwerpen</p>
        <br>
           <?php
           mysqli_select_db($conn, 'join_up');
           $sql = "SELECT * FROM forum";
           $forums = mysqli_query($conn, $sql);

           foreach ($forums as $forum) {
               echo "<pre>";
               echo "<a href='comment.php?id=".$forum['id']."' >".$forum['name']."</a>";
               echo "<br>";
               echo $forum['description'];
               echo "<br>";
               echo "<br>";
               // var_dump($forum);
               echo "</pre>";
           }
           // mysqli_query("SELECT * FROM forum");

           // print_r($result);

           ?>
    </div>
        <footer>
            <!-- Include footer.php -->
            <?php include("include/footer.php") ?>
        </footer>
    </body>
</html>

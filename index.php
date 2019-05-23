<?php
include("include/config.php");

 ?>
<!DOCTYPE HTML>
<html lang="nl">
    <head>
    <!-- Include head.php -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <?php include("include/head.php") ?>
    <!-- <link rel="stylesheet" href="css/styles.css"> -->
    </head>
    <body>
        <header>
        <!-- Include header.php -->
        <?php include("include/header.php") ?>
        </header>

        <div class="container">
    <div class="row">
        <div class="col-sm">
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
        </div>
        <div class="col-sm">
        <h1>Welkom op onze website JoinUp.</h1>
            <br> 
          <p> Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de standaard proeftekst in deze bedrijfstak sinds de 16e eeuw, toen een onbekende drukker een zethaak met letters nam en ze door elkaar husselde om een font-catalogus te maken. Het heeft niet alleen vijf eeuwen overleefd maar is ook, vrijwel onveranderd, overgenomen in elektronische letterzetting. Het is in de jaren '60 populair geworden met de introductie van Letraset vellen met Lorem Ipsum passages en meer recentelijk door desktop publishing software zoals Aldus PageMaker die versies van Lorem Ipsum bevatten.
        </p>
        </div>
        <div class="col-sm">
        <h2>Populaire games:</h2>
        <h3> League of Legends </h3> 
        <img class="game-img" src="image/lol.jpg" width="350px" height="200px" alt="League of Legends">
        
        <h3>Counterstrike: Global Offensive</h3> 
        <img class="game-img" src="image/csgo.jpg" width="350px" height="200px" alt="Counterstrike: Global Offensive"> 
        
        <h3>Rainbow Six Siege</h3>
        <img class="game-img" src="image/siege.jpg" width="350px" height="200px" alt="Rainbow Six Siege"> 
        </div>
    </div>
    </div>



    <div class="container">
        
    </div>

    <br> <br> <br>
    
        <footer>
            <!-- Include footer.php -->
            <?php include("include/footer.php") ?>
        </footer>
    </body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>

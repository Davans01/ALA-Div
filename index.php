<?php
// Include config.php
include("include/config.php");

 ?>
<!DOCTYPE HTML>
<html lang="nl">
    <head>
    <!-- Include head.php -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <?php include("include/head.php") ?>
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
           // Select the db
           mysqli_select_db($conn, 'join_up');
           $sql = "SELECT * FROM forum";
           $forums = mysqli_query($conn, $sql);
           // Foreach record in the table forum then echo the description and the name
           foreach ($forums as $forum) {
               echo "<pre>";
               echo "<a href='comment.php?id=".$forum['id']."' >".$forum['name']."</a>";
               echo "<br>";
               echo $forum['description'];
               echo "<br>";
               echo "<br>";
               echo "</pre>";
           }
           ?>
    </div>
        </div>
        <div class="col-sm">
        <h1>Welkom op de website JoinUp.</h1>
            <br>
          <p class="introtext">Bent u een gamer en zoekt u andere gamers? Dan bent u hier op de juiste plek! Op deze website kunt u aan LAN-Partys meedoen en ze zelf hosten.
        </p>
        </div>
        <!-- Create columns and creating the main content of the home page -->
        <div class="col-sm">
        <h2 class="game">Populaire games:</h2>
        <h3 class="game"> League of Legends </h3>
        <img class="game" src="image/lol.jpg" width="350px" height="200px" alt="League of Legends">

        <h3 class="game">Counterstrike: Global Offensive</h3>
        <img class="game" src="image/csgo.jpg" width="350px" height="200px" alt="Counterstrike: Global Offensive">

        <h3 class="game">Rainbow Six Siege</h3>
        <img class="game" src="image/siege.jpg" width="350px" height="200px" alt="Rainbow Six Siege">
        </div>
    </div>
    <br><br><br>

        <footer>
            <!-- Include footer.php -->
            <?php include("include/footer.php") ?>
        </footer>
    </body>
    <!-- Add bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>

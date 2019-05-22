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
        <p>Welkom op onze website JoinUp. <br> <br>
           Ben jij een gamer en wil je vrienden maken in de buurt? Dit kan met onze website. <br>
           Op deze website kunt u eigen LAN Party's organiseren, om van de gamers in de buurt, vrienden te maken.
        <p>
    </div>


    <div class="populair">
        <p>Populaire games: <br><br>
           League of Legends <br>
           <img src="image/lol.jpg" alt="League of Legends"> <br>

           Counterstrike: Global Offensive <br>
           <img src="image/csgo.jpg" alt="Counterstrike: Global Offence"> <br>

           Rainbow Six Siege <br>
           <img src="image/siege.jpg" alt="Rainbow Six Siege"> <br>
        </p>
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

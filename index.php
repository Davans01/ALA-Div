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

        <p>Welkom op onze website JoinUp. <br> <br>
           Ben jij een gamer en wil je vrienden maken in de buurt? Dit kan met onze website. <br>
           Op deze website kunt u eigen LAN Party's organiseren, om van de gamers in de buurt, vrienden te maken.
        <p>




        <p>Populaire games: <br>
           League of legends <img src="image/lol.jpg" alt="League of Legends"> <br>
           Counterstrike: Global offensive <img src="image/csgo.jpg" alt="Counterstrike: Global Offence"> <br>
           Rainbow Six Siege <img src="image/siege.jpg" alt="Rainbow Six Siege"> <br>
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
        <footer>
            <!-- Include footer.php -->
            <?php include("include/footer.php") ?>
        </footer>
    </body>
</html>

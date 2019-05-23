<?php
// Include config.php
include("include/config.php");

 ?>
<!DOCTYPE HTML>
<html lang="nl">
    <head>
    <!-- Include head.php -->
    <?php include("include/head.php") ?>
    </head>
    <body>
        <header>
        <!-- Include header.php -->
        <?php include("include/header.php") ?>
        </header>

    <div class="home">
        <!-- Main content -->
        <p>Welkom op onze website JoinUp. <br> <br>
           Ben jij een gamer en wil je vrienden maken in de buurt? Dit kan met onze website. <br>
           Op deze website kunt u eigen LAN Party's organiseren, om van de gamers in de buurt, vrienden te maken.
        <p>
    </div>


    <div class="populair">
        <!-- Images -->
        <p>Populaire games: <br><br>
           League of Legends <br>
           <img src="image/lol.jpg" alt="League of Legends"> <br>

           Counterstrike: Global Offensive <br>
           <img src="image/csgo.jpg" alt="Counterstrike: Global Offence"> <br>

           Rainbow Six Siege <br>
           <img src="image/siege.jpg" alt="Rainbow Six Siege"> <br>
        </p>
    </div>

    <div class="forum">
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
        <footer>
            <!-- Include footer.php -->
            <?php include("include/footer.php") ?>
        </footer>
    </body>
</html>

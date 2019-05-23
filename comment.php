<?php
// Include config.php
include("include/config.php");
// Get the id from the forum
if ($_GET['id']) {
    $id = $_GET['id'];
}
// If there is no id give it the id 0
else {
    $id = 0;
}

if ($_POST) {
    $name= $_POST['name'];
    $comment= $_POST['comment'];
    $submit= $_POST['submit'];
}

if(isset($submit)) {
    if($name && $comment) {
        // Select the db
        mysqli_select_db($conn, 'join_up');
        $insert = "INSERT INTO comment (name, comment, forum_id) VALUES ('$name', '$comment', $id)";
        $result = mysqli_query($conn, $insert, true);
    }

    else {
        $error = "Vul alsublieft uw naam en comment in";
    }
}

?>
<!-- Open html -->
<!DOCTYPE HTML>
<html lang="nl">
    <head>
        <!-- Include head.php -->
        <?php include("include/head.php"); ?>
    </head>
<body>
    <!-- Include header.php -->
    <?php include("include/header.php");
    echo "<div class='comment'>";
    if (!empty($error)) {
        echo $error;
    }
    ?>

    <?php
    // Select db
    mysqli_select_db($conn, 'join_up');
    // Select comments from the table comment where the forum_id is equal to the forum id
    $sql = "SELECT * FROM comment where forum_id = $id";
    $comments = mysqli_query($conn, $sql);
    // Select id from the table forum
    $sql = "SELECT * FROM forum where id = $id";
    $forums = mysqli_query($conn, $sql);

    if ($forums) {
        // Foreach record in forum echo the user title and description
        foreach ($forums as $forum) {
            echo "<h4>User: ".$forum['user']."</h4>";
            echo "<h2>Title: ".$forum['name']."</h2>";
            echo "<h3>Beschrijving: ".$forum['description']."</h3>";
            echo "<br>";
        }
    }
    if ($comments) {
        foreach ($comments as $comment) {
            // for each record in comment echo the username and the comment
            echo "USERNAME: ".$comment['name'];
            echo "<br>";
            echo "<textarea cols='66' rows='10'>".$comment['comment']."</textarea>";
            echo "<br>";
            echo "<br>";
        }
    }
    ?>
    <!-- Form -->
    <form method="POST">
        <table>
            <tr><td>Name: <input type="text" name="name"></td></tr>
            <tr><td colspan="2">Comment: </td></tr>
            <tr><td colspan="2"><textarea name="comment"></textarea></td></tr>
            <tr><td colspan="2"><input type="submit" name="submit" value="Plaats uw comment hier">
        </table>
    </form>
    </div>

</html>

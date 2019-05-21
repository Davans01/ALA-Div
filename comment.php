<?php
include("include/config.php");
if ($_GET['id']) {
    $id = $_GET['id'];
}
else {
    $id = 0;
}

if ($_POST) {
    $name= $_POST['name'];
    $comment= $_POST['comment'];
    $submit= $_POST['submit'];
}

// COMMENT
if(isset($submit)) {
    if($name && $comment) {
        mysqli_select_db($conn, 'join_up');
        $insert = "INSERT INTO comment (name, comment, forum_id) VALUES ('$name', '$comment', $id)";
        $result = mysqli_query($conn, $insert, true);
        // print_r($result);
    }
// END COMMENT

// FORUM
// if(isset($submit)) {
//     if($name && $comment) {
//         mysqli_select_db($conn, 'join_up');
//         $insert = "INSERT INTO forum (name, description) VALUES ('$name', '$comment')";
//         $result = mysqli_query($conn, $insert, true);
//         // print_r($result);
//     }
// END FORUM

    else {
        $error = "Vul alsublieft uw naam en comment in";
    }
}
?>
<!DOCTYPE HTML>
<html lang="nl">
    <head>
        <?php include("include/head.php"); ?>
    </head>
<body>
    <?php include("include/header.php");
    if (!empty($error)) {
        echo $error;
    }
    ?>

    <?php
    mysqli_select_db($conn, 'join_up');
    $sql = "SELECT * FROM comment where forum_id = $id";
    $comments = mysqli_query($conn, $sql);

    $sql = "SELECT * FROM forum where id = $id";
    $forums = mysqli_query($conn, $sql);

    // var_dump($comments);
    if ($forums) {
        foreach ($forums as $forum) {
            echo "<h2>".$forum['name']."</h2>";
            echo "<h3>".$forum['description']."</h3>";
            echo "<br>";
        }
    }
    if ($comments) {
        foreach ($comments as $comment) {
            // echo "<pre>";
            // echo $comment['id'];
            echo "USERNAME: ".$comment['name'];
            echo "<br>";
            echo "<textarea cols='66' rows='10'>".$comment['comment']."</textarea>";
            echo "<br>";
            echo "<br>";
            // var_dump($comment);
            // echo "</pre>";
        }
    }
    ?>
    <form method="POST">
        <table>
            <tr><td>Name: <input type="text" name="name"></td></tr>
            <tr><td colspan="2">Comment: </td></tr>
            <tr><td colspan="2"><textarea name="comment"></textarea></td></tr>
            <tr><td colspan="2"><input type="submit" name="submit" value="Plaats uw comment hier">
        </table>
    </form>


</html>

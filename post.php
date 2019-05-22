<?php
include("include/config.php");

if ($_POST) {
    $user= $_POST['user'];
    $name= $_POST['name'];
    $comment= $_POST['comment'];
    $submit= $_POST['submit'];
}
if(isset($submit)) {
    if($name && $comment) {
        mysqli_select_db($conn, 'join_up');
        $insert = "INSERT INTO forum (user, name, description) VALUES ('$user', '$name', '$comment')";
        $result = mysqli_query($conn, $insert, true);
        // print_r($result);
    }
    else {
        $error = "Vul alsublieft naam, title en omschrijving in";
    }
}
?>
<!DOCTYPE HTML>
<html lang="nl">
    <head>
        <?php include("include/head.php"); ?>
    </head>
<body>
    <?php include("include/header.php"); ?>

    <div class="form">
    
    <?php
    if (!empty($error)) {
        echo $error;
    }
    ?>
    
    <form method="POST">
        <table>
            <tr><td>Username: <input type="text" name="user"></td></tr>
            <tr><td>Title: <input type="text" name="name"></td></tr>
            <tr><td colspan="2">Comment: </td></tr>
            <tr><td colspan="2"><textarea name="comment"></textarea></td></tr>
            <tr><td colspan="2"><input type="submit" name="submit" value="Plaats uw comment hier">
        </table>
    </form>

    </div>

</html>

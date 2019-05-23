<?php
// Include config.php
include("include/config.php");
// If someone posts then do this
if ($_POST) {
    $user= $_POST['user'];
    $name= $_POST['name'];
    $comment= $_POST['comment'];
    $submit= $_POST['submit'];
}
if(isset($submit)) {
    if($user && $name && $comment ) {
        // Select the database
        mysqli_select_db($conn, 'join_up');
        // Insert the data into user name and description
        $insert = "INSERT INTO forum (user, name, description) VALUES ('$user', '$name', '$comment')";
        $result = mysqli_query($conn, $insert, true);
    }
    else {
        $error = "Vul alsublieft naam, title en omschrijving in";
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
    <?php include("include/header.php"); ?>

    <div class="form">

    <h3>Een post maken</h3>
    
    <?php
    // Show the var $error if the user name or comment are empty
    if (!empty($error)) {
        echo $error;
    }
    ?>
    <!-- Form to make a post -->
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

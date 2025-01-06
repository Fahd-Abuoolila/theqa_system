<?php
    require('config.php');

    $ID = $_GET['id'];
    mysqli_query($conection, "DELETE FROM users_system WHERE id=$ID");
    header('location:../index.php');
?>
<?php
    include('config.php');

    $ID = $_GET['id'];
    $mood = $_GET['mood'];
    $invoice_ID = $_GET['invoice_id'];
    $num = $_GET['num'];

    echo $invoice_ID;
    mysqli_query($conection, "DELETE FROM invoice WHERE id=$invoice_ID");
    header("location:../ar/invoice.php?id=$ID&mood=$mood&num=$num");
?>
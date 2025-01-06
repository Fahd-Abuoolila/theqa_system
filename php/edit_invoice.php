<?php
    include('config.php');

    $ID = $_GET['id'];
    $invoice_ID = $_GET['invoice_id'];
    $num = $_GET['num'];
    $mood = $_GET['mood'];

    $select = mysqli_query($conection, "SELECT * FROM invoice WHERE id=$invoice_ID");
    $info = mysqli_fetch_array($select);
    $mood = 'update';
    header("location:../ar/invoice.php?mood=$mood&num=$num&id=$ID&invoice_ID=$invoice_ID&code=$info[code]&service=$info[service]&user=$info[user]&amount=$info[amount]&totalamount=$info[totalamount]&m_co=$info[m_co]&p_id=$info[p_id]&date=$info[date]");
?>
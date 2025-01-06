<?php
    include('config.php');

    $ID = $_GET['id'];  
    $mood = $_GET['mood'];  
    $invoice_id = $_GET['invoice_id'];  

    if(isset($_POST['save'])){
        if($mood == 'create'){
            $recode  = $_POST['recode'];
            $reservice = $_POST['reservice'];
            $reuser = $_POST['reuser'];
            $reamount = $_POST['reamount'];
            $retotalamount = $_POST['retotalamount'];
            $rem_co = $_POST['rem_co'];
            $rep_id = $_POST['rep_id'];
            $redate = $_POST['redate'];
    
            $into = "INSERT INTO invoice (code , service , user , amount , totalamount , m_co , p_id , date ) VALUES ('$recode','$reservice','$reuser','$reamount','$retotalamount','$rem_co','$rep_id','$redate')";
            mysqli_query($conection, $into);
        }else{
            $recode  = $_POST['recode'];
            $reservice = $_POST['reservice'];
            $reuser = $_POST['reuser'];
            $reamount = $_POST['reamount'];
            $retotalamount = $_POST['retotalamount'];
            $rem_co = $_POST['rem_co'];
            $rep_id = $_POST['rep_id'];
            $redate = $_POST['redate'];

            $update = "UPDATE invoice SET code='$recode', service='$reservice', user='$reuser', amount='$reamount', totalamount='$retotalamount', m_co='$rem_co', p_id='$rep_id', date='$redate' WHERE id=$invoice_id";
            mysqli_query($conection, $update);
        };
        $mood = 'create';
        header("location:../ar/invoice.php?id=$ID&mood=$mood");
    }

?> 
<?php


require('config.php');


if(isset($_POST['update'])){
    $ID = $_POST['user_id'];
    $NAME  = $_POST['user_name'];
    $EMAIL  = $_POST['user_email'];
    $OLDPASS  = $_POST['user_oldPassword'];
    $NEWPASS  = $_POST['user_newPassword'];
    $PASSMATCH  = $_POST['user_passwordMatching'];

    if($NEWPASS == $PASSMATCH){
        $update = "UPDATE users_system SET name='$NAME', email='$EMAIL', password='$NEWPASS' WHERE id=$ID ";
        mysqli_query($conection, $update);
        header("location:../ar/index.php?id=$ID");
    }
    // if($OLDPASS == $NEWPASS){
    //     echo `  <script>
    //                 alert('تم تحديث المنتج بنجاح');

    //             </script>`;
    // }else{ 
    //     echo `<script>alert('حدث مشكلة لم يتم تحديث المنتج')</script>`;
    // }
}

?>
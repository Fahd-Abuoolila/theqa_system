<!DOCTYPE html>
<html lang="ar" dir="rtl">
    <head>
        <!-- meta -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="this system is private property">
        <!-- link icon -->
        <link rel="icon" href="../img/icon.png">
        <!-- link css -->
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/login.css">
        <link rel="stylesheet" href="../css/change_password.css">
        <link rel="stylesheet" href="../css/all.min.css">
        <link rel="stylesheet" href="../css/bootstrap.css">
        <title>Login - Theqa Pay</title>
    </head>
    <body>
        <?php
            require('../php/config.php');

            $ID = $_GET['id'];  
            $select = mysqli_query($conection, "SELECT * FROM users_system WHERE id=$ID");
            $data = mysqli_fetch_array($select);
        ?>
        <div class="desc">
            <div class="window w-xl-100">
                <div class="login-box">
                    <div class="head-box">
                        <div class="img-box">
                            <img src="../img/logo.png" alt="logo">
                        </div>
                    </div>
                    <div class="body-box">
                        <form action="../php/update_users.php" method="post" enctype="multipart/form-data">
                            <div class="form-row">
                            <input type="hidden" class="form-control" name='user_id' id="user_id" value="<?php echo $data['id']?>">
                                <div class="form-group col-xl-11 col-md-10 col-9">
                                    <label for="user_name">اسم المستخدم</label>
                                    <input type="text" class="form-control" name='user_name' id="user_name" value="<?php echo $data['name']?>">
                                </div>
                                <div class="form-group col-xl-11 col-md-10 col-9">
                                    <label for="user_email">بريد المستخدم</label>
                                    <input type="text" class="form-control" name="user_email" id="user_email" value="<?php echo $data['email']?>">
                                </div>
                                <div class="form-group col-xl-11 col-md-10 col-9">
                                    <label for="user_oldPassword">كلمة المرور القديمة</label>
                                    <input type="password" class="form-control" name="user_oldPassword" id="user_oldPassword1" autocomplete="0" required value="<?php echo $data['password']?>">
                                    <i class="fa-regular fa-eye-slash" id="user_oldPassword" onclick="hide(this.id)"></i>
                                </div>
                                <div class="form-group col-xl-11 col-md-10 col-9">
                                    <label for="user_newPassword">كلمة المرور الجديدة</label>
                                    <input type="password" class="form-control" name="user_newPassword" id="user_newPassword2" autocomplete="0" required value="">
                                    <i class="fa-regular fa-eye-slash" id="user_newPassword" onclick="hide(this.id)"></i>
                                </div>
                                <div class="form-group col-xl-11 col-md-10 col-9">
                                    <label for="user_passwordMatching"> مطابقة كلمة المرور </label>
                                    <input type="password" class="form-control" name="user_passwordMatching" id="user_passwordMatching3" autocomplete="0" required value="">
                                    <i class="fa-regular fa-eye-slash" id="user_passwordMatching" onclick="hide(this.id)"></i>
                                </div>
                            </div>
                            <button name='update' type="submit" class="btn btn-primary" id="submit">الدخول</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- js files -->
        <script src="../js/popper.min.js"></script>
        <script src="../js/jquery-3.7.0.min.js"></script>
        <script src="../js/bootstrap.js"></script>
        <script src="../js/all.min.js"></script>
        <!-- <script src="../js/log.js"></script> -->
        <script>
            // hide password
            let eyeIcon = document.querySelector('.fa-eye-slash');
            let user_oldPassword = document.querySelector('#user_oldPassword1');
            let user_newPassword = document.querySelector('#user_newPassword2');
            let user_passwordMatching = document.querySelector('#user_passwordMatching3');

            function hide(id){
                let item = id;
                if(item == 'user_oldPassword'){
                    if(user_oldPassword.type == "password"){
                        user_oldPassword.type = "text";
                    }else{
                        user_oldPassword.type = "password";
                    }
                }else{
                    if(item == 'user_newPassword'){
                        if(user_newPassword.type == "password"){
                            user_newPassword.type = "text";
                        }else{
                            user_newPassword.type = "password";
                        }
                    }else{
                        if(item == 'user_passwordMatching'){
                            if(user_passwordMatching.type == "password"){
                                user_passwordMatching.type = "text";
                            }else{
                                user_passwordMatching.type = "password";
                            }
                        }
                    }
                }
            };
        </script>
    </body>
</html>
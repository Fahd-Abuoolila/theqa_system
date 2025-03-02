<!DOCTYPE html>
<html lang="ar" dir="rtl">
    <head>
        <!-- meta -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="this system is private property">
        <!-- link icon -->
        <link rel="icon" href="img/icon.png">
        <!-- link css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/login.css">
        <link rel="stylesheet" href="css/all.min.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <title>Login - Theqa Pay</title>
    </head>
    <body>
        <?php 
            require('php/config.php');
            @$NAME = $_POST['user_name'];
            @$PASSWORD = $_POST['user_password'];

            if(isset($_POST['login'])){
                $select = mysqli_query($conection,"SELECT * FROM users_system");
                while($row = mysqli_fetch_array($select)){
                    if($NAME == $row['name'] && $PASSWORD == $row['password']){
                        header("refresh:.9;url=ar/index.html?id=$row[id]");
                    }
                }
            }

        ?>
        <div class="desc">
            <div class="window w-xl-100">
                <div class="login-box">
                    <div class="head-box">
                        <div class="img-box">
                            <img src="img/logo.png" alt="logo">
                        </div>
                    </div>
                    <div class="body-box">
                        <form action="index.php" method="post">
                            <div class="form-row">
                                <div class="form-group col-xl-11 col-md-10 col-9">
                                    <label for="user_name">اسم المستخدم</label>
                                    <input type="text" class="form-control" id="user_name" name="user_name" required>
                                </div>
                                <div class="form-group col-xl-11 col-md-10 col-9">
                                    <label for="user_password">كلمة المرور</label>
                                    <input type="password" class="form-control" id="user_password" autocomplete="0" name="user_password" required>
                                    <i class="fa-regular fa-eye-slash my-2" onclick="hide()"></i>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary" id="submit" name="login">الدخول</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- js files -->
        <script src="js/popper.min.js"></script>
        <script src="js/jquery-3.7.0.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/all.min.js"></script>
        <script>
            // hide password
            let eyeIcon = document.querySelector('.fa-eye-slash');
            function hide(){
                if(user_password.type === "password"){
                    user_password.type = "text";
                }else{
                    user_password.type = "password";
                }
            };
        </script>
        <!-- <script src="js/log.js"></script> -->
    </body>
</html>

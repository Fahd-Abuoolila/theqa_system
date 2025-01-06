<!DOCTYPE html>
<html lang="ar">
    <head>
        <!-- meta -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="this system is private property">
        <!-- link icon -->
        <link rel="icon" href="../img/icon.png">
        <!-- link css -->
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/menu.css">
        <link rel="stylesheet" href="../css/all.min.css">
        <link rel="stylesheet" href="../css/bootstrap.css">
        <title>Theqa Pay</title>
    </head>
    <body>
        <?php
            require('../php/config.php');

            $ID = $_GET['id'];  
            $select = mysqli_query($conection, "SELECT * FROM users_system WHERE id=$ID");
            $data = mysqli_fetch_array($select);
            $ABILITY = $data['ability'];

            $mood = 'create';
        ?>  
        <!-- header -->
        <div class="header">
            <div>
                <a href="index.php" class="navbar-brand">
                    <h2 class="brand-text">
                        ثقة للدفع الالكتروني
                    </h2>
                </a>
                <div id="nav">
                    
                    <div class="collapse navbar-collapse mx-2">
                        <div style="justify-content: space-between;">
                            <form class="form-inline my-2 my-lg-0">
                                <div class="d-inline-flex">
                                    <div class="input-group is-invalid">
                                        <button class="btn btn-light my-2 search" type="submit" style='height: 38px;'>بحث</button>
                                        <input class="form-control my-2" style="height: 38px;" type="search" placeholder="البحث" aria-label="Search">
                                        <select class="select my-2" aria-label="search_items" name="search_items">
                                            <option value="name">الاسم</option>
                                            <option value="code">الكود</option>
                                            <option value="address">العنوان</option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                            <div class="dropdowns">
                                <div class="dropdown mx-2 my-2">
                                    <button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                                        لغة البيانات
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="index.php?id=<?php echo $data['id']?>">
                                            <img src="../img/ar.png" alt="ar">
                                            <p class="">العربية</p>
                                        </a>
                                        <div class="dropdown-divider m-0"></div>
                                        <a class="dropdown-item" href="../en/index.php?id=<?php echo $data['id']?>">
                                            <img src="../img/en.png" alt="en">
                                            <p class="">English</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="dropdown mx-2 my-2">
                                    <button class="btn dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                                        <img src="../img/ar.png" alt="arabic">
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="index.php?id=<?php echo $data['id']?>">
                                            <img src="../img/ar.png" alt="ar">
                                            <p class="">العربية</p>
                                        </a>
                                        <div class="dropdown-divider m-0"></div>
                                        <a class="dropdown-item" href="../en/index.php?id=<?php echo $data['id']?>">
                                            <img src="../img/en.png" alt="en">
                                            <p class="">English</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="dropdown mx-2 my-2">
                                    <button class="btn dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                                        <span id="User_Name_Show" name="User_Name_Show"><?php echo $data['name']?></span>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="change_password.php?id=<?php echo $data['id']?>">
                                            <i class="fa fa-unlock text-dark"></i>
                                            <p class="mx-2">تغيير كلمة المرور</p>
                                        </a>
                                        <div class="dropdown-divider m-0"></div>
                                        <a class="dropdown-item" href="../php/delete.php?id=<?php echo $data['id']?>">
                                            <i class="fa-solid fa-power-off text-dark"></i>
                                            <p class="mx-2"> تسجيل الخروج </p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="navbar-toggler d-none" type="button">
                        <span class="navbar-toggler-icon">
                            <i class="fa fa-plus"></i>
                        </span>
                    </div>
                    <div class="IconMenu">
                        <span></span>
                        <span class="Active"></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
        <!-- content -->
        <div class="content">
            <!-- menu -->
            <div class="menu">
                <ul>        
                    <li>
                        <a href="../ar/index.php?id=<?php echo $data['id']?>&mood=<?php echo $mood?>" class="active">
                            <i class="fa fa-home"></i>
                            <span>لوحة التحكم</span>
                        </a>
                    </li>
                    <li class="li">
                        <a href="#?id=<?php echo $data['id']?>&mood=<?php echo $mood?>" class="">
                            <i class="fa fa-money-bill"></i>
                            <span>المدفوعات</span>
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <ul class="mm-collapse">
                            <li>
                                <a href="../ar/invoice.php?id=<?php echo $data['id']?>&mood=<?php echo $mood?>">
                                    <i class="fas fa-file-invoice"></i>
                                    <span> الفواتير </span>
                                </a>
                            </li>
                            <li>
                                <a href="#?id=<?php echo $data['id']?>&mood=<?php echo $mood?>">
                                    <i class="fa-solid fa-layer-group"></i>
                                    <span> مطابقة النظام </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="li">
                        <a href="#?id=<?php echo $data['id']?>&mood=<?php echo $mood?>" class="">
                            <i class="fa-solid fa-users-line"></i>
                            <span>الموظفين</span>
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <ul class="mm-collapse">
                            <li>
                                <a href="../ar/staff_data.php?id=<?php echo $data['id']?>&mood=<?php echo $mood?>">
                                    <i class="fa-solid fa-id-card-clip"></i>
                                    <span> بيانات الموظف </span>
                                </a>
                            </li>
                            <li>
                                <a href="../ar/salaries.php?id=<?php echo $data['id']?>&mood=<?php echo $mood?>">
                                    <i class="fa-solid fa-hand-holding-dollar"></i>
                                    <span> المرتبات </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="li">
                        <a href="#?id=<?php echo $data['id']?>&mood=<?php echo $mood?>" class="">
                            <i class="fa-solid fa-parachute-box"></i>
                            <span>الموردين</span>
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <ul class="mm-collapse">
                            <li>
                                <a href="#?id=<?php echo $data['id']?>&mood=<?php echo $mood?>">
                                    <i class="fa-solid fa-info"></i>
                                    <span> بيانات الموردين </span>
                                </a>
                            </li>
                            <li>
                                <a href="#?id=<?php echo $data['id']?>&mood=<?php echo $mood?>">
                                    <i class="fa-brands fa-slideshare"></i>
                                    <span> مستحقات الموردين </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="li">
                        <a href="#?id=<?php echo $data['id']?>&mood=<?php echo $mood?>" class="">
                            <i class="fa-solid fa-building-columns"></i>
                            <span>البنوك</span>
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <ul class="mm-collapse">
                            <li>
                                <a href="../ar/banks.php?id=<?php echo $data['id']?>&mood=<?php echo $mood?>">
                                    <i class="fa-solid fa-money-check-dollar"></i>
                                    <span> اسماء البنوك </span>
                                </a>
                            </li>
                            <li>
                                <a href="../ar/devotions.php?id=<?php echo $data['id']?>&mood=<?php echo $mood?>">
                                    <i class="fa-solid fa-money-bill-transfer"></i>
                                    <span> الإيداعات </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="li">
                        <a href="#?id=<?php echo $data['id']?>&mood=<?php echo $mood?>" class="">
                            <i class="fa-solid fa-database"></i>
                            <span>معدات الشركة</span>
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <ul class="mm-collapse">
                            <li>
                                <a href="../ar/devices_data.php?id=<?php echo $data['id']?>&mood=<?php echo $mood?>">
                                    <i class="fa-solid fa-magnifying-glass-chart"></i>
                                    <span> بيانات المعدات </span>
                                </a>
                            </li>
                            <li>
                                <a href="../ar/maintenance.php?id=<?php echo $data['id']?>&mood=<?php echo $mood?>">
                                    <i class="fa-solid fa-screwdriver-wrench"></i>
                                    <span> الصيانة </span>
                                </a>
                            </li>
                            <li>
                                <a href="../ar/staff_custody.php?id=<?php echo $data['id']?>&mood=<?php echo $mood?>">
                                    <i class="fa-solid fa-cart-flatbed"></i>
                                    <span> عهدة الموظفين </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="settings">
                        <a href="../ar/users_checked.php?id=<?php echo $data['id']?>&mood=<?php echo $mood?>">
                            <i class="fa fa-cog"></i>
                            <span>الاعدادات</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- show-board -->
            <div class="show-board">
                <div class="title-info">
                    <p>لوحة المعلومات</p>
                    <i class="fa fa-chart-bar"></i>
                </div>
                <div class="data-info">
                    <div class="box">
                        <i class="fa fa-user"></i>
                        <div class="data">
                            <p>المستخدم</p>
                            <span>100</span>
                        </div>
                    </div>
                    <div class="box">
                        <i class="fa fa-pen"></i>
                        <div class="data">
                            <p>posts</p>
                            <span>765</span>
                        </div>
                    </div>
                    <div class="box">
                        <i class="fa fa-table"></i>
                        <div class="data">
                            <p>products</p>
                            <span>34</span>
                        </div>
                    </div>
                    <div class="box">
                        <i class="fa fa-dollar"></i>
                        <div class="data">
                            <p>revenue</p>
                            <span>$126</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- js files -->
        <script src="../js/popper.min.js"></script>
        <script src="../js/jquery-3.7.0.min.js"></script>
        <script src="../js/bootstrap.js"></script>
        <script src="../js/all.min.js"></script>
        <?php
        echo
            "<script>
                window.onload = () => {
                    if( $ABILITY == true){
                        document.querySelector('.settings').style.display = 'block';
                    }
                };
            </script>"
        ?>
        <script src="../js/menu.js"></script>
    </body>
</html>
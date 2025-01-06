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
        <link rel="stylesheet" href="../css/store/staff_custody.css">
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
            <!-- menu -->
            <div class="menu">
                <ul>        
                    <li>
                        <a href="../ar/index.php?id=<?php echo $data['id']?>" class="active">
                            <i class="fa fa-home"></i>
                            <span>لوحة التحكم</span>
                        </a>
                    </li>
                    <li class="li">
                        <a href="#?id=<?php echo $data['id']?>" class="">
                            <i class="fa fa-money-bill"></i>
                            <span>المدفوعات</span>
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <ul class="mm-collapse">
                            <li>
                                <a href="../ar/invoice.php?id=<?php echo $data['id']?>">
                                    <i class="fas fa-file-invoice"></i>
                                    <span> الفواتير </span>
                                </a>
                            </li>
                            <li>
                                <a href="#?id=<?php echo $data['id']?>">
                                    <i class="fa-solid fa-layer-group"></i>
                                    <span> مطابقة النظام </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="li">
                        <a href="#?id=<?php echo $data['id']?>" class="">
                            <i class="fa-solid fa-users-line"></i>
                            <span>الموظفين</span>
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <ul class="mm-collapse">
                            <li>
                                <a href="../ar/staff_data.php?id=<?php echo $data['id']?>">
                                    <i class="fa-solid fa-id-card-clip"></i>
                                    <span> بيانات الموظف </span>
                                </a>
                            </li>
                            <li>
                                <a href="../ar/salaries.php?id=<?php echo $data['id']?>">
                                    <i class="fa-solid fa-hand-holding-dollar"></i>
                                    <span> المرتبات </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="li">
                        <a href="#?id=<?php echo $data['id']?>" class="">
                            <i class="fa-solid fa-parachute-box"></i>
                            <span>الموردين</span>
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <ul class="mm-collapse">
                            <li>
                                <a href="#?id=<?php echo $data['id']?>">
                                    <i class="fa-solid fa-info"></i>
                                    <span> بيانات الموردين </span>
                                </a>
                            </li>
                            <li>
                                <a href="#?id=<?php echo $data['id']?>">
                                    <i class="fa-brands fa-slideshare"></i>
                                    <span> مستحقات الموردين </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="li">
                        <a href="#?id=<?php echo $data['id']?>" class="">
                            <i class="fa-solid fa-building-columns"></i>
                            <span>البنوك</span>
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <ul class="mm-collapse">
                            <li>
                                <a href="../ar/banks.php?id=<?php echo $data['id']?>">
                                    <i class="fa-solid fa-money-check-dollar"></i>
                                    <span> اسماء البنوك </span>
                                </a>
                            </li>
                            <li>
                                <a href="../ar/devotions.php?id=<?php echo $data['id']?>">
                                    <i class="fa-solid fa-money-bill-transfer"></i>
                                    <span> الإيداعات </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="li">
                        <a href="#?id=<?php echo $data['id']?>" class="">
                            <i class="fa-solid fa-database"></i>
                            <span>معدات الشركة</span>
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <ul class="mm-collapse">
                            <li>
                                <a href="../ar/devices_data.php?id=<?php echo $data['id']?>">
                                    <i class="fa-solid fa-magnifying-glass-chart"></i>
                                    <span> بيانات المعدات </span>
                                </a>
                            </li>
                            <li>
                                <a href="../ar/maintenance.php?id=<?php echo $data['id']?>">
                                    <i class="fa-solid fa-screwdriver-wrench"></i>
                                    <span> الصيانة </span>
                                </a>
                            </li>
                            <li>
                                <a href="../ar/staff_custody.php?id=<?php echo $data['id']?>">
                                    <i class="fa-solid fa-cart-flatbed"></i>
                                    <span> عهدة الموظفين </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="settings">
                        <a href="../ar/users_checked.php?id=<?php echo $data['id']?>">
                            <i class="fa fa-cog"></i>
                            <span>الاعدادات</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- show-board -->
            <div class="show-board">
                <div class="title-info">
                    <p>بيانات عهدة الموظفين</p>    
                    <div class="btns-export-group">
                        <button class="btn export mx-2" onclick="ExportToXLSX('xls')">التصدير الي إكسيل</button>
                        <button class="btn export mx-2" onclick="ExportToPDF()">التصدير الي pdf</butto>
                    </div>
                </div>
                <div>
                    <div class="input-group is-invalid">
                        <input class="form-control my-2" style="height: 38px;" type="search" placeholder="البحث بأسم الموظف" id="searchInput" oninput="searchOperation(this.value)" aria-label="Search">
                        <select class="select my-2" aria-label="search_items" id="search_items" onchange="getsearchMood(this.value)">
                            <option value="name">اسم الموظف </option>
                            <option value="code">المعرف</option>
                        </select>
                    </div>
                </div>
                <div class="data-info card-info">
                    <div class="box">
                        <div class="body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th colspan="4">صان مي</th>
                                    </tr>
                                </thead>
                                <tbody id="on">
                                    <tr class="no">
                                        <th colspan="2">تعمل</th>
                                    </tr>
                                    <tr>
                                        <td>تأمين</td>
                                        <td id="on_insurance_SUNMI" class="clearValue">0</td>
                                    </tr>
                                    <tr>
                                        <td>تقسيط</td>
                                        <td id="on_installment_SUNMI" class="clearValue">0</td>
                                    </tr>
                                    <tr>
                                        <td>كاش</td>
                                        <td id="on_cash_SUNMI" class="clearValue">0</td>
                                    </tr>
                                    <tr>
                                        <td>فري</td>
                                        <td id="on_free_SUNMI" class="clearValue">0</td>
                                    </tr>
                                    <tr>
                                        <td>الإجمالي</td>
                                        <td id="tot_on_SUNMI" class="clearValue">0</td>
                                    </tr>
                                </tbody>
                                <tbody id="maintenance">
                                    <tr class="no">
                                        <th colspan="2">صيانة</th>
                                    </tr>
                                    <tr>
                                        <td>تأمين</td>
                                        <td id="maintenance_insurance_SUNMI" class="clearValue">0</td>
                                    </tr>
                                    <tr>
                                        <td>تقسيط</td>
                                        <td id="maintenance_installment_SUNMI" class="clearValue">0</td>
                                    </tr>
                                    <tr>
                                        <td>كاش</td>
                                        <td id="maintenance_cash_SUNMI" class="clearValue">0</td>
                                    </tr>
                                    <tr>
                                        <td>فري</td>
                                        <td id="maintenance_free_SUNMI" class="clearValue">0</td>
                                    </tr>
                                    <tr>
                                        <td>الإجمالي</td>
                                        <td id="tot_maintenance_SUNMI" class="clearValue">0</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td>المخزن</td>
                                        <td id="store_SUNMI" class="clearValue">0</td>
                                    </tr>
                                    <tr>
                                        <td>الإجمالي</td>
                                        <td id="tot_SUNMI" class="clearValue">0</td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <div class="box">
                        <div class="body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th colspan="4">انجينكو</th>
                                    </tr>
                                </thead>
                                <tbody id="on">
                                    <tr class="no">
                                        <th colspan="2">تعمل</th>
                                    </tr>
                                    <tr>
                                        <td>تأمين</td>
                                        <td id="on_insurance_INGENICO" class="clearValue">0</td>
                                    </tr>
                                    <tr>
                                        <td>تقسيط</td>
                                        <td id="on_installment_INGENICO" class="clearValue">0</td>
                                    </tr>
                                    <tr>
                                        <td>كاش</td>
                                        <td id="on_cash_INGENICO" class="clearValue">0</td>
                                    </tr>
                                    <tr>
                                        <td>فري</td>
                                        <td id="on_free_INGENICO" class="clearValue">0</td>
                                    </tr>
                                    <tr>
                                        <td>الإجمالي</td>
                                        <td id="tot_on_INGENICO" class="clearValue">0</td>
                                    </tr>
                                </tbody>
                                <tbody id="maintenance">
                                    <tr class="no">
                                        <th colspan="2">صيانة</th>
                                    </tr>
                                    <tr>
                                        <td>تأمين</td>
                                        <td id="maintenance_insurance_INGENICO" class="clearValue">0</td>
                                    </tr>
                                    <tr>
                                        <td>تقسيط</td>
                                        <td id="maintenance_installment_INGENICO" class="clearValue">0</td>
                                    </tr>
                                    <tr>
                                        <td>كاش</td>
                                        <td id="maintenance_cash_INGENICO" class="clearValue">0</td>
                                    </tr>
                                    <tr>
                                        <td>فري</td>
                                        <td id="maintenance_free_INGENICO" class="clearValue">0</td>
                                    </tr>
                                    <tr>
                                        <td>الإجمالي</td>
                                        <td id="tot_maintenance_INGENICO" class="clearValue">0</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td>المخزن</td>
                                        <td id="store_INGENICO" class="clearValue">0</td>
                                    </tr>
                                    <tr>
                                        <td>الإجمالي</td>
                                        <td id="tot_INGENICO" class="clearValue">0</td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <div class="box">
                        <div class="body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th colspan="4">باكس</th>
                                    </tr>
                                </thead>
                                <tbody id="on">
                                    <tr class="no">
                                        <th colspan="2">تعمل</th>
                                    </tr>
                                    <tr>
                                        <td>تأمين</td>
                                        <td id="on_insurance_PAX" class="clearValue">0</td>
                                    </tr>
                                    <tr>
                                        <td>تقسيط</td>
                                        <td id="on_installment_PAX" class="clearValue">0</td>
                                    </tr>
                                    <tr>
                                        <td>كاش</td>
                                        <td id="on_cash_PAX" class="clearValue">0</td>
                                    </tr>
                                    <tr>
                                        <td>فري</td>
                                        <td id="on_free_PAX" class="clearValue">0</td>
                                    </tr>
                                    <tr>
                                        <td>الإجمالي</td>
                                        <td id="tot_on_PAX" class="clearValue">0</td>
                                    </tr>
                                </tbody>
                                <tbody id="maintenance">
                                    <tr class="no">
                                        <th colspan="2">صيانة</th>
                                    </tr>
                                    <tr>
                                        <td>تأمين</td>
                                        <td id="maintenance_insurance_PAX" class="clearValue">0</td>
                                    </tr>
                                    <tr>
                                        <td>تقسيط</td>
                                        <td id="maintenance_installment_PAX" class="clearValue">0</td>
                                    </tr>
                                    <tr>
                                        <td>كاش</td>
                                        <td id="maintenance_cash_PAX" class="clearValue">0</td>
                                    </tr>
                                    <tr>
                                        <td>فري</td>
                                        <td id="maintenance_free_PAX" class="clearValue">0</td>
                                    </tr>
                                    <tr>
                                        <td>الإجمالي</td>
                                        <td id="tot_maintenance_PAX" class="clearValue">0</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td>المخزن</td>
                                        <td id="store_PAX" class="clearValue">0</td>
                                    </tr>
                                    <tr>
                                        <td>الإجمالي</td>
                                        <td id="tot_PAX" class="clearValue">0</td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <div class="box">
                        <div class="body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th colspan="4">موبي وير</th>
                                    </tr>
                                </thead>
                                <tbody id="on">
                                    <tr class="no">
                                        <th colspan="2">تعمل</th>
                                    </tr>
                                    <tr>
                                        <td>تأمين</td>
                                        <td id="on_insurance_MOBIWIRE" class="clearValue">0</td>
                                    </tr>
                                    <tr>
                                        <td>تقسيط</td>
                                        <td id="on_installment_MOBIWIRE" class="clearValue">0</td>
                                    </tr>
                                    <tr>
                                        <td>كاش</td>
                                        <td id="on_cash_MOBIWIRE" class="clearValue">0</td>
                                    </tr>
                                    <tr>
                                        <td>فري</td>
                                        <td id="on_free_MOBIWIRE" class="clearValue">0</td>
                                    </tr>
                                    <tr>
                                        <td>الإجمالي</td>
                                        <td id="tot_on_MOBIWIRE" class="clearValue">0</td>
                                    </tr>
                                </tbody>
                                <tbody id="maintenance">
                                    <tr class="no">
                                        <th colspan="2">صيانة</th>
                                    </tr>
                                    <tr>
                                        <td>تأمين</td>
                                        <td id="maintenance_insurance_MOBIWIRE" class="clearValue">0</td>
                                    </tr>
                                    <tr>
                                        <td>تقسيط</td>
                                        <td id="maintenance_installment_MOBIWIRE" class="clearValue">0</td>
                                    </tr>
                                    <tr>
                                        <td>كاش</td>
                                        <td id="maintenance_cash_MOBIWIRE" class="clearValue">0</td>
                                    </tr>
                                    <tr>
                                        <td>فري</td>
                                        <td id="maintenance_free_MOBIWIRE" class="clearValue">0</td>
                                    </tr>
                                    <tr>
                                        <td>الإجمالي</td>
                                        <td id="tot_maintenance_MOBIWIRE" class="clearValue">0</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td>المخزن</td>
                                        <td id="store_MOBIWIRE" class="clearValue">0</td>
                                    </tr>
                                    <tr>
                                        <td>الإجمالي</td>
                                        <td id="tot_MOBIWIRE" class="clearValue">0</td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <div class="box">
                        <div class="body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th colspan="4"> فري فون</th>
                                    </tr>
                                </thead>
                                <tbody id="on">
                                    <tr class="no">
                                        <th colspan="2">تعمل</th>
                                    </tr>
                                    <tr>
                                        <td>تأمين</td>
                                        <td id="on_insurance_VERIFONE" class="clearValue">0</td>
                                    </tr>
                                    <tr>
                                        <td>تقسيط</td>
                                        <td id="on_installment_VERIFONE" class="clearValue">0</td>
                                    </tr>
                                    <tr>
                                        <td>كاش</td>
                                        <td id="on_cash_VERIFONE" class="clearValue">0</td>
                                    </tr>
                                    <tr>
                                        <td>فري</td>
                                        <td id="on_free_VERIFONE" class="clearValue">0</td>
                                    </tr>
                                    <tr>
                                        <td>الإجمالي</td>
                                        <td id="tot_on_VERIFONE" class="clearValue">0</td>
                                    </tr>
                                </tbody>
                                <tbody id="maintenance">
                                    <tr class="no">
                                        <th colspan="2">صيانة</th>
                                    </tr>
                                    <tr>
                                        <td>تأمين</td>
                                        <td id="maintenance_insurance_VERIFONE" class="clearValue">0</td>
                                    </tr>
                                    <tr>
                                        <td>تقسيط</td>
                                        <td id="maintenance_installment_VERIFONE" class="clearValue">0</td>
                                    </tr>
                                    <tr>
                                        <td>كاش</td>
                                        <td id="maintenance_cash_VERIFONE" class="clearValue">0</td>
                                    </tr>
                                    <tr>
                                        <td>فري</td>
                                        <td id="maintenance_free_VERIFONE" class="clearValue">0</td>
                                    </tr>
                                    <tr>
                                        <td>الإجمالي</td>
                                        <td id="tot_maintenance_VERIFONE" class="clearValue">0</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td>المخزن</td>
                                        <td id="store_VERIFONE" class="clearValue">0</td>
                                    </tr>
                                    <tr>
                                        <td>الإجمالي</td>
                                        <td id="tot_VERIFONE" class="clearValue">0</td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
                <form novalidate>
                    <div class="modal-header text-light">
                        <h5 class="modal-title" id="showdataTitle">إنشاء عنصر</h5>
                    </div>
                    <div class="form-row py-3">
                        <div class="col-xl-10 col-md-9 col-sm-auto inputs-group">
                            <div class="form-group">
                                <label for="usercode">معرف الموظف</label>
                                <input type="text" class="form-control " id="usercode">
                            </div>
                            <div class="form-group">
                                <label for="username"> اسم الموظف </label>
                                <input type="text" class="form-control" id="username">
                            </div>
                            <div class="form-group">
                                <label for="nationalID"> الرقم القومي </label>
                                <input type="text" class="form-control" id="nationalID">
                            </div>
                            <div class="form-group">
                                <label for="deviceCode">معرف المكينة</label>
                                <input type="text" class="form-control" id="deviceCode">
                            </div>
                            <div class="form-group">
                                <label for="imel">رقم هوية IMEI</label>
                                <input type="text" class="form-control" id="imel">
                            </div>
                            <div class="form-group">
                                <label for="sn">SN</label>
                                <input type="text" class="form-control " id="sn">
                            </div>
                            <div class="form-group">
                                <label for="typeOfdevice">نوع الجهاز</label>
                                <input type="text" class="form-control " id="typeOfdevice">
                            </div>
                            <div class="form-group">
                                <label for="typeOfpay">نوع الدفع</label>
                                <input type="text" class="form-control " id="typeOfpay">
                            </div>
                            <div class="form-group">
                                <label for="stateOfdevice">الحالة</label>
                                <input type="text" class="form-control " id="stateOfdevice">
                            </div>
                            <div class="form-group">
                                <label for="paydate">تاريخ الدفع</label>
                                <input type="text" class="form-control " id="paydate">
                            </div>
                            <div class="form-group">
                                <label for="receivedDate">تاريخ الأستلام</label>
                                <input type="text" class="form-control " id="receivedDate">
                            </div>
                            <div class="form-group">
                                <label for="payvalue"> قيمة المدفوع</label>
                                <input type="text" class="form-control " id="payvalue">
                            </div>
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary ml-2 w-100" data-dismiss="modal" id="save" onclick="saveData(tmp)">تسجيل</button>
                        <button type="button" class="btn btn-primary ml-2 w-100" data-dismiss="modal" id="clear" onclick="clearinput()">تنظيف</button>
                    </div>
                </form>
                <div class="data-info">
                    <table class="table table-bordered table-striped" id="table">
                        <thead>
                            <tr>
                                <th> المعرف الموظف</th>
                                <th> اسم الموظف</th>
                                <th>الرقم القومي</th>
                                <th> المعرف للمكينة</th>
                                <th>رقم هوية IMEI</th>
                                <th>SN</th>
                                <th>نوع الجهاز</th>
                                <th>نوع الدفع</th>
                                <th> الحالة</th>
                                <th>تاريخ الدفع</th>
                                <th>تاريخ الاستلام</th>
                                <th>قيمة المدفوع</th>
                                <th>الاجراء</th>
                            </tr>
                        </thead>
                        <tbody id="body-data">
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- js files -->
        <script src="../js/jquery-3.7.0.min.js"></script>
        <script src="../js/popper.min.js"></script>
        <script src="../js/bootstrap.js"></script>
        <script src="../js/all.min.js"></script>
        <script src="../js/menu.js"></script>
        <script src="../js/staff_custody.js"></script>
        <!-- <script src="../js/main.js"></script> -->
        <script src="../js/unpkg.com_xlsx@0.15.1_dist_xlsx.full.min.js"></script>
        <script src="../js/pdf.bundle.min.js"></script>
        <script src="../js/pdf.bundle.js"></script>
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
    </body>
</html>
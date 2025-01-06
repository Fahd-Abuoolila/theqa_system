<!DOCTYPE html>
<html lang="ar">
    <head>
        <!-- meta -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="this system is private property">
        <!-- link icon -->
        <link rel="icon" href="../img/logo.png">
        <!-- link css -->
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/user_checked.css">
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
                    <p>الفواتير</p>    
                    <div class="btns-export-group">
                        <button class="btn export mx-2" onclick="ExportToXLSX('xls')">التصدير الي إكسيل</button>
                        <button class="btn export mx-2" onclick="ExportToPDF()">التصدير الي pdf</butto>
                    </div>
                </div>
                <form novalidate>
                    <div class="modal-header text-light">
                        <h5 class="modal-title" id="showdataTitle">إنشاء عنصر</h5>
                    </div>
                    <div class="form-row py-3">
                        <div class="col-xl-12 col-md-9 col-sm-auto inputs-group"> 
                            <div class="form-group">
                                <label for="user_name">المستخدم</label>
                                <input type="text" class="form-control" id="user_name">
                            </div>
                            <div class="form-group">
                                <label for="email">البريد </label>
                                <input type="email" class="form-control" id="email">
                            </div>
                            <div class="form-group">
                                <label for="password">الرقم السري </label>
                                <input type="text" class="form-control" id="password" >
                            </div>
                            <div class="form-group">
                                <label for="job"> الوظيفة</label>
                                <input type="text" class="form-control" id="job" >
                            </div>
                            <div class="form-group">
                                <label for="edit">الصلاحية</label>
                                <input type="checkbox" class="form-control" id="edit" >
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
                                <th>id</th>
                                <th>المستخدم</th>
                                <th>الرقم السري</th>
                                <th>الوظيفة</th>
                                <th>الصلاحية</th>
                                <th>الاجراءات </th>
                            </tr>
                        </thead>
                        <tbody id="body-data">
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- js files -->
        <script src="../js/unpkg.com_xlsx@0.15.1_dist_xlsx.full.min.js"></script>
        <script src="../js/jquery-3.7.0.min.js"></script>
        <script src="../js/pdf.bundle.min.js"></script>
        <!-- <script src="../js/user_checked.js"></script> -->
        <script src="../js/pdf.bundle.js"></script>
        <script src="../js/popper.min.js"></script>
        <script src="../js/bootstrap.js"></script>
        <script src="../js/all.min.js"></script>
        <script src="../js/menu.js"></script>
        <!-- <script src="../js/main.js"></script> -->
        <?php
        echo
            "<script>
                window.onload = () => {
                if( $ABILITY == true){
                    document.querySelector('.settings').style.display = 'block';
                }
            };
            document.getElementById('User_Name_Show').innerHTML = localStorage.getItem('name');
            function ReadData() {
                let data = ``;
                let users = [
                    {
                        name: 'emad.abuoolila',
                        email: 'emad.abuoolila@gmail.com',
                        password: 'emad'
                    },
                    {
                        name: 'ziad.abuoolila',
                        email: 'ziad.abuoolila@gmail.com',
                        password:'ziad'
                    },
                    {
                        name: 'body.abuoolila',
                        email: 'body.abuoolila@gmail.com',
                        password: 'body'
                    },
                    {
                        name: 'diab.abuoolila',
                        email: 'diab.abuoolila@gmail.com',
                        password: 'diab'
                    },
                ];
                for (let n = 0; n < users.length; n++) {
                    data += `
                        <tr>
                            <td>${n+1}</td>
                            <td>${users.[n].name}</td>
                            <td>${users.[n].email}</td>
                            <td>${users.[n].password}</td>
                            <td>${users.[n].edit}</td>
                            <td>
                                <div class='dropdown'>
                                    <button class='btn btn-primary dropdown-toggle' type='button' data-toggle='dropdown' aria-expanded='false' style='padding: 0 !important; height: 35px; width: 55px;'>
                                        <i class='fa fa-cog p-1'></i>
                                    </button>
                                    <div class='dropdown-menu' style=''>
                                        <button type='button' class='btn btn-primary my-2' onclick='updateData(${n})'>تعديل</button>
                                        <button class='btn btn-danger my-2' onclick='deleteData(${n})' id='delete'>الحذف</button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    `
                }
                document.querySelector('#body-data').innerHTML = data;
            }
            ReadData();

            let user_name = document.querySelector('#user_name');
            let email = document.querySelector('#email');
            let password = document.querySelector('#password');
            let job = document.querySelector('#job');
            let edit = document.querySelector('#edit');
            // savedata
            function saveData(tmp) {
                if(
                    user_name.value != '' &&
                    email.value != '' &&
                    password.value != '' &&
                    job.value != ''
                ){
                    if (mood === 'create') {
                        users[users.length] = {
                            user_name: user_name.value,
                            email: email.value,
                            password: password.value,
                            job: job.value,
                            edit: edit.checked
                        };
                    } else {
                        users[tmp].user_name = user_name.value;
                        users[tmp].email = email.value;
                        users[tmp].password = password.value;
                        users[tmp].job = job.value;
                        users[tmp].edit = edit.checked;
                    }
                    clearinput();
                    ReadData();
                } else {
                    alert('الحقول فارغة');
                }
            }
            // updateData
            function updateData(n) {
                user_name.value = users[n].user_name;
                email.value = users[n].email;
                password.value = users[n].password;
                job.value = users[n].job;
                edit.checked = users[n].edit;
                save.innerHTML = 'إعادة تسجيل العنصر';
                showdataTitle.innerHTML = 'تعديل العنصر' + `<span>${n + 1}</span>`;
                mood = 'update';
                tmp = n;
            }
            // cleardata
            function clearinput() {
                user_name.value = '';
                email.value = '';
                password.value = '';
                job.value = '';
                edit.checked = false;
                save.innerHTML = 'تسجيل';
                showdataTitle.innerHTML = 'إنشاء عنصر';
                mood = 'create';
            }
            // deletedata
            function deleteData(n) {
                users.splice(n, 1);
                ReadData();
            }
            // export to xslx
            function ExportToXLSX(type, fn, dl) {
                var table = document.getElementById('table');
                var wb = XLSX.utils.table_to_book(table, { sheet: 'sheet1' });
                return dl
                    ? XLSX.write(wb, { bookType: type, bookSST: true, type: 'base64' })
                    : XLSX.writeFile(wb, fn || 'staff.' + (type || 'xls'));
            }
            // export to pdf
            function ExportToPDF() {
                var table = document.getElementById('table');
                var opt = {
                    margin: 1,
                    filename: 'staff.pdf',
                    image: { type: 'jpeg', quality: 0.98 },
                    html2canvas: { scale: 2 },
                    jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
                };
                pdf(table, opt);
            }
            </script>"
        ?>
    </body>
</html>
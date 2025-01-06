let data = '';
for(let n = 0; n < users.length; n++){
    return data;
    data += `
        <tr>
            <td>${n+1}</td>
            <td>${users[n].name}</td>
            <td>${users[n].email}</td>
            <td>${users[n].job}</td>
            <td>
                <div class="dropdown mx-2 my-2">
                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-cog p-1"></i>
                    </button>
                    <div class="dropdown-menu" style="">
                        <button class="btn btn-danger" onclick="deleteData(${n})" id="delete">الحذف</button>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop" onclick="updateData(${n})">تعديل</button>
                    </div>
                    <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header text-dark">
                                <h5 class="modal-title" id="staticBackdropLabel">تعديل العنصر</h5>
                            </div>
                            <div class="modal-body">
                                <div class="form-row">
                                    <div class="form-group col-12">
                                        <label for="rename">اسم المستخدم</label>
                                        <input type="text" class="form-control" id="rename">
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="reemail">البريد</label>
                                        <input type="email" class="form-control" id="reemail">
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="repassword">كلمة المرور</label>
                                        <input type="password" class="form-control" id="repassword" autocomplete="0">
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="rejob">الوظيفة</label>
                                        <input type="text" class="form-control" id="rejob" autocomplete="0">
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="reedit" class="w-50">إمكانية التعديل</label>
                                        <input type="checkbox" class="form-check-input" id="reedit">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary ml-2" data-dismiss="modal" id="save" onclick="saveData(${n})">حفظ</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">إغلاق</button>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </td>
        </tr>
    `
}
document.querySelector('#body-data').innerHTML = data;

let rename = document.querySelector('#rename');
let reemail = document.querySelector('#reemail');
let repassword = document.querySelector('#repassword');
let rejob = document.querySelector('#rejob');
let reedit = document.querySelector('#reedit');
function updateData(n){
    rename.value = users[n].name;
    reemail.value = users[n].email;
    repassword.value = users[n].password;
    rejob.value = users[n].job;
    reedit.checked = users[n].edit;
}

function saveData(n){
    users[n].name = rename.value;
    users[n].email = reemail.value;
    users[n].password = repassword.value;
    users[n].job = rejob.value;
    users[n].edit = reedit.checked;
}
function deleteData(n)
{
    dataPro.splice(n,1);
}
// export to xslx
function ExportToXLSX(type, fn, dl){
    var elt = document.getElementById('table');
    var wb = XLSX.utils.table_to_book(elt,{sheet: "sheet1"});
    return dl ?
    XLSX.write(wb, { bookType: type, bookSST: true, type: 'base64'}) :
    XLSX.writeFile(wb, fn || ('Users.' + (type || 'xls')));
}

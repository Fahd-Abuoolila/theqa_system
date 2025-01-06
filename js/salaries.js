let StaffData = [
    {
        code: '47985',
        name: "عماد ابراهيم عبدالعزيز ابراهيم ابوليلة",
        job: "manager ",
        salaries: 5000,
        commission: 500,
        insurance: 200,
        taxes: 100,
        totalsalaries: 0,
    },
    {
        code: '47985',
        name: "محمد ناجي محمد موسى عبدالمتجلي",
        job: "sales ",
        salaries: 3000,
        commission: 200,
        insurance: 600,
        taxes: 100,
        totalsalaries: 0,
    },
    {
        code: '47985',
        name: "فهد الدين عماد ابراهيم عبدالعزيز",
        job: "sales ",
        salaries: 5000,
        commission: 900,
        insurance: 100,
        taxes: 100,
        totalsalaries: 0,
    },
    {
        code: '47985',
        name: "زياد عماد ابراهيم عبدالعزيز",
        job: "sales ",
        salaries: 8000,
        commission: 600,
        insurance: 200,
        taxes: 1000,
        totalsalaries: 0,
    },
    {
        code: '47985',
        name: " عبدالرحمن عماد ابراهيم عبدالعزيز",
        job: "sales ",
        salaries: 5000,
        commission: 1000,
        insurance: 100,
        taxes: 500,
        totalsalaries: 0,
    },
];

document.getElementById('User_Name_Show').innerHTML = localStorage.getItem('name');
function ReadData(){   
    let data = ``;
    for(let n = 0; n < StaffData.length; n++){
        StaffData[n].totalsalaries = (+StaffData[n].salaries + +StaffData[n].commission) - (+StaffData[n].insurance + +StaffData[n].taxes);
        data += `
            <tr>
                <td>${n+1}</td>
                <td>${StaffData[n].code}</td>
                <td>${StaffData[n].name}</td>
                <td>${StaffData[n].job}</td>
                <td>${StaffData[n].salaries}</td>
                <td>${StaffData[n].commission}</td>
                <td>${StaffData[n].insurance}</td>
                <td>${StaffData[n].taxes}</td>
                <td>${StaffData[n].totalsalaries}</td>
                <td>
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false" style="padding: 0 !important; height: 35px; width: 55px;">
                            <svg class="svg-inline--fa fa-gear p-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="gear" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M495.9 166.6c3.2 8.7 .5 18.4-6.4 24.6l-43.3 39.4c1.1 8.3 1.7 16.8 1.7 25.4s-.6 17.1-1.7 25.4l43.3 39.4c6.9 6.2 9.6 15.9 6.4 24.6c-4.4 11.9-9.7 23.3-15.8 34.3l-4.7 8.1c-6.6 11-14 21.4-22.1 31.2c-5.9 7.2-15.7 9.6-24.5 6.8l-55.7-17.7c-13.4 10.3-28.2 18.9-44 25.4l-12.5 57.1c-2 9.1-9 16.3-18.2 17.8c-13.8 2.3-28 3.5-42.5 3.5s-28.7-1.2-42.5-3.5c-9.2-1.5-16.2-8.7-18.2-17.8l-12.5-57.1c-15.8-6.5-30.6-15.1-44-25.4L83.1 425.9c-8.8 2.8-18.6 .3-24.5-6.8c-8.1-9.8-15.5-20.2-22.1-31.2l-4.7-8.1c-6.1-11-11.4-22.4-15.8-34.3c-3.2-8.7-.5-18.4 6.4-24.6l43.3-39.4C64.6 273.1 64 264.6 64 256s.6-17.1 1.7-25.4L22.4 191.2c-6.9-6.2-9.6-15.9-6.4-24.6c4.4-11.9 9.7-23.3 15.8-34.3l4.7-8.1c6.6-11 14-21.4 22.1-31.2c5.9-7.2 15.7-9.6 24.5-6.8l55.7 17.7c13.4-10.3 28.2-18.9 44-25.4l12.5-57.1c2-9.1 9-16.3 18.2-17.8C227.3 1.2 241.5 0 256 0s28.7 1.2 42.5 3.5c9.2 1.5 16.2 8.7 18.2 17.8l12.5 57.1c15.8 6.5 30.6 15.1 44 25.4l55.7-17.7c8.8-2.8 18.6-.3 24.5 6.8c8.1 9.8 15.5 20.2 22.1 31.2l4.7 8.1c6.1 11 11.4 22.4 15.8 34.3zM256 336a80 80 0 1 0 0-160 80 80 0 1 0 0 160z"></path></svg><!-- <i class="fa fa-cog p-1"></i> Font Awesome fontawesome.com -->
                        </button>
                        <div class="dropdown-menu" style="position: absolute; transform: translate3d(2px, 35px, 0px); top: 0px; left: 0px; will-change: transform;" x-placement="bottom-start">
                            <button class="btn btn-success my-2" onclick="showData(${n})" data-toggle="modal" data-target="#showdata">عرض</button>
                            <button class="btn btn-primary my-2" onclick="updateData(${n})" data-toggle="modal" data-target="#editdata">تعديل</button>
                            <button class="btn btn-danger my-2" onclick="deleteData(${n})" id="delete">الحذف</button>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="showdata" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="showdataLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header text-dark">
                                        <h5 class="modal-title" id="showdataLabel">عرض العنصر</h5>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-row">
                                            <div class="form-group col-12">
                                                <label for="S_code">المعرف </label>
                                                <div class="form-control" id="S_code">
                                                </div>
                                                <div class="form-group col-12">
                                                    <label for="S_name">الاسم</label>
                                                    <div class="form-control" id="S_name"></div>
                                                </div>
                                                <div class="form-group col-12">
                                                    <label for="S_job">الوظيفة </label>
                                                    <div class="form-control" id="S_job"></div>
                                                </div>
                                                <div class="form-group col-12">
                                                    <label for="S_salaries"> صافي المرتب</label>
                                                    <div class="form-control" id="S_salaries"></div>
                                                </div>
                                                <div class="form-group col-12">
                                                    <label for="S_commission">العمولة</label>
                                                    <div class="form-control" id="S_commission"></div>
                                                </div>
                                                <div class="form-group col-12">
                                                    <label for="S_insurance">التأمينات</label>
                                                    <div class="form-control" id="S_insurance"></div>
                                                </div>
                                                <div class="form-group col-12">
                                                    <label for="S_taxes">الضرائب</label>
                                                    <div class="form-control" id="S_taxes"></div>
                                                </div>
                                                <div class="form-group col-12">
                                                    <label for="S_totalsalaries">إجمالي المرتب</label>
                                                    <div class="form-control" id="S_totalsalaries"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">إغلاق</button>
                                        </div>
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
}
ReadData();

let save = document.getElementById("save");
// showdata
let S_code = document.querySelector('#S_code');
let S_name = document.querySelector('#S_name');
let S_job = document.querySelector('#S_job');
let S_salaries = document.querySelector('#S_salaries');
let S_commission = document.querySelector('#S_commission');
let S_insurance = document.querySelector('#S_insurance');
let S_taxes = document.querySelector('#S_taxes');
let S_totalsalaries = document.querySelector('#S_totalsalaries');

function showData(n){
    S_code.innerHTML = StaffData[n].code;
    S_name.innerHTML = StaffData[n].name;
    S_job.innerHTML = StaffData[n].job;
    S_salaries.innerHTML = StaffData[n].salaries;
    S_commission.innerHTML = StaffData[n].commission;
    S_insurance.innerHTML = StaffData[n].insurance;
    S_taxes.innerHTML = StaffData[n].taxes;
    S_totalsalaries.innerHTML = StaffData[n].totalsalaries;
}
// update
let recode = document.querySelector('#recode');
let rename = document.querySelector('#rename');
let rejob = document.querySelector('#rejob');
let resalaries = document.querySelector('#resalaries');
let recommission = document.querySelector('#recommission');
let reinsurance = document.querySelector('#reinsurance');
let retaxes = document.querySelector('#retaxes');
let retotalsalaries = document.querySelector('#retotalsalaries');
let tmp;

function updateData(n){
    recode.value = StaffData[n].code;
    rename.value = StaffData[n].name;
    rejob.value = StaffData[n].job;
    resalaries.value = StaffData[n].salaries;
    recommission.value = StaffData[n].commission;
    reinsurance.value = StaffData[n].insurance;
    retaxes.value = StaffData[n].taxes;
    retotalsalaries.value = StaffData[n].totalsalaries;
    tmp = n;
}
function getsalaries(){
    retotalsalaries.value = +(+resalaries.value +  +recommission.value) - +(+reinsurance.value + +retaxes.value);
}
// cleardata
function clearinput(){
    recode.value = '';
    rename.value = '';
    rejob.value = '';
    resalaries.value = '0';
    recommission.value = '0';
    reinsurance.value = '0';
    retaxes.value = '0';
    retotalsalaries.value = '';
}
// savedata
function saveData(tmp){
    StaffData[tmp].code = recode.value;
    StaffData[tmp].name = rename.value;
    StaffData[tmp].job = rejob.value;
    StaffData[tmp].salaries = resalaries.value;
    StaffData[tmp].commission = recommission.value;
    StaffData[tmp].insurance = reinsurance.value;
    StaffData[tmp].taxes = retaxes.value;
    getsalaries();
    StaffData[tmp].totalsalaries = retotalsalaries.value;
    ReadData();
    clearinput();
}
// deletedata
function deleteData(n){
    StaffData.splice(n,1);
    ReadData();
}
// export to xslx
function ExportToXLSX(type, fn, dl){
    var elt = document.getElementById('table');
    var wb = XLSX.utils.table_to_book(elt,{sheet: "sheet1"});
    return dl ?
    XLSX.write(wb, { bookType: type, bookSST: true, type: 'base64'}) :
    XLSX.writeFile(wb, fn || ('staff.' + (type || 'xls')));
}
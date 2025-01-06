let StaffData = [
	{
		image: '../img/staff/emad.png',
		code: '4152',
		firstName: 'عماد',
		lastName: 'ابراهيم عبدالعزيز ابراهيم ابوليلة',
		nationalID: 30905121701631,
		nameInSystem: 'emad abuoolila',
		job: 'manager ',
		recruitmentDate: '28/8/2024',
		directPresident: 'محمد عبد العاطي',
		address: 'شارع مزرعة الصاوي',
		center: 'اشمون',
		conservatism: 'المنوفية',
		salaries: 5000,
		branch: 'القاهرة'
	},
	{
		image: '../img/staff/emad.png',
		code: '5268',
		firstName: 'فهد الدين',
		lastName: 'عماد ابراهيم عبدالعزيز ابراهيم ابوليلة',
		nationalID: 30905121701631,
		nameInSystem: 'fahd abuoolila',
		job: 'sales ',
		recruitmentDate: '28/8/2024',
		directPresident: 'محمد عبد العاطي',
		address: 'شارع مزرعة الصاوي',
		center: 'اشمون',
		conservatism: 'المنوفية',
		salaries: 5000,
		branch: 'شرق الدلتا'
	},
	{
		image: '../img/staff/emad.png',
		code: '9723',
		firstName: 'محمد',
		lastName: 'ناجي محمد موسى عبدالمتجلي',
		nationalID: 30905121701631,
		nameInSystem: 'mohamed nagy',
		job: 'sales ',
		recruitmentDate: '28/8/2024',
		directPresident: 'محمد عبد العاطي',
		address: ' محلة سبك ',
		center: 'اشمون',
		conservatism: 'المنوفية',
		salaries: 5000,
		branch: 'جنوب الدلتا'
	},
];
document.getElementById('User_Name_Show').innerHTML = localStorage.getItem('name');
function ReadData() {
	let data = ``;
	for (let i = 0; i < StaffData.length; i++) {
    let getName = StaffData[i].firstName + ' ' + StaffData[i].lastName;
		data += `
            <tr>
                <td>${i + 1}</td>
                <td>${StaffData[i].code}</td>
                <td>${getName}</td>
                <td>${StaffData[i].nameInSystem}</td>
                <td>${StaffData[i].job}</td>
                <td>
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false" style="padding: 0 !important; height: 35px; width: 55px;">
                            <svg class="svg-inline--fa fa-gear p-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="gear" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M495.9 166.6c3.2 8.7 .5 18.4-6.4 24.6l-43.3 39.4c1.1 8.3 1.7 16.8 1.7 25.4s-.6 17.1-1.7 25.4l43.3 39.4c6.9 6.2 9.6 15.9 6.4 24.6c-4.4 11.9-9.7 23.3-15.8 34.3l-4.7 8.1c-6.6 11-14 21.4-22.1 31.2c-5.9 7.2-15.7 9.6-24.5 6.8l-55.7-17.7c-13.4 10.3-28.2 18.9-44 25.4l-12.5 57.1c-2 9.1-9 16.3-18.2 17.8c-13.8 2.3-28 3.5-42.5 3.5s-28.7-1.2-42.5-3.5c-9.2-1.5-16.2-8.7-18.2-17.8l-12.5-57.1c-15.8-6.5-30.6-15.1-44-25.4L83.1 425.9c-8.8 2.8-18.6 .3-24.5-6.8c-8.1-9.8-15.5-20.2-22.1-31.2l-4.7-8.1c-6.1-11-11.4-22.4-15.8-34.3c-3.2-8.7-.5-18.4 6.4-24.6l43.3-39.4C64.6 273.1 64 264.6 64 256s.6-17.1 1.7-25.4L22.4 191.2c-6.9-6.2-9.6-15.9-6.4-24.6c4.4-11.9 9.7-23.3 15.8-34.3l4.7-8.1c6.6-11 14-21.4 22.1-31.2c5.9-7.2 15.7-9.6 24.5-6.8l55.7 17.7c13.4-10.3 28.2-18.9 44-25.4l12.5-57.1c2-9.1 9-16.3 18.2-17.8C227.3 1.2 241.5 0 256 0s28.7 1.2 42.5 3.5c9.2 1.5 16.2 8.7 18.2 17.8l12.5 57.1c15.8 6.5 30.6 15.1 44 25.4l55.7-17.7c8.8-2.8 18.6-.3 24.5 6.8c8.1 9.8 15.5 20.2 22.1 31.2l4.7 8.1c6.1 11 11.4 22.4 15.8 34.3zM256 336a80 80 0 1 0 0-160 80 80 0 1 0 0 160z"></path></svg><!-- <i class="fa fa-cog p-1"></i> Font Awesome fontawesome.com -->
                        </button>
                        <div class="dropdown-menu" style="position: absolute; transform: translate3d(2px, 35px, 0px); top: 0px; left: 0px; will-change: transform;" x-placement="bottom-start">
                            <button class="btn btn-primary my-2" onclick="updateData(${i})" data-toggle="modal" data-target="#editdata">تعديل</button>
                            <button class="btn btn-danger my-2" onclick="deleteData(${i})" id="delete">الحذف</button>
                        </div>
                    </div>
                </td>
            </tr>
        `;
	}
	document.querySelector('#body-data').innerHTML = data;
}
ReadData();

// update
let reimg = document.querySelector('#img');
let recode = document.querySelector('#recode');
let refirstname = document.querySelector('#refirstname');
let relastname = document.querySelector('#relastname');
let renationalID = document.querySelector('#renationalID');
let renameInSystem = document.querySelector('#renameInSystem');
let rejob = document.querySelector('#rejob');
let reRecruitmentDate = document.querySelector('#reRecruitmentDate');
let redirectPresident = document.querySelector('#redirectPresident');
let readdress = document.querySelector('#readdress');
let recenter = document.querySelector('#recenter');
let reconservatism = document.querySelector('#reconservatism');
let resalaries = document.querySelector('#resalaries');
let rebranch = document.querySelector('#rebranch');
let showdataTitle = document.querySelector('#showdataTitle');
let save = document.querySelector('#save');
let upload = document.querySelector('#uploadImg');
let searchInput = document.querySelector('#searchInput');
let searchItems = document.querySelector('#search_items');
let tmp;
let mood = 'create';
let searchMood = 'name';

// search 
function getsearchMood(value){
    if(value == 'name'){
        searchMood = 'name';
        searchInput.placeholder = 'البحث بالأسم';
    }else if(value == 'code'){
        searchMood = 'code';
        searchInput.placeholder = 'البحث بالمعرف';
    }else if(value == 'nameInSystem'){
        searchMood = 'nameInSystem';
        searchInput.placeholder = 'البحث بالأسم على النظام';
    }else{
        searchMood = 'branch';
        searchInput.placeholder = 'البحث بالفرع';
    }
}
function searchOperation(value){
    let data = ``;
    if(searchMood === 'name'){
        for(i=0; i < StaffData.length; i++){
            let getName = StaffData[i].firstName + ' ' + StaffData[i].lastName;
            if(getName && getName.includes(value)){
                data += `
                    <tr>
                        <td>${i + 1}</td>
                        <td>${StaffData[i].code}</td>
                        <td>${getName}</td>
                        <td>${StaffData[i].nameInSystem}</td>
                        <td>${StaffData[i].job}</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false" style="padding: 0 !important; height: 35px; width: 55px;">
                                    <svg class="svg-inline--fa fa-gear p-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="gear" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M495.9 166.6c3.2 8.7 .5 18.4-6.4 24.6l-43.3 39.4c1.1 8.3 1.7 16.8 1.7 25.4s-.6 17.1-1.7 25.4l43.3 39.4c6.9 6.2 9.6 15.9 6.4 24.6c-4.4 11.9-9.7 23.3-15.8 34.3l-4.7 8.1c-6.6 11-14 21.4-22.1 31.2c-5.9 7.2-15.7 9.6-24.5 6.8l-55.7-17.7c-13.4 10.3-28.2 18.9-44 25.4l-12.5 57.1c-2 9.1-9 16.3-18.2 17.8c-13.8 2.3-28 3.5-42.5 3.5s-28.7-1.2-42.5-3.5c-9.2-1.5-16.2-8.7-18.2-17.8l-12.5-57.1c-15.8-6.5-30.6-15.1-44-25.4L83.1 425.9c-8.8 2.8-18.6 .3-24.5-6.8c-8.1-9.8-15.5-20.2-22.1-31.2l-4.7-8.1c-6.1-11-11.4-22.4-15.8-34.3c-3.2-8.7-.5-18.4 6.4-24.6l43.3-39.4C64.6 273.1 64 264.6 64 256s.6-17.1 1.7-25.4L22.4 191.2c-6.9-6.2-9.6-15.9-6.4-24.6c4.4-11.9 9.7-23.3 15.8-34.3l4.7-8.1c6.6-11 14-21.4 22.1-31.2c5.9-7.2 15.7-9.6 24.5-6.8l55.7 17.7c13.4-10.3 28.2-18.9 44-25.4l12.5-57.1c2-9.1 9-16.3 18.2-17.8C227.3 1.2 241.5 0 256 0s28.7 1.2 42.5 3.5c9.2 1.5 16.2 8.7 18.2 17.8l12.5 57.1c15.8 6.5 30.6 15.1 44 25.4l55.7-17.7c8.8-2.8 18.6-.3 24.5 6.8c8.1 9.8 15.5 20.2 22.1 31.2l4.7 8.1c6.1 11 11.4 22.4 15.8 34.3zM256 336a80 80 0 1 0 0-160 80 80 0 1 0 0 160z"></path></svg><!-- <i class="fa fa-cog p-1"></i> Font Awesome fontawesome.com -->
                                </button>
                                <div class="dropdown-menu" style="position: absolute; transform: translate3d(2px, 35px, 0px); top: 0px; left: 0px; will-change: transform;" x-placement="bottom-start">
                                    <button class="btn btn-primary my-2" onclick="updateData(${i})" data-toggle="modal" data-target="#editdata">تعديل</button>
                                    <button class="btn btn-danger my-2" onclick="deleteData(${i})" id="delete">الحذف</button>
                                </div>
                            </div>
                        </td>
                    </tr>
                `;
            }
        }
    }else if(searchMood === 'code'){
        for(i=0; i < StaffData.length; i++){
            let getName = StaffData[i].firstName + ' ' + StaffData[i].lastName;
            if(StaffData[i].code.includes(value)){
                data += `
                    <tr>
                        <td>${i + 1}</td>
                        <td>${StaffData[i].code}</td>
                        <td>${getName}</td>
                        <td>${StaffData[i].nameInSystem}</td>
                        <td>${StaffData[i].job}</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false" style="padding: 0 !important; height: 35px; width: 55px;">
                                    <svg class="svg-inline--fa fa-gear p-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="gear" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M495.9 166.6c3.2 8.7 .5 18.4-6.4 24.6l-43.3 39.4c1.1 8.3 1.7 16.8 1.7 25.4s-.6 17.1-1.7 25.4l43.3 39.4c6.9 6.2 9.6 15.9 6.4 24.6c-4.4 11.9-9.7 23.3-15.8 34.3l-4.7 8.1c-6.6 11-14 21.4-22.1 31.2c-5.9 7.2-15.7 9.6-24.5 6.8l-55.7-17.7c-13.4 10.3-28.2 18.9-44 25.4l-12.5 57.1c-2 9.1-9 16.3-18.2 17.8c-13.8 2.3-28 3.5-42.5 3.5s-28.7-1.2-42.5-3.5c-9.2-1.5-16.2-8.7-18.2-17.8l-12.5-57.1c-15.8-6.5-30.6-15.1-44-25.4L83.1 425.9c-8.8 2.8-18.6 .3-24.5-6.8c-8.1-9.8-15.5-20.2-22.1-31.2l-4.7-8.1c-6.1-11-11.4-22.4-15.8-34.3c-3.2-8.7-.5-18.4 6.4-24.6l43.3-39.4C64.6 273.1 64 264.6 64 256s.6-17.1 1.7-25.4L22.4 191.2c-6.9-6.2-9.6-15.9-6.4-24.6c4.4-11.9 9.7-23.3 15.8-34.3l4.7-8.1c6.6-11 14-21.4 22.1-31.2c5.9-7.2 15.7-9.6 24.5-6.8l55.7 17.7c13.4-10.3 28.2-18.9 44-25.4l12.5-57.1c2-9.1 9-16.3 18.2-17.8C227.3 1.2 241.5 0 256 0s28.7 1.2 42.5 3.5c9.2 1.5 16.2 8.7 18.2 17.8l12.5 57.1c15.8 6.5 30.6 15.1 44 25.4l55.7-17.7c8.8-2.8 18.6-.3 24.5 6.8c8.1 9.8 15.5 20.2 22.1 31.2l4.7 8.1c6.1 11 11.4 22.4 15.8 34.3zM256 336a80 80 0 1 0 0-160 80 80 0 1 0 0 160z"></path></svg><!-- <i class="fa fa-cog p-1"></i> Font Awesome fontawesome.com -->
                                </button>
                                <div class="dropdown-menu" style="position: absolute; transform: translate3d(2px, 35px, 0px); top: 0px; left: 0px; will-change: transform;" x-placement="bottom-start">
                                    <button class="btn btn-primary my-2" onclick="updateData(${i})" data-toggle="modal" data-target="#editdata">تعديل</button>
                                    <button class="btn btn-danger my-2" onclick="deleteData(${i})" id="delete">الحذف</button>
                                </div>
                            </div>
                        </td>
                    </tr>
                `;
            }
        }
    }else if(searchMood === 'nameInSystem'){
        for(i=0; i < StaffData.length; i++){
            let getName = StaffData[i].firstName + ' ' + StaffData[i].lastName;
            if(StaffData[i].nameInSystem.includes(value)){
                data += `
                    <tr>
                        <td>${i + 1}</td>
                        <td>${StaffData[i].code}</td>
                        <td>${getName}</td>
                        <td>${StaffData[i].nameInSystem}</td>
                        <td>${StaffData[i].job}</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false" style="padding: 0 !important; height: 35px; width: 55px;">
                                    <svg class="svg-inline--fa fa-gear p-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="gear" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M495.9 166.6c3.2 8.7 .5 18.4-6.4 24.6l-43.3 39.4c1.1 8.3 1.7 16.8 1.7 25.4s-.6 17.1-1.7 25.4l43.3 39.4c6.9 6.2 9.6 15.9 6.4 24.6c-4.4 11.9-9.7 23.3-15.8 34.3l-4.7 8.1c-6.6 11-14 21.4-22.1 31.2c-5.9 7.2-15.7 9.6-24.5 6.8l-55.7-17.7c-13.4 10.3-28.2 18.9-44 25.4l-12.5 57.1c-2 9.1-9 16.3-18.2 17.8c-13.8 2.3-28 3.5-42.5 3.5s-28.7-1.2-42.5-3.5c-9.2-1.5-16.2-8.7-18.2-17.8l-12.5-57.1c-15.8-6.5-30.6-15.1-44-25.4L83.1 425.9c-8.8 2.8-18.6 .3-24.5-6.8c-8.1-9.8-15.5-20.2-22.1-31.2l-4.7-8.1c-6.1-11-11.4-22.4-15.8-34.3c-3.2-8.7-.5-18.4 6.4-24.6l43.3-39.4C64.6 273.1 64 264.6 64 256s.6-17.1 1.7-25.4L22.4 191.2c-6.9-6.2-9.6-15.9-6.4-24.6c4.4-11.9 9.7-23.3 15.8-34.3l4.7-8.1c6.6-11 14-21.4 22.1-31.2c5.9-7.2 15.7-9.6 24.5-6.8l55.7 17.7c13.4-10.3 28.2-18.9 44-25.4l12.5-57.1c2-9.1 9-16.3 18.2-17.8C227.3 1.2 241.5 0 256 0s28.7 1.2 42.5 3.5c9.2 1.5 16.2 8.7 18.2 17.8l12.5 57.1c15.8 6.5 30.6 15.1 44 25.4l55.7-17.7c8.8-2.8 18.6-.3 24.5 6.8c8.1 9.8 15.5 20.2 22.1 31.2l4.7 8.1c6.1 11 11.4 22.4 15.8 34.3zM256 336a80 80 0 1 0 0-160 80 80 0 1 0 0 160z"></path></svg><!-- <i class="fa fa-cog p-1"></i> Font Awesome fontawesome.com -->
                                </button>
                                <div class="dropdown-menu" style="position: absolute; transform: translate3d(2px, 35px, 0px); top: 0px; left: 0px; will-change: transform;" x-placement="bottom-start">
                                    <button class="btn btn-primary my-2" onclick="updateData(${i})" data-toggle="modal" data-target="#editdata">تعديل</button>
                                    <button class="btn btn-danger my-2" onclick="deleteData(${i})" id="delete">الحذف</button>
                                </div>
                            </div>
                        </td>
                    </tr>
                `;
            }
        }
    }
	document.querySelector('#body-data').innerHTML = data;
}
// savedata
function saveData(tmp) {
	reimg.style.display = 'none';
	if (
		(reimg.src != '',
		recode.value != '',
		refirstname.value != '',
		relastname.value != '',
		renationalID.value != '',
		renameInSystem.value != '',
		rejob.value != '',
		reRecruitmentDate.value != '',
		redirectPresident.value != '',
		readdress.value != '',
		recenter.value != '',
		reconservatism.value != '',
		parseFloat(resalaries.value) != '',
		rebranch.value != '')
	) {
		if (mood === 'create') {
			StaffData[StaffData.length] = {
				image: reimg.src,
				code: recode.value,
				firstName: refirstname.value,
				lastName: relastname.value,
				nationalID: renationalID.value,
				nameInSystem: renameInSystem.value,
				job: rejob.value,
				recruitmentDate: reRecruitmentDate.value,
				directPresident: redirectPresident.value,
				address: readdress.value,
				center: recenter.value,
				conservatism: reconservatism.value,
				salaries: parseFloat(resalaries.value),
				branch: rebranch.value
			};
		} else {
			StaffData[tmp].image = reimg.src;
			StaffData[tmp].code = recode.value;
			StaffData[tmp].firstName = refirstname.value;
			StaffData[tmp].lastName = relastname.value;
			StaffData[tmp].nationalID = renationalID.value;
			StaffData[tmp].nameInSystem = renameInSystem.value;
			StaffData[tmp].job = rejob.value;
			StaffData[tmp].recruitmentDate = reRecruitmentDate.value;
			StaffData[tmp].directPresident = redirectPresident.value;
			StaffData[tmp].address = readdress.value;
			StaffData[tmp].center = recenter.value;
			StaffData[tmp].conservatism = reconservatism.value;
			StaffData[tmp].salaries = parseFloat(resalaries.value);
			StaffData[tmp].branch = rebranch.value;
		}
		clearinput();
		ReadData();
	} else {
		alert('الحقول فارغة');
	}
}
// updateData
function updateData(i) {
	reimg.style.display = 'block';
	reimg.src = StaffData[i].image;
	recode.value = StaffData[i].code;
	refirstname.value = StaffData[i].firstName;
	relastname.value = StaffData[i].lastName;
	renationalID.value = StaffData[i].nationalID;
	renameInSystem.value = StaffData[i].nameInSystem;
	rejob.value = StaffData[i].job;
	reRecruitmentDate.value = StaffData[i].recruitmentDate;
	redirectPresident.value = StaffData[i].directPresident;
	readdress.value = StaffData[i].address;
	recenter.value = StaffData[i].center;
	reconservatism.value = StaffData[i].conservatism;
	resalaries.value = StaffData[i].salaries;
	rebranch.value = StaffData[i].branch;
	save.innerHTML = 'إعادة تسجيل العنصر';
	showdataTitle.innerHTML = 'تعديل العنصر' + `<span>${i + 1}</span>`;
	mood = 'update';
	tmp = i;
}
// upload
upload.onchange = function() {
	reimg.style.display = 'block';
	let file = new FileReader();
	file.readAsDataURL(upload.files[0]);
	file.onload = function() {
		reimg.src = file.result;
	};
};
// cleardata
function clearinput() {
	recode.value = '';
	refirstname.value = '';
	relastname.value = '';
	renationalID.value = '';
	renameInSystem.value = '';
	rejob.value = '';
	reRecruitmentDate.value = '';
	redirectPresident.value = '';
	readdress.value = '';
	recenter.value = '';
	reconservatism.value = '';
	resalaries.value = '';
	rebranch.value = '';
	reimg.src = '';
	save.innerHTML = 'تسجيل';
	showdataTitle.innerHTML = 'إنشاء عنصر';
	mood = 'create';
}
// deletedata
function deleteData(i) {
	StaffData.splice(i, 1);
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
/*
    
*/
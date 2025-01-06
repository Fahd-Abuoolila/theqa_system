let invoices = [
    {
        code: '42563',
        service: "كروت فودافون",
        user: "سوبرماركت ",
        amount: "11.50",
        totalamount: "12",
        m_co: '1.23',
        p_id: '147258369210',
        date: '20/8/2024',
    },
    {
        code: '42563',
        service: "كروت فودافون",
        user: "سوبرماركت ",
        amount: "11.50",
        totalamount: "12",
        m_co: '1.23',
        p_id: '147258369210',
        date: '20/8/2024',
    },
    {
        code: '42563',
        service: "كروت فودافون",
        user: "سوبرماركت ",
        amount: "11.50",
        totalamount: "12",
        m_co: '1.23',
        p_id: '147258369210',
        date: '20/8/2024',
    },
    {
        code: '42563',
        service: "كروت فودافون",
        user: "سوبرماركت ",
        amount: "11.50",
        totalamount: "12",
        m_co: '1.23',
        p_id: '147258369210',
        date: '20/8/2024',
    },
    {
        code: '42563',
        service: "كروت فودافون",
        user: "سوبرماركت ",
        amount: "11.50",
        totalamount: "12",
        m_co: '1.23',
        p_id: '147258369210',
        date: '20/8/2024',
    },
    {
        code: '42563',
        service: "كروت فودافون",
        user: "سوبرماركت ",
        amount: "11.50",
        totalamount: "12",
        m_co: '1.23',
        p_id: '147258369210',
        date: '20/8/2024',
    },
    {
        code: '42563',
        service: "كروت فودافون",
        user: "سوبرماركت ",
        amount: "11.50",
        totalamount: "12",
        m_co: '1.23',
        p_id: '147258369210',
        date: '20/8/2024',
    },
    {
        code: '42563',
        service: "كروت فودافون",
        user: "سوبرماركت ",
        amount: "11.50",
        totalamount: "12",
        m_co: '1.23',
        p_id: '147258369210',
        date: '20/8/2024',
    },
    {
        code: '42563',
        service: "كروت فودافون",
        user: "سوبرماركت ",
        amount: "11.50",
        totalamount: "12",
        m_co: '1.23',
        p_id: '147258369210',
        date: '20/8/2024',
    },
    {
        code: '42563',
        service: "كروت فودافون",
        user: "سوبرماركت ",
        amount: "11.50",
        totalamount: "12",
        m_co: '1.23',
        p_id: '147258369210',
        date: '20/8/2024',
    },
];


let recode = document.querySelector('#recode');
let reservice = document.querySelector('#reservice');
let reuser = document.querySelector('#reuser');
let reamount = document.querySelector('#reamount');
let retotalamount = document.querySelector('#retotalamount');
let rem_co = document.querySelector('#rem_co');
let rep_id = document.querySelector('#rep_id');
let redate = document.querySelector('#redate');
let showdataTitle = document.querySelector('#showdataTitle');
let save = document.querySelector('#save');
let upload = document.querySelector('#uploadImg');
let searchInput = document.querySelector('#searchInput');
let searchItems = document.querySelector('#search_items');
let tmp;
let mood = 'create';
let searchMood = 'code';

// search 
function getsearchMood(value){
    if(value == 'code'){
        searchMood = 'code';
        searchInput.placeholder = 'البحث بالمعرف';
    }else if(value == 'user'){
        searchMood = 'user';
        searchInput.placeholder = 'البحث بالمستخدم';
    }else if(value == 'service'){
        searchMood = 'service';
        searchInput.placeholder = 'البحث بالخدمة';
    }else{
        searchMood = 'p_id';
        searchInput.placeholder = 'البحث P.ID';
    }
}
function searchOperation(value){
    let data = ``;
    if(searchMood === 'code'){
        for(let i = 0;i < invoices.length; i++){
            if(invoices[i].code.includes(value)){
                data += `
                    <tr>
                        <td>${i+1}</td>
                        <td>${invoices[i].code}</td>
                        <td>${invoices[i].service}</td>
                        <td>${invoices[i].user}</td>
                        <td>
                            ${invoices[i].amount}
                            <span>ج.م</span>
                        </td>
                        <td>
                            ${invoices[i].totalamount}
                            <span>ج.م</span>
                        </td>
                        <td>${invoices[i].m_co}</td>
                        <td>${invoices[i].p_id}</td>
                        <td>${invoices[i].date}</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false" style="padding: 0 !important; height: 35px; width: 55px;">
                                    <i class="fa fa-cog p-1"></i>
                                </button>
                                <div class="dropdown-menu" style="">
                                    <button class="btn btn-primary my-2" onclick="updateData(${i})" data-toggle="modal" data-target="#editdata">تعديل</button>
                                    <button class="btn btn-danger my-2" onclick="deleteData(${i})" id="delete">الحذف</button>
                                </div>
                            </div>
                        </td>
                    </tr>
                `
            }
            
        }
    }else if(searchMood === 'user'){
        for(let i = 0;i < invoices.length; i++){
            if(invoices[i].user.includes(value)){
                data += `
                    <tr>
                        <td>${i+1}</td>
                        <td>${invoices[i].code}</td>
                        <td>${invoices[i].service}</td>
                        <td>${invoices[i].user}</td>
                        <td>
                            ${invoices[i].amount}
                            <span>ج.م</span>
                        </td>
                        <td>
                            ${invoices[i].totalamount}
                            <span>ج.م</span>
                        </td>
                        <td>${invoices[i].m_co}</td>
                        <td>${invoices[i].p_id}</td>
                        <td>${invoices[i].date}</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false" style="padding: 0 !important; height: 35px; width: 55px;">
                                    <i class="fa fa-cog p-1"></i>
                                </button>
                                <div class="dropdown-menu" style="">
                                    <button class="btn btn-primary my-2" onclick="updateData(${i})" data-toggle="modal" data-target="#editdata">تعديل</button>
                                    <button class="btn btn-danger my-2" onclick="deleteData(${i})" id="delete">الحذف</button>
                                </div>
                            </div>
                        </td>
                    </tr>
                `
            }
        }
    }else if(searchMood === 'service'){
        for(let i = 0;i < invoices.length; i++){
            if(invoices[i].service.includes(value)){
                data += `
                    <tr>
                        <td>${i+1}</td>
                        <td>${invoices[i].code}</td>
                        <td>${invoices[i].service}</td>
                        <td>${invoices[i].user}</td>
                        <td>
                            ${invoices[i].amount}
                            <span>ج.م</span>
                        </td>
                        <td>
                            ${invoices[i].totalamount}
                            <span>ج.م</span>
                        </td>
                        <td>${invoices[i].m_co}</td>
                        <td>${invoices[i].p_id}</td>
                        <td>${invoices[i].date}</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false" style="padding: 0 !important; height: 35px; width: 55px;">
                                    <i class="fa fa-cog p-1"></i>
                                </button>
                                <div class="dropdown-menu" style="">
                                    <button class="btn btn-primary my-2" onclick="updateData(${i})" data-toggle="modal" data-target="#editdata">تعديل</button>
                                    <button class="btn btn-danger my-2" onclick="deleteData(${i})" id="delete">الحذف</button>
                                </div>
                            </div>
                        </td>
                    </tr>
                `
            }
        }
    }else if(searchMood === 'p_id'){
        for(let i = 0;i < invoices.length; i++){
            if(invoices[i].p_id.includes(value)){
                data += `
                    <tr>
                        <td>${i+1}</td>
                        <td>${invoices[i].code}</td>
                        <td>${invoices[i].service}</td>
                        <td>${invoices[i].user}</td>
                        <td>
                            ${invoices[i].amount}
                            <span>ج.م</span>
                        </td>
                        <td>
                            ${invoices[i].totalamount}
                            <span>ج.م</span>
                        </td>
                        <td>${invoices[i].m_co}</td>
                        <td>${invoices[i].p_id}</td>
                        <td>${invoices[i].date}</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false" style="padding: 0 !important; height: 35px; width: 55px;">
                                    <i class="fa fa-cog p-1"></i>
                                </button>
                                <div class="dropdown-menu" style="">
                                    <button class="btn btn-primary my-2" onclick="updateData(${i})" data-toggle="modal" data-target="#editdata">تعديل</button>
                                    <button class="btn btn-danger my-2" onclick="deleteData(${i})" id="delete">الحذف</button>
                                </div>
                            </div>
                        </td>
                    </tr>
                `
            }
        }
    }
	document.querySelector('#body-data').innerHTML = data;
}
// savedata
function saveData(tmp) {
	if (
		(recode.value != '',
        reservice.value != '',
        reuser.value != '',
        reamount.value != '',
        retotalamount.value != '',
        rem_co.value != '',
        rep_id.value != '',
        redate.value != '')
	) {
		if (mood === 'create') {
			invoices[invoices.length] = {
				code: recode.value,
				service: reservice.value,
				user: reuser.value,
				amount: reamount.value,
				totalamount: retotalamount.value,
				m_co: rem_co.value,
				p_id: rep_id.value,
				date: redate.value
			};
		} else {
			invoices[tmp].code = recode.value;
			invoices[tmp].service = reservice.value;
			invoices[tmp].user = reuser.value;
			invoices[tmp].amount = reamount.value;
			invoices[tmp].totalamount = retotalamount.value;
			invoices[tmp].m_co = rem_co.value;
			invoices[tmp].p_id = rep_id.value;
			invoices[tmp].date = redate.value;
		}
		clearinput();
		ReadData();
	} else {
		alert('الحقول فارغة');
	}
}
// updateData
function updateData(i) {
    recode.value = invoices[i].code;
    reservice.value = invoices[i].service;
    reuser.value = invoices[i].user;
    reamount.value = invoices[i].amount;
    retotalamount.value = invoices[i].totalamount;
    rem_co.value = invoices[i].m_co;
    rep_id.value = invoices[i].p_id;
    redate.value = invoices[i].date;
	save.innerHTML = 'إعادة تسجيل العنصر';
	showdataTitle.innerHTML = 'تعديل العنصر' + `<span>${i + 1}</span>`;
	mood = 'update';
	tmp = i;
}
// cleardata
function clearinput() {
	recode.value = '';
    reservice.value = '';
    reuser.value = '';
    reamount.value = '';
    retotalamount.value = '';
    rem_co.value = '';
    rep_id.value = '';
    redate.value = '';
	save.innerHTML = 'تسجيل';
	showdataTitle.innerHTML = 'إنشاء عنصر';
	mood = 'create';
}
// deletedata
function deleteData(i) {
	invoices.splice(i,1);
    ReadData();
}
// export to xslx
function ExportToXLSX(type, fn, dl){
	var table = document.getElementById('table');
	var wb = XLSX.utils.table_to_book(table, { sheet: 'sheet1' });
	return dl
		? XLSX.write(wb, { bookType: type, bookSST: true, type: 'base64' })
		: XLSX.writeFile(wb, fn || 'invoice.' + (type || 'xls'));
}
// export to pdf
function ExportToPDF() {
	var table = document.getElementById('table');
	var opt = {
		margin: 1,
		filename: 'invoice.pdf',
		image: { type: 'jpeg', quality: 0.98 },
		html2canvas: { scale: 2 },
		jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
	};
	pdf(table, opt);
}

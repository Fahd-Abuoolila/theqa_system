

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
				name: "emad.abuoolila",
				email: "emad.abuoolila@gmail.com",
				password: "emad"
			},
			{
				name: "ziad.abuoolila",
				email: "ziad.abuoolila@gmail.com",
				password: "ziad"
			},
			{
				name: "body.abuoolila",
				email: "body.abuoolila@gmail.com",
				password: "body"
			},
			{
				name: "diab.abuoolila",
				email: "diab.abuoolila@gmail.com",
				password: "diab"
			},
		];
		for (let n = 0; n < users.length; n++) {
			data += `
				<tr>
					<td>${n+1}</td>
					<td>${users[n].name}</td>
					<td>${users[n].email}</td>
					<td>${users[n].password}</td>
					<td>${users[n].edit}</td>
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
            
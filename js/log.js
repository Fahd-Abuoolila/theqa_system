// const admin = {
//     name: "fahd.abuoolila",
//     email: "fahd.abuoolila@gmail.com",
//     password: "fahd"
// };
// let users = [
//     {
//         name: "emad.abuoolila",
//         email: "emad.abuoolila@gmail.com",
//         password: "emad"
//     },
//     {
//         name: "ziad.abuoolila",
//         email: "ziad.abuoolila@gmail.com",
//         password: "ziad"
//     },
//     {
//         name: "body.abuoolila",
//         email: "body.abuoolila@gmail.com",
//         password: "body"
//     },
//     {
//         name: "diab.abuoolila",
//         email: "diab.abuoolila@gmail.com",
//         password: "diab"
//     },
// ];

let user_name = document.getElementById('user_name');
let user_password = document.getElementById('user_password');
let submit = document.getElementById('submit');

submit.addEventListener('click', function(a){
    // a.preventDefault();
    if(user_name.value.trim() === ""){
        window.alert('حقل الاسم فارغ');
    }else if(user_password.value.trim() === ""){
        window.alert('حقل كلمة المرور فارغ');
    }else{
        function check(){
            if(user_name.value.trim() === admin.name && user_password.value.trim() === admin.password){
                setTimeout( () => {
                    window.location.replace('../ar/index.html');
                }, 1500);
                localStorage.setItem('name', user_name.value);
            }else{
                for(let n = 0; n < users.length; n++){
                    if(user_name.value.trim() === users[n].name && user_password.value.trim() === users[n].password){
                        setTimeout( () => {
                            window.location.replace('../ar/index.html');
                        }, 1500);
                        localStorage.setItem('name', user_name.value);
                    }
                }
            }
        }
        check();
    }
});

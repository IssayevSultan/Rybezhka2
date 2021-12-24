document.getElementById('main-form').addEventListener("submit", checkForm);
function checkForm(event) {
    event.preventDefault();
    var el = document.getElementById('main-form');
    var name = el.usern.value;
    var email = el.usere.value;
    var phone = el.userp.value;
    var mess = el.userm.value;
    var fail = true;
    if (name == "" || email == "" || phone == "" || mess ==""){
        document.getElementById('errors').innerHTML = "<p> Не все поля заполнены!</p>";
        fail = false;
    }
    if (email.indexOf('@') === -1){
        document.getElementById('errors').innerHTML += "<p> Нет символа @! </p>";
        fail = false;
    }
    if (mess.length <= 50 || mess.length > 400){
        document.getElementById('errors').innerHTML += "<p> Мало информаций!</p>";
        fail = false;
    }
    if (fail == true){
        document.getElementById('comment').innerHTML += `<div style="padding: 30px; border: 1px solid black; margin: 2px"> 
        Почта: ${email} <br>  
        Имя: ${name} <br> 
        Телефон: ${phone} <br> 
        Комментарий: ${mess} <br> 
        </div>`;
        el.usern.value = "";
        el.usern.style.border = "5px solid green";
        el.usere.value = "";
        el.usere.style.border = "5px solid green";
        el.userp.value = "";
        el.userp.style.border = "5px solid green";
        el.userm.value = "";
        el.userm.style.border = "5px solid green";
        document.getElementById('btn').value = "Готово!";
    }

    return fail
}
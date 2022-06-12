document.getElementById('check').onclick = function() {
    let login = document.getElementById('login').value;
    let password = document.getElementById('password').value;

    if (login == 'Admin' && password == '12345')
        window.location="home.html";
    else alert('Неправильний логіч чи пароль');
}

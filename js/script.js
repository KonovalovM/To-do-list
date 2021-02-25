    //Enter form
btnEnter.onclick = function () {
        enterForm.style.display = "block";
    }

enterCloseBtn.onclick = function () {
        enterForm.style.display = "none";
    }

btnregistration.onclick = function () {
        registrationForm.style.display = "block";
        enterForm.style.display = "none";
    }

    //Registration form
registrationCloseBtn.onclick = function () {
    registrationForm.style.display = "none";
    }


btnSignUp.onclick = function () {
    if (!(pas[0].value == pas[1].value)) {
        alert("Паролі не співпадають!");
    }
    if (pas[0].value, pas[1].value, email[0].value == "") {
        alert("Введіть пароль/email")
    }
    if ((pas[0].value == pas[1].value)) {
        alert("Вітаємо Вас зареєстровано!");
        registrationForm.style.display = "none";
        }    
}

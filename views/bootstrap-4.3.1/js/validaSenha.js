let password = document.getElementById("senha");
let confirm_password = document.getElementById("confirma_senha");

function validatePassword(){
    if(password.value != confirm_password.value) {
        confirm_password.setCustomValidity("As senhas estão diferentes!");
    } else {
        confirm_password.setCustomValidity('');
    }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
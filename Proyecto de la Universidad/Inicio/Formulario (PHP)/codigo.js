const container = document.querySelector('.container');
const registerBtn = document.querySelector('.register-btn');
const loginBtn = document.querySelector('.login-btn');

registerBtn.addEventListener('click', () => {
    container.classList.add('active')
}); 

loginBtn.addEventListener('click', () => {
    container.classList.remove('active')
}); 


const password = document.getElementsByName('password');
const passwordConfirm = document.getElementsByName('passwordConfirm');

function checkPasswords() {
    if (password.value === passwordConfirm.value && password.value !== "") {
      // Cuando las contraseñas coinciden
      password.style.border = '1px solid #00c83c';
      passwordConfirm.style.border = '1px solid #00c83c';
    } else {
      // Cuando no coinciden
      password.style.border = '1px solid #f31111';
      passwordConfirm.style.border = '1px solid #f31111';
    }
  }

  // Añadimos los eventos para que se verifique en tiempo real
  password.addEventListener('input', checkPasswords);
  passwordConfirm.addEventListener('input', checkPasswords);
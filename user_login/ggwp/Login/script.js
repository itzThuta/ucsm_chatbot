const regBtn = document.getElementById('register');
const container = document.getElementById('container');
const loginBtn = document.getElementById('login');

regBtn.addEventListener('click', () => {
    container.classList.add("active");
});

loginBtn.addEventListener('click', () => {
    container.classList.remove("active");
});
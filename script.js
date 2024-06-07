function redirecionar(url){
    window.location.href=url;
};

document.getElementById('togglePassword').addEventListener('click', function () {
    const passwordField = document.getElementById('senha');
    const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
    passwordField.setAttribute('type', type);
    this.classList.toggle('fa-eye-slash');
});

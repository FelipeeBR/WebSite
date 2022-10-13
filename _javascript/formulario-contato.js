

var email = document.getElementById('email');
var nome = document.getElementById('nome');
var msg = document.getElementById('tMsg');


email.addEventListener('focus', ()=> {
    email.style.borderColor = "rgb(12, 114, 197)";
});
email.addEventListener('blur', ()=> {
    email.style.borderColor = "#ccc";
});

nome.addEventListener('focus', ()=> {
    nome.style.borderColor = "rgb(12, 114, 197)";
});
nome.addEventListener('blur', ()=> {
    nome.style.borderColor = "#ccc";
});

msg.addEventListener('focus', ()=> {
    msg.style.borderColor = "rgb(12, 114, 197)";
});
msg.addEventListener('blur', ()=> {
    msg.style.borderColor = "#ccc";
});
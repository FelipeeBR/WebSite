
//bordas azuis dos inputs do formulário

var email = document.getElementById('email');
var nome = document.getElementById('nome');
var cidade = document.getElementById('cidade');
var telefone = document.getElementById('telefone');

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

cidade.addEventListener('focus', ()=> {
    cidade.style.borderColor = "rgb(12, 114, 197)";
});
cidade.addEventListener('blur', ()=> {
    cidade.style.borderColor = "#ccc";
});

telefone.addEventListener('focus', ()=> {
    telefone.style.borderColor = "rgb(12, 114, 197)";
});
telefone.addEventListener('blur', ()=> {
    telefone.style.borderColor = "#ccc";
});
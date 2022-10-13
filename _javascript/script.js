const imgs = document.getElementById("imag");
const img = document.querySelectorAll("#imag img");

let idc = 0;

function carrossel(){
    idc++;
    if(idc > img.length -1){
        idc = 0;
    }

    imgs.style.transform = `translateY(${-idc * 385}px)`;
}

setInterval(carrossel, 5800);
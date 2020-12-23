var miniature = document.querySelector(".miniature img");
var lb = document.getElementById("lightbox");
var quit = document.getElementById("quit");
var next = document.getElementById("next");
var previous = document.getElementById("previous");
var index = 0;
var diapos = document.querySelectorAll("#diaporama img");

miniature.addEventListener("click", function(e){
    lb.classList.add("active");
    diapos[index].classList.add("active");
});

next.addEventListener("click", function(){
    diapos[index].classList.remove("active");
    index += 1;
    if(index > (diapos.length - 1)){
        index = 0
    }
    diapos[index].classList.add("active");
});

previous.addEventListener("click", function(){
    diapos[index].classList.remove("active");
    index -= 1;
    if(index < 0){
        index = diapos.length - 1 ;
    }
    diapos[index].classList.add("active");
});

quit.addEventListener("click", function(){
    diapos[index].classList.remove("active");
    index = 0;
    lb.classList.remove("active");
});
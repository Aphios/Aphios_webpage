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
    next.addEventListener("click", slideForward);
    previous.addEventListener("click", slideBackward);
    quit.addEventListener("click", exit);
    document.addEventListener("keyup", handleKey);
});

function slideForward(){
    diapos[index].classList.remove("active");
    index += 1;
    if(index > (diapos.length - 1)){
        index = 0
    }
    diapos[index].classList.add("active");
}

function slideBackward(){
    diapos[index].classList.remove("active");
    index -= 1;
    if(index < 0){
        index = diapos.length -1;
    }
    diapos[index].classList.add("active");
}

function exit(){
    diapos[index].classList.remove("active");
    index = 0;
    next.removeEventListener("click", slideForward);
    previous.removeEventListener("click", slideBackward);
    quit.removeEventListener("click", exit);
    document.removeEventListener("keyup", handleKey);
    lb.classList.remove("active");
}

function handleKey(ev){
    if(ev.code === "ArrowRight"){
        slideForward();
    }else if(ev.code === "ArrowLeft"){
        slideBackward();
    }else if(ev.code === "Escape"){
        exit();
    }
}

/*
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

    diapos[index].classList.add("active");
});

quit.addEventListener("click", function(){
    diapos[index].classList.remove("active");
    index = 0;
    lb.classList.remove("active");
});
*/
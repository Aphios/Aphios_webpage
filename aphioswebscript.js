/* TODO
    - tester le code et ajuster css, html et js
    VOIR : https://www.freecodecamp.org/news/how-to-create-a-lightbox-using-html-css-and-javascript/
*/

var miniature = document.querySelector(".miniature>img");
var closeButton = document.getElementsByClassName("close")[0];
var nextButton = document.getElementsByClassName("next")[0];
var prevButton = document.getElementsByClassName("prev")[0];
var lightbox = document.getElementById('lightbox');
var indexDiapo = 1;


miniature.addEventListener("click", function(e){
    lightbox.style.display = "block";
    afficheDiapo(indexDiapo);
});

nextButton.addEventListener("click", function(){
    changeDiapo(1)
});

prevButton.addEventListener("click", function(){
    changeDiapo(-1);
});

closeButton.addEventListener("click", function(){
    lightbox.style.display = "none";
});

function afficheDiapo(index){
    var diapos = document.getElementsByClassName("diapositive");
    var dots = document.getElementsByClassName("dot_col");
    // On remet display=none à toutes nos diapos, et le style par défaut à nos points
    for (let i=0; i<diapos.length; i++) {
        diapos[i].style.display = "none";
        dots[i].style.color = "white";
        dots[i].style.fontSize = "15 em";
    };
    // On gère le passage de la dernière diapo à la première, et inversement
    if(index<1){
        index = diapos.length;
    }else if(index>diapos.length){
        index = 0;
    // Par défaut il faut retirer 1 pour avoir l'index correspondant dans nos tableaux diapos et dots
        index -= 1;
    }
    dots[index].style.color='#999999';
    dots[index].style.fontSize='18 em';
    diapos[index].style.display = "block";
}

function changeDiapo(index){
    indexDiapo += index;
    afficheDiapo(indexDiapo);
    };




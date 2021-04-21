var deroulant = document.getElementsByClassName("deroulant")[0];
var activatingA = deroulant.getElementsByTagName('a')[0];

function addAriaBtn(){  
    let btn = "<span class='fleche-bas'><span class='visually-hidden'>afficher le sous-menu de 'Mes projets'</span></span>";
    activatingA.insertAdjacentHTML('afterend', btn);
    deroulant.querySelector('span.fleche-bas').addEventListener("click", function (event) {
        if (this.parentNode.className == "deroulant") {
            this.parentNode.className = "deroulant ouvert";
            this.parentNode.querySelector('a').setAttribute('aria-expanded', "true");
            this.setAttribute("aria-expanded", "true");
        } else {
            this.parentNode.className = "deroulant";
            this.parentNode.querySelector('a').setAttribute('aria-expanded', "false");
            this.setAttribute("aria-expanded", "false");
        }
        event.preventDefault();
    });
}

// On load
if(window.innerWidth > 750){
    addAriaBtn();
}

// If window is resized
window.addEventListener('resize', function(){
    if(this.innerWidth < 750){
        activatingA.removeAttribute("aria-expanded");
        activatingA.removeAttribute("aria-haspopup");
        let triangle = document.getElementsByClassName("fleche-bas")[0];
        triangle.parentNode.removeChild(triangle);
    }else{
        if(! document.getElementsByClassName('fleche-bas')[0]){
            addAriaBtn();
        }      
    }
});




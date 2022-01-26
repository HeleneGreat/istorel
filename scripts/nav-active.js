// NAV active pour la nav principale
let linksFlex = document.getElementById("menu-flex").getElementsByTagName("a"); 

for(let i=0; i<linksFlex.length; i++){
    if(linksFlex[i].href == location.href){
        linksFlex[0].classList.remove('active');
        linksFlex[i].classList.add('active');
        }
    }


// NAV active pour le menu burger
let linksBurger = document.getElementById("menuprincipal").getElementsByTagName("a"); 

for(let i=0; i<linksBurger.length; i++){
    if(linksBurger[i].href == location.href){
        linksBurger[0].classList.remove('active');
        linksBurger[i].classList.add('active');
        }
    }
    
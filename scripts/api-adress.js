// Code d'Alan copié-collé
/*
let adresse = document.querySelector("#adresse");
let wrapper = document.getElementById('wrapper');

adresse.addEventListener('input', function() {


  if (adresse.value.length > 0) {
    fetch("https://api-adresse.data.gouv.fr/search/?q=" + adresse.value + "&limit=6")
      .then(response => response.json())
      .then(data => {
        let result = data.features;
        console.log(result);

        wrapper.innerHTML = "";
        if (result.length) {
          for (let i = 0; i < result.length; i++) {
            let li = document.createElement('li');
            li.innerText = result[i].properties.label;

            wrapper.appendChild(li);

            li.addEventListener('click', displayadresse);

            function displayadresse() {
              adresse.value = li.innerText;

              wrapper.innerHTML = "";
            }
          }
        }
      })
  } else {
    wrapper.innerHTML = "";
  };
});


*/


/* TENTATIVE 2 : tuto youtube; puis TENTATIVE 3 : adaptation du code d'Alan avec celui du tuto
µ*/
let adresse = document.querySelector("#adresse");
let wrapper = document.getElementById('wrapper');

adresse.addEventListener('input', function(){

    if (adresse.value.length > 0) {

        fetch("https://api-adresse.data.gouv.fr/search/?q=" + adresse.value + "&limit=6")
            .then(response => response.json())
            .then(data => {
                let result = data.features;
                console.log(result);
                wrapper.innerHTML = "";
                if (result.length) {
                    for (let i = 0; i < result.length; i++){
                        let affichage = document.createElement("li");

                        affichage.innerText = result[i].properties.label ;
wrapper.appendChild(affichage);
                    affichage.addEventListener('click', displayAdresse);

                        }
                    

                    function displayAdresse() {
                        adresse.value = affichage.innerText;
                        wrapper.innerHTML = "";
                    }
                }
                
            })
    } else {
        wrapper.innerHTML = "";
    };

});





/* TENTATIVE 1 adaptation du code API Pokemon de Renaud

let render = document.getElementById('wrapper');

fetch('https://pokeapi.co/api/v2/pokemon/?limit=500&offset=0/')
fetch('https://api-adresse.data.gouv.fr/search/?q=')
.then(response => response.json())
.then(data => {

    let adresses = data.results;

search.addEventListener('input', displayAddress);//

function displayAddress() {//
    
    
    render.innerHTML = "";

    for(let i = 0; i < adresses.length; i++) {
        
        if(search.value == adresses[i].name.substring(0, search.value.length)){
            
            let img = document.createElement('img');
            let splitUrl = adresses[i].url.split('/');
            let id = splitUrl[splitUrl.length - 2];
            console.log(splitUrl);

            img.src = `https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/${id}.png`;

            let li = document.createElement('li');
            let p = document.createElement('p');
            p.innerText = adresses[i].name;

            li.appendChild(p);
            li.appendChild(img);
            render.appendChild(li);

            li.addEventListener('click', displayName);
            function displayName() {
                search.value = adresses[i].name;
                displayAddress();
            }
        }

    }
}
});
*/
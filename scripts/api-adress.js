let render = document.getElementById('wrapper');
let search = document.getElementById('insert');

fetch('https://pokeapi.co/api/v2/pokemon/?limit=500&offset=0/')
.then(response => response.json())
.then(data => {

    let pokemons = data.results;

search.addEventListener('input', displaypok);

function displaypok() {
    
    
    render.innerHTML = "";

    for(let i = 0; i < pokemons.length; i++) {
        
        if(search.value == pokemons[i].name.substring(0, search.value.length)){
            
            let img = document.createElement('img');
            let splitUrl = pokemons[i].url.split('/');
            let id = splitUrl[splitUrl.length - 2];
            console.log(splitUrl);

            img.src = `https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/${id}.png`;

            let li = document.createElement('li');
            let p = document.createElement('p');
            p.innerText = pokemons[i].name;

            li.appendChild(p);
            li.appendChild(img);
            render.appendChild(li);

            li.addEventListener('click', displayname);
            function displayname() {
                search.value = pokemons[i].name;
                displaypok();
            }
        }

    }
}
});
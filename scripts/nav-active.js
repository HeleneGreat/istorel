
  let link = document.getElementById('menu-flex').getElementsByTagName('a');
 
  // let current = location.href;
  for (let i=0; i < link.length; i++)
  {
   if(link[i].href == current)
   {
      // link[i].href = "";
      link[i].classList.add('active');
   }
 }

/*VERSION MURIEL à tester
let links = document.getElementById("sous-menu").getElementsByTagName("a");

for(let i=0; i<links.length; i++){
    if(links[i].href == location.href){
        links[0].classList.remove('active');
        links[i].classList.add('active');
        }
    }
*/


/*
// Get the container element
let liContainer = document.getElementById("nav-active");

// Get all <li> inside the container
let lis = liContainer.getElementsByClassName("li");

// Loop through the <li> and add the active class to the current/clicked <li>
for (let i = 0; i < lis.length; i++) {
  lis[i].addEventListener("click", function() {
    let current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}

*/
require('./bootstrap');



function cambiaColore(){
  var ul = document.getElementById("myLink");
  var list = ul.getElementsByTagName("LI");

  for (var i = 0; i < list.length; i++) {
    list[i].classList.remove("active");
  }

  var ev=event.target;
  var liSel = event.target.parentElement
  liSel.classList.add("active");
}


document.addEventListener('DOMContentLoaded', () => {


  var ul = document.getElementById("myLink");
  ul.addEventListener("click", cambiaColore);

  });

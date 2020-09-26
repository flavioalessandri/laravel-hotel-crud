require('./bootstrap');



function activeLinkColor(){
  var ul = document.getElementById("myLink");
  // var list = ul.getElementsByTagName("LI");
  var list = ul.getElementsByTagName("A");

  for (var i = 0; i < list.length; i++) {
    list[i].classList.remove("active");
  }

  var ev=event.target;
  // var liSel = event.target.parentElement;
  ev.classList.add("active");
  // liSel.classList.add("active");
}


document.addEventListener('DOMContentLoaded', () => {


  var ul = document.getElementById("myLink");
  ul.addEventListener("click", activeLinkColor);

  });

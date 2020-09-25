require('./bootstrap');



document.addEventListener("DOMContentLoaded", function() {

  var ul = document.getElementById("myLink");

  var list = ul.getElementsByTagName("LI");

  for (var i = 0; i < list.length; i++) {

    var elementoLista = list[i];

  elementoLista.addEventListener("click",function(ev) {

    var sel= elementoLista.className;
    console.log(sel);
    // ev.target.className('active');

    console.log("EV.TARGET",ev.target);
    // console.log(ev.target.className);

})

}



})

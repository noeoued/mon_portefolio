
$(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })

  

  document.getElementById('p2').innerHTML =
'Taille de la fenêtre (int) : '+ window.innerWidth+  '*' + window.innerHeight;


let b1 = document.getElementById('b1'); //pour accederau button
let b2 = document.getElementById('b2'); //pour accederau button
let b3 = document.getElementById('b3'); //pour accederau button
let b4 = document.getElementById('b4'); //pour accederau button
let b5 = document.getElementById('b5'); //pour accederau button
let b6 = document.getElementById('b6'); //pour accederau button

let winSize = 'width = 500, height = 500';

b1.addEventListener('click', openWindow);
b2.addEventListener('click', resizeWindowBy);
b3.addEventListener('click', resizeWindowTo);

function openWindow(){
    fenetre = window.open('', '', winSize);
}

function resizeWindowBy(){
    fenetre.resizeBy(200, 300);
}
function resizeWindowTo(){
    fenetre.resizeBy(900, 900);
}

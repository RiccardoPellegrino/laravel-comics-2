import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])
let modalColl = document.getElementsByClassName("myModal");

// Get the button that opens the modal
let btnColl = document.getElementsByClassName("myBtn");

// Get the <span> element that closes the modal
let spanColl = document.getElementsByClassName("close");
for(let i=0;i<btnColl.length;i++){

// When the user clicks the button, open the modal 
btnColl[i].onclick = function(e) {
    e.preventDefault();
    modalColl[i].style.display = "block";
}
spanColl[i].onclick = function() {
    modalColl[i].style.display = "none";
}



}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modalColl) {
    modalColl.style.display = "none";
  }
}
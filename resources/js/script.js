/* FINNs User Lizenzen JS Datei: */

const hamBurger = document.querySelector(".toggle-btn");

hamBurger.addEventListener("click", function () {
    document.querySelector("#sidebar").classList.toggle("expand");
});

//Hinzufügen
var modalHinzufügen = document.getElementById("addLizenz");
var hinzufügenBtn = document.getElementById("hinzufügen");
var hinzufügenAbbrechenBtn = document.getElementById("hinzufügenAbbrechenBtn");
var hinzufügenModalBtn = document.getElementById("hinzufügenModal");
var hinzufügenXBtn = document.getElementById("hinzufügenXBtn");

hinzufügenBtn.onclick = function () {
    modalHinzufügen.style.display = "block";
}

hinzufügenAbbrechenBtn.onclick = function () {
    modalHinzufügen.style.display = "none";
}

hinzufügenModalBtn.onclick = function () { //hier NOCH schließen da nur Mockup später soll dann schließen und hinzufügen
    modalHinzufügen.style.display = "none";
}

hinzufügenXBtn.onclick = function () {
    modalHinzufügen.style.display = "none";
}


//Editieren



//Löschen
var modalLöschen = document.getElementById("deleteLizenz");

var löschen1 = document.getElementById("löschen1");
var löschen2 = document.getElementById("löschen2");
var löschen3 = document.getElementById("löschen3");
var löschen4 = document.getElementById("löschen4");   
var löschen5 = document.getElementById("löschen5");
var löschen6 = document.getElementById("löschen6");
var löschen7 = document.getElementById("löschen7"); 
var löschen8 = document.getElementById("löschen8");   

var löschenAbbrechenBtn = document.getElementById("löschenAbbrechenBtn");
var löschenModal = document.getElementById("löschenModal");
var löschenXBtn = document.getElementById("löschenXBtn");

löschen1.onclick = function () {
    modalLöschen.style.display = "block";
}

löschen2.onclick = function () {
    modalLöschen.style.display = "block";
}

löschen3.onclick = function () {
    modalLöschen.style.display = "block";
}

löschen4.onclick = function () {
    modalLöschen.style.display = "block";
}

löschen5.onclick = function () {
    modalLöschen.style.display = "block";
}

löschen6.onclick = function () {
    modalLöschen.style.display = "block";
}

löschen7.onclick = function () {
    modalLöschen.style.display = "block";
}

löschen8.onclick = function () {
    modalLöschen.style.display = "block";
}

löschenModal.onclick = function () { //hier dann löschen und schließen
    modalLöschen.style.display = "none";
}

löschenAbbrechenBtn.onclick = function () {
    modalLöschen.style.display = "none";
}

löschenXBtn.onclick = function () {
    modalLöschen.style.display = "none";
}


//Schließen bei Klcik außerhalb des modal's
window.onclick = function (event) {
    if (event.target == modalLöschen || event.target == modalHinzufügen) {
        modalHinzufügen.style.display = "none";
        modalLöschen.style.display = "none";
    }
}
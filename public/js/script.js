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
document.addEventListener('DOMContentLoaded', function () {
    var deleteModal = document.getElementById('deleteLizenz');
    
    // Wenn das Modal angezeigt wird
    deleteModal.addEventListener('show.bs.modal', function (event) {
        var button = event.relatedTarget; // Der Button, der das Modal öffnet
        var computerId = button.getAttribute('data-computer-id'); // Computer-ID aus dem data-computer-id Attribut
        
        // Das versteckte Input-Feld mit der ID befüllen
        var computerIdInput = deleteModal.querySelector('#computerIDToDelete');
        computerIdInput.value = computerId;
    });
});



//Schließen bei Klcik außerhalb des modal's
window.onclick = function (event) {
    if (event.target == modalLöschen || event.target == modalHinzufügen) {
        modalHinzufügen.style.display = "none";
        modalLöschen.style.display = "none";
    }
}
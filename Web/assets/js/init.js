// On window load
window.onload = function(){
    matters.load();
}

// Show message
function showMessage(message){
    var snackbar = document.getElementById("snackbar");
    snackbar.innerHTML = message;
    snackbar.className = "show";
    setTimeout(function(){
        snackbar.className = snackbar.className.replace("show", "");
    }, 3000);
}

var popup = document.getElementById('popup');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    // Close Dropdowns
    if (!event.target.matches('.dropdown')) {
        closeDropdowns();
    }

    // Close Popup
    var popup = document.getElementById('popup');
    if (event.target == popup) {
        popup.style.display = "none";
        matters.refresh();
    }

    // When the user clicks anywhere outside of the modal, close it
    var modal = document.getElementById('modal');
    if (event.target == modal) {
        modal.style.display = "none";
        matters.refresh();
    }

}

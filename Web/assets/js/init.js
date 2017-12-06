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

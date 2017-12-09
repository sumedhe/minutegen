/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function toggleDropdown(dropdownId) {

    if (!document.getElementById(dropdownId).classList.contains("visible")){
        var show = true;
    }
    closeDropdowns();
    if (show) { document.getElementById(dropdownId).classList.add("visible"); }
}

// Close the dropdown if the user clicks outside of it
function closeDropdowns(){
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('visible')) {
            openDropdown.classList.remove('visible');
        }
    }
}

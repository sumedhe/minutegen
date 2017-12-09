function refreshAccordions(){
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].onclick = function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.maxHeight){
                panel.style.maxHeight = null;
                panel.style.marginBottom = null;
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
                panel.style.marginBottom = "10px";
            }
        }
    }
}

refreshAccordions();

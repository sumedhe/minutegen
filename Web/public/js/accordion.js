// Accordion function
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].onclick = function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  }
}

// Hiding button functions
function do_change(){
  document.getElementById("move_vert").style.display = "none";
  document.getElementById("delete").style.display = "block";
  document.getElementById("alert").style.display = "block";
  document.getElementById("create").style.display = "block";
  document.getElementById("bookmark").style.display = "block";
  document.getElementById("info").style.display = "block";
  document.getElementById("hide").style.display = "block";
}
function do_hide(){
  document.getElementById("move_vert").style.display = "block";
  document.getElementById("delete").style.display = "none";
  document.getElementById("alert").style.display = "none";
  document.getElementById("create").style.display = "none";
  document.getElementById("bookmark").style.display = "none";
  document.getElementById("info").style.display = "none";
  document.getElementById("hide").style.display = "none";
}

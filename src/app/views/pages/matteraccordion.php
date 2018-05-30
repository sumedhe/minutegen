<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Matter List</title>
  <!-- Include color pallette -->
  <link rel="stylesheet" type="text/css" href="../../../public/css/colors.css">
  <!-- Include Accordion button -->
  <link rel="stylesheet" type="text/css" href="../../../public/css/accordion.css">
  <!-- Include buttons including group buttons, hiding buttons and add new matters buttons -->
  <link rel="stylesheet" type="text/css" href="../../../public/css/button.css">
  <!-- Include search bar -->
  <link rel="stylesheet" type="text/css" href="../../../public/css/search.css">
  <!-- Include google icons -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">


</head>
  <body class="default-primary-color">

    <form class="btn-group" action="minuteaccordion.html" method="get">
    <h2 class="h-light-text-color">Matter Accordion
      <!-- Matter cards button -->
      <button type="submit" class="cards default-primary-color" formaction="matterview.php"><i class="material-icons md">dashboard</i></button>
      <!-- Matter list button -->
      <button type="submit" class="cards default-primary-color" formaction="matterlist.php"><i class="material-icons md">list</i></button>
      <!-- Matter accordion button -->
      <button type="submit" class="cards default-primary-color" formaction="matteraccordion.php"><i class="material-icons md">view_stream</i></button>
      </h2>
    </form>
     <!-- Creating Search bar -->
     <!-- onkeyup="myFunction()" needs to be created -->
    <input type="text" id="myInput" placeholder="Search for matters.." title="Type an ID">
    <!-- Accordion creation with hiding buttons -->
    <!-- Needs to work on hiding buttons -->
    <div class="accordion buttons" class="material-icons" onmouseover="do_change(); return false;" onmouseout="do_hide(); return true;">129.3.1 | Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
      <!-- Vertical button for more -->
      <button type="button" class="transparent" name="edit" id="move_vert" style="float: right;">
          <i class="material-icons">more_vert</i>
      </button>
      <!-- delete button -->
      <button type="submit" class="transparent" name="delete" id="delete" style="display:none; float: right;">
          <i class="material-icons">delete</i>
      </button>
      <!-- Notifications button -->
      <button class="transparent" name="alert" id="alert" style="display:none; float: right;">
          <i class="material-icons">add_alert</i>
      </button>
      <!-- Edit button -->
      <button class="transparent" name="create" id="create" style="display:none; float: right;">
          <i class="material-icons">create</i>
      </button>
      <!-- Bookmark button -->
      <button class="transparent" name="bookmark" id="bookmark" style="display:none; float: right;">
          <i class="material-icons">bookmark</i>
      </button>
      <!-- Information button -->
      <button class="transparent" name="info" id="info" style="display:none; float: right;">
          <i class="material-icons">info</i>
      </button>

    </div>
    <!-- Included data -->
    <div class="panel">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>

<script>
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

</script>
<!-- Add button -->
<form action="matteraccordion.php" method="get">
  <button type="submit" class="circle" formaction="addmatter.html"><i class="material-icons md-48" >add_circle</i></button>
</form>
</body>
</html>

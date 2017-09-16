<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Matter List</title>
  <!-- Include color pallette -->
  <link rel="stylesheet" type="text/css" href="../../../public/css/colors.css">
  <!-- Include table -->
  <link rel="stylesheet" type="text/css" href="../../../public/css/table.css">
  <!-- Include group buttons and creating matters button -->
  <link rel="stylesheet" type="text/css" href="../../../public/css/button.css">
  <!-- Include search bar -->
  <link rel="stylesheet" type="text/css" href="../../../public/css/search.css">
  <!-- Include button group of views -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

</head>
  <body class="default-primary-color">

    <form class="btn-group" action="minuteaccordion.html" method="get">
    <h2 class="h-light-text-color">Matter List
      <!-- Matter cards button -->
      <button type="submit" class="cards default-primary-color" formaction="matterview.php"><i class="material-icons md">dashboard</i></button>
      <!-- Matter list button -->
      <button type="submit" class="cards default-primary-color" formaction="matterlist.php"><i class="material-icons md">list</i></button>
      <!-- Matter accordion button -->
      <button type="submit" class="cards default-primary-color" formaction="matteraccordion.php"><i class="material-icons md">view_stream</i></button>
      </h2>
    </form>
    <!-- Creating Search bar -->
   <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for matters.." title="Type an ID">
   <!-- Creating table -->
   <table id="myTable">
     <!-- Table header -->
     <tr class="header">
       <th style="width:10%;">Matter No.</th>
       <th style="width:20%;">Matter Title</th>
       <th style="width:50%;">Content</th>
       <th style="width:20%;">Attachments</th>
     </tr>
     <!-- Table data -->
     <tr>
       <td>129.3.1</td>
       <td>Lorem ipsum dolor sit amet.</td>
       <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</td>
       <td></td>
     </tr>
     <tr>
       <td>129.3.2</td>
       <td>Lorem ipsum dolor sit amet.</td>
       <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</td>
       <td></td>
     </tr>
   </table>
</br>
<!-- Search bar function -->
<script src="../../../public/js/search.js"></script>
<!-- Add button -->
<form action="matterlist.php" method="get">
  <button type="submit" class="circle" formaction="addmatter.php"><i class="material-icons md-48" >add_circle</i></button>
</form>
</body>
</html>

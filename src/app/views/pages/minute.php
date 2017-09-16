<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Minute View</title>
    <!-- Include color pallette -->
    <link rel="stylesheet" type="text/css" href="../../../public/css/colors.css">
    <!-- Include table -->
    <link rel="stylesheet" type="text/css" href="../../../public/css/table.css">
    <!-- Include creating minutes button -->
    <link rel="stylesheet" type="text/css" href="../../../public/css/button.css">
    <!-- Include search bar -->
    <link rel="stylesheet" type="text/css" href="../../../public/css/search.css">
    <!-- Include google icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

  </head>
  <body class="default-primary-color">
  <h2 class="h-light-text-color">Minute List</h2>
  <!-- Creating Search bar -->
  <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for matters.." title="Type an ID">
<!-- Creating table -->
  <table id="myTable">
    <!-- Table header -->
      <tr class="header">
        <th  style="width:10%;">Meeting No.</th>
        <th  style="width:10%;">Date</th>
        <th  style="width:40%;">Matters discussed</th>
        <th  style="width:10%;">Attendace</th>
        <th  style="width:30%;">State</th>
      </tr>
      <!-- Table data -->
      <tr>
          <td>129</td>
          <td>2017.05.18</td>
          <td>00</td>
          <td>00</td>
          <td>Not held</td>
        </tr>
        <tr>
          <td>128</td>
          <td>2017.04.14</td>
          <td>20</td>
          <td>35</td>
          <td>1 <sup>st</sup> hearing completed</td>
        </tr>
        <tr>
          <td>127</td>
          <td>2017.03.20</td>
          <td>17</td>
          <td>50</td>
          <td>Sent</td>
        </tr>
    </table>
<!-- Search bar function -->
<script src="../../../public/js/search.js"></script>
<!-- Add button -->
<form action="matterlist.php" method="get">
  <button type="submit" class="circle" formaction="addminute.html"><i class="material-icons md-48" >add_circle</i></button>
</form>
</body>
</html>

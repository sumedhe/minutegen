<div>

    <form class="btn-group" action="matters.php" method="get">
    <h2 class="h-light-text-color">Matter List
      <!-- Matter cards button -->
      <button type="submit" class="cards default-primary-color" formaction="mattercard.php"><i class="material-icons md">dashboard</i></button>
      <!-- Matter list button -->
      <button type="submit" class="cards default-primary-color" formaction="matters.php"><i class="material-icons md">list</i></button>
      <!-- Matter accordion button -->
      <button type="submit" class="cards default-primary-color" formaction="matteraccordion.php"><i class="material-icons md">view_stream</i></button>
      </h2>
    </form>
   <!-- Creating table -->
   <table id="myTable">
     <!-- Table header -->
     <tr class="table-header-color">
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
<!-- Add button -->
<form action="matterlist.php" method="get">
  <button type="submit" class="circle add-circle-color" formaction="addmatter.php"><i class="material-icons md-48" >add_circle</i></button>
</form>

</div>

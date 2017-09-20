<div>

    <h2 class="h-light-text-color">Members List</h2>
    <!-- Creating Search bar -->
    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for matters.." title="Type an ID">
  <!-- Creating table -->
  <table id="myTable">
    <!-- Table header -->
      <tr class="header">
        <th style="width:35%;">Name</th>
        <th style="width:35%;">Email</th>
        <th style="width:15%;">Registered on</th>
        <th style="width:15%;"></th>
      </tr>
      <!-- Table data -->
      <tr>
        <td>Mr.M.S.M.Perera</td>
        <td>perera80@gmail.com</td>
        <td>30.05.2016</td>
        <!-- Adding delete, edit buttons -->
        <td>
          <button type="button" class="change"><i class="material-icons">delete</i></button>
          <button type="button" class="change"><i class="material-icons">create</i></button>
        </td>
      </tr>
      <tr>
        <td>Mrs.C.L.M.W.Fernando</td>
        <td>fernandomn@gmail.com</td>
        <td>20.04.2016</td>
        <!-- Adding delete, edit buttons -->
        <td>
          <button type="button" class="change"><i class="material-icons">delete</i></button>
          <button type="button" class="change"><i class="material-icons">create</i></button>
        </td>
      </tr>
      <tr>
        <td>Mr.W.A.S.Silva</td>
        <td>commercialflt@gmail.com</td>
        <td>09.02.2015</td>
        <!-- Adding delete, edit buttons -->
        <td>
          <button type="submit" class="change"><i class="material-icons">delete</i></button>
          <button type="submit" class="change"><i class="material-icons">create</i></button>
        </td>
      </tr>
    </table>
    <!-- Add button -->
    <form action="member.html" method="get">
      <button type="submit" class="circle" formaction="addmember.php"><i class="material-icons md-48" >add_circle</i></button>
    </form>

</div>

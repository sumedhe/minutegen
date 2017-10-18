<div>

    <form class="btn-group" action="minuteAccordion.php" method="get">
    <h2 class="h-light-text-color">Matter Accordion
      <!-- Matter cards button -->
      <button type="submit" class="cards default-primary-color" formaction="mattercard.php"><i class="material-icons md">dashboard</i></button>
      <!-- Matter list button -->
      <button type="submit" class="cards default-primary-color" formaction="matters.php"><i class="material-icons md">list</i></button>
      <!-- Matter accordion button -->
      <button type="submit" class="cards default-primary-color" formaction="matteraccordion.php"><i class="material-icons md">view_stream</i></button>
      </h2>
    </form>
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
    <div class="panel light-primary-color">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>

<!-- Add button -->
<form action="matterAccordion.php" method="get">
  <button type="submit" class="circle add-circle-color" formaction="addMatter.php"><i class="material-icons md-48" >add_circle</i></button>
</form>

</div>

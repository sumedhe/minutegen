
  <button id="myBtn">Open Form</button>
  <div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="matter-close"><i class="material-icons">close</i></span>
    <div class="matter-container">
       <form class="matter-form" action="index.html" method="post">Select Matter Type :<br><br>
	   <input type="radio" name="mattertype" value="materfrmte" checked> Matter Arised From Minute<br>
  	   <input type="radio" name="mattertype" value="stdreq"> Student Request<br>
  	   <input type="radio" name="mattertype" value="ayothrbns"> Any Other Business I<br><br>
  	   <input type="text" name="meeting_num" placeholder="Meeting Number">
  	   <input type="text" name="matter_heading" placeholder="Matter Subject">
  	   <textarea rows="8" cols="60" placeholder="Type matter here...."></textarea>
  	   Attachments : <br><br>
  	   <input type="file" name="attchmnts" accept="file_extension">
       <input type="submit" name="submit" value="Add">
       <input type="reset" name="reset" value="Cancel">
       


</form>
 </div>
  </div>

</div>


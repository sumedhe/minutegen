<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>

<style>

div.page{
  font-family:'Roboto';
}

button.help {
    cursor: pointer;
    padding: 18px;
    outline: none;
    font-size: 16px;
    transition: 0.4s;
    padding-top: 20px;
    background-color: white;
    color: black;
    border: 2px #555555;
    width:50%;
    margin-left:0%;
    box-shadow: 0.5px 0.5px 2px grey;

}


div.container-1 {

    height: 41%;
    width: 100%;
    background-color: #607D8B;
    padding-top: 40px;
    text-align: center;
}

div.container-2 {
    height: 1200px;
    width: 100%;
    background-color: #EEEEEE;
    text-align: center;

}


button.help:hover {
    background-color: #F5F5F5;
}

button.help:after {
    content: '\203A';
    color: #777;
    font-weight: bold;
    float: right;
    margin-right: 20px;
}

button.help.active:after {
    content: "\2039";
}

div.help_panel {
    background-color: #ECEFF1;
    max-height: 0;
    overflow: hidden;
    box-shadow: 0.5px 0.5px 2px grey;
    transition: max-height 0.4s ease-out;
    margin-left:25%;
    width:50%;

}


h2.help{
    font-size:34px;
    color: white;
    padding-top: 55px;
    padding-bottom: 5px;
    text-align: center;
}



input[type=text] {

    width: 650px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url('searchicon.png');
    background-position: 10px 10px;
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

#myUL {
    /* Remove default list styling */
    list-style-type: none;
    padding:0;


        }

#myUL li a {
    border: 0px ; /* Add a border to all links */
    margin-top: -1px; /* Prevent double borders */
     /* Grey background color */
    padding-top: 13px;
    padding-bottom: 13px;
    padding-right: 100%;
    padding-left: 20px; /* Add some padding */
    text-decoration: none; /* Remove default text underline */
    font-size: 16px; /* Increase the font-size */
    color: black;
    display:inline-block;
    white-space:nowrap;
     /* Make it into a block element to fill the whole list */
}

.help_panel #myUL li a:hover:not(.header) {
    background-color: #CFD8DC; /* Add a hover effect to all links, except for headers */
}

a{
  float:left;
}
</style>


<div class="page">
	  <div class="container-1">
      		<h2 class="help">How can we help you?</h2>
      		<input type="text" id="search-1"  placeholder="Describe your issue..">
      </div>



	  <div class="container-2">
        <br><br><br>

        <button class="help"><a>Get started</a></button>
				<div class="help_panel">
            <ul id="myUL">
						  <li><a href="<?= BASEURL . '/help/getstarted' ?>">Sign In</a></li>
            </ul>

				</div>



		<button class="help"><a>Matters</a></button>
				<div class="help_panel">

				  	<ul id="myUL">
						  <li><a href="<?= BASEURL . '/help/matters#viewMatters' ?>">View matters</a></li>
						  <li><a href="<?= BASEURL . '/help/matters#createNewMatters' ?>">Create new matters</a></li>
                          <li><a href="<?= BASEURL . '/help/matters#EditMatters' ?>">Edit matters</a></li>
						  <li><a href="<?= BASEURL . '/help/matters#deleteMatters' ?>">Delete matters</a></li>
                          <li><a href="<?= BASEURL . '/help/matters#statusMatters' ?>">Status of a matter</a></li>
						  <li><a href="<?= BASEURL . '/help/matters#notify' ?>">Notifying or not</a></li>

					</ul>

				</div>

		<button class="help"><a>Minutes</a></button>
				<div class="help_panel">

				  	<ul id="myUL">
						  <li><a href="<?= BASEURL . '/help/minutes#viewMembers' ?>">View Minutes</a></li>
						  <li><a href="<?= BASEURL . '/help/minutes#addMembers' ?>">Create a new Minute</a></li>
						  <li><a href="<?= BASEURL . '/help/minutes#deleteMembers' ?>">Edit Minutes</a></li>
                          <li><a href="<?= BASEURL . '/help/minutes#editMembers' ?>">Download minute</a></li>
					</ul>

				</div>

		<button class="help"><a>Members</a></button>
				<div class="help_panel">

				  	<ul id="myUL">
						  <li><a href="<?= BASEURL . '/help/members#viewMembers' ?>">View members</a></li>
						  <li><a href="<?= BASEURL . '/help/members#addMembers' ?>">Add a new member</a></li>
                          <li><a href="<?= BASEURL . '/help/members#deleteMembers' ?>">Delete member</a></li>
						  <li><a href="<?= BASEURL . '/help/members#editMembers' ?>">Edit member details</a></li>


					</ul>

				</div>

                <button class="help"><a>Notification</a></button>
                <div class="help_panel">

                    <ul id="myUL">
                          <li><a href="<?= BASEURL . '/help/notification#minuteGeneration' ?>">Minute Generation</a></li>
                          <li><a href="<?= BASEURL . '/help/notification#minuteRecommendation' ?>">Minute Recommendation</a></li>
                          <li><a href="<?= BASEURL . '/help/notification#matterNotification' ?>">Matter Notification</a></li>

                    </ul>

                </div>

                <button class="help"><a>Searching process</a></button>
                <div class="help_panel">

                    <ul id="myUL">
                          <li><a href="<?= BASEURL . '/help/searching#searchMatter' ?>">Search matters</a></li>
                          <li><a href="<?= BASEURL . '/help/searching#searchMinutes' ?>">Search minutes</a></li>
                          <li><a href="<?= BASEURL . '/help/searching#searchHelp' ?>">Search Help</a></li>
                          <li><a href="<?= BASEURL . '/help/searching#searchBar' ?>">Main search bar</a></li>
                    </ul>

                </div>


                <button class="help"><a>Settings</a></button>
                <div class="help_panel">

                    <ul id="myUL">
                          <li><a href="<?= BASEURL . '/help/settings#enableMail' ?>">Enable mail</a></li>
                          <li><a href="<?= BASEURL . '/help/settings#manipulateMatterView' ?>">Manipulate matter view</a></li>
                    </ul>

                </div>



      </div>
	</div>

<script>


var acc = document.getElementsByClassName("help");
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

</script>

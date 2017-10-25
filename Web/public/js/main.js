// main.js

var data;

// Get data from the API using the given url
// After the API respond call func();
function getFromAPI(url, func){
    var xhr = new XMLHttpRequest();
    xhr.open("GET", url, true);
    xhr.setRequestHeader("Content-type", "application/json");
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            var jsonString = xhr.responseText;
            data = JSON.parse(jsonString);
            func(data);
            // document.getElementById('demo').innerHTML = jsonString;
        }
    };
    var data = JSON.stringify({});
    xhr.send(data);
}

// Add matters to the matters page
function addMatters(data){
    var section = document.getElementById('matterlist');
    section.innerHTML = ""; // tmp
    if (data.length === 0){
        section.innerHTML = "<center>No matters</center>";
        return;
    }
    for (var key in data){
        if (data.hasOwnProperty(key)){
            // Add new matter item
            var item = data[key];

            var button = document.createElement('button');
            button.className += 'accordion';
            button.innerHTML = item['title'];
            section.appendChild(button);

            var div = document.createElement('div');
            div.className += 'panel';
            div.innerHTML = "<p>".concat(item['content'], "<br><br>Minute Index: ", item['minute_index'], "<br><br>Section: ", item['section_name'], "<br><br>State: ", item['state'], "</p>");
            section.appendChild(div);
        }
    }

    // Add bottom space
    var div = document.createElement('div');
    div.style.height="200px";
    section.appendChild(div);

    updateAccordion();
}

// Set collapse/expand functions for accordion lists
function updateAccordion(){
    var acc = document.getElementsByClassName("accordion");
    var i;
    // alert(acc.length);

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
}

// Load and view matters from the server
function loadMatters(){
    var data = getFromAPI('/minutegen/api/matters', addMatters);
}

// Search matters
function searchMatters(e){
    if (e.keyCode === 13){
        var section = document.getElementById('matterlist');
        section.innerHTML = "<center>Loading...</center>";
        var text = document.getElementById('myInput').value;
        var data = getFromAPI('/minutegen/api/matters?search='.concat(text), addMatters);
    }
}

// TEST //
function run(){
  var xhr = new XMLHttpRequest();
  var url = "/minutegen/api/matters/1";
  xhr.open("POST", url, true);
  xhr.setRequestHeader("Content-type", "application/json");
  xhr.onreadystatechange = function () {
      if (xhr.readyState === 4 && xhr.status === 200) {
        document.getElementById('demo').innerHTML = xhr.responseText;
          // var json = JSON.parse(xhr.responseText);
          // alert(json.email + ", " + json.password);
      }
  };
  var data = JSON.stringify({
  "id": "1",
  "matter_id": "1",
  "log_message": "created",
  "datetime": "2017.01.01 23:59:00"
});
  xhr.send(data);
}

// TEST //
function loadPage()
{
  aside = document.getElementById("pages");
  aside.innerHTML="<img src='images/loading-anim.gif'>";
  if(XMLHttpRequest) var x = new XMLHttpRequest();
  else var x = new ActiveXObject("Microsoft.XMLHTTP");
  x.open("GET", "test.php", true);
  x.send();
  x.onreadystatechange = function(){
    if(x.readyState == 4)
    {
        if(x.status == 200)
        {
          aside.innerHTML = x.responseText;
        }
        else
        {
          aside.innerHTML = "Error loading document";
        }
    }
  }
}

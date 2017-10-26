// ma//in.js

var data;

// Get data from the API using the given url
// After the API respond call func();

window.onload = function(){
    loadMatters();
}


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

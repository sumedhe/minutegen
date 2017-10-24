// main.js

// TEST //
function run(){
  var xhr = new XMLHttpRequest();
  var url = "/minutegen/api/matters";
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

// main.js
function run(){
  var xhr = new XMLHttpRequest();
  var url = "test.php";
  xhr.open("POST", url, true);
  xhr.setRequestHeader("Content-type", "application/json");
  xhr.onreadystatechange = function () {
      if (xhr.readyState === 4 && xhr.status === 200) {
        document.getElementById('demo').innerHTML = xhr.responseText;
          // var json = JSON.parse(xhr.responseText);
          // alert(json.email + ", " + json.password);
      }
  };
  var data = JSON.stringify({"email": "hey@mail.com", "password": "101010"});
  xhr.send(data);
}



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

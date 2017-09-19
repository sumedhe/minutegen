function loadPage() {
aside = document.getElementById("aside");
aside.innerHTML="<img src='loadingImage.gif'>";
if(XMLHttpRequest) var x = new XMLHttpRequest();
else var x = new ActiveXObject("Microsoft.XMLHTTP");
x.open("GET", "other_content_1.php", true);
x.send();
x.onreadystatechange = function(){
    if(x.readyState == 4){
        if(x.status == 200) aside.innerHTML = x.responseText;
        else aside.innerHTML = "Error loading document";
        }
    }
}

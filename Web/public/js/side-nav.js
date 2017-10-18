function Nav(){
  if (document.getElementById("mySidenav").style.width == "250px"){
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "65px";
    document.body.style.backgroundColor = "white";
  }
 else{
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "275px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.7)";
  }
}

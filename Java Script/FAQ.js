var myIndex = 0;
carousel();
function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
function openCity(evt, cityName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" lmsred", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " lmsred";
}
function myFunction(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("lmsshow") == -1) {
        x.className += " lmsshow";
    } else { 
        x.className = x.className.replace(" lmsshow", "");
    }
}

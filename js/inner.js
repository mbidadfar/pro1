
function showSide() {
    var menu = document.getElementById("side");
    if (menu.className == "sidebar") {
        menu.className += " show";
    }
    else {
        menu.className = "sidebar";
    }

}

// modal1
var modal1 = document.getElementById("myModal1");

var btn1 = document.getElementById("modal-1");

var span = document.getElementsByClassName("close")[0];

btn1.onclick = function() {
  modal1.style.display = "block";
}

span.onclick = function() {
  modal1.style.display = "none";
}

window.onclick = function(event) {
  if (event.target1 == modal1) {
    modal1.style.display = "none";
  }
} 

// end modal1

// modal2
var modal2 = document.getElementById("myModal2");

var btn2 = document.getElementById("modal-2");

var span2 = document.getElementsByClassName("close2")[0];

btn2.onclick = function() {
  modal2.style.display = "block";
}

span2.onclick = function() {
  modal2.style.display = "none";

}

window.onclick = function(event) {
  if (event.target == modal2) {
    modal2.style.display = "none";
  }
} 

// end modal2

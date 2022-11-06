
function showSide() {
    var menu = document.getElementById("side");
    if (menu.className == "sidebar") {
        menu.className += " show";
    }
    else {
        menu.className = "sidebar";
    }

}


// modal2
var modal2 = document.getElementById("myModal2");

var btn2 = document.getElementById("myBtn2");

var span = document.getElementsByClassName("close")[0];

btn2.onclick = function() {
  modal2.style.display = "block";
}

span.onclick = function() {
  modal2.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal2) {
    modal2.style.display = "none";
  }
} 
// end modal2

// modal3
var modal3 = document.getElementById("myModal3");

var btn3 = document.getElementById("myBtn3");

var span = document.getElementsByClassName("close")[0];

btn3.onclick = function() {
  modal2.style.display = "block";
}

span.onclick = function() {
  modal3.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal3) {
    modal3.style.display = "none";
  }
} 
// end modal3

// modal4
var modal4 = document.getElementById("myModal4");

var btn4 = document.getElementById("myBtn4");

var span = document.getElementsByClassName("close")[0];

btn4.onclick = function() {
  modal4.style.display = "block";
}

span.onclick = function() {
  modal4.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal4) {
    modal4.style.display = "none";
  }
} 
// end modal4

// modal5
var modal5 = document.getElementById("myModal5");

var btn5 = document.getElementById("myBtn5");

var span = document.getElementsByClassName("close")[0];

btn5.onclick = function() {
  modal5.style.display = "block";
}

span.onclick = function() {
  modal5.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal5) {
    modal5.style.display = "none";
  }
} 
// end modal5

// modal6
var modal6 = document.getElementById("myModal6");

var btn6 = document.getElementById("myBtn6");

var span = document.getElementsByClassName("close")[0];

btn6.onclick = function() {
  modal6.style.display = "block";
}

span.onclick = function() {
  modal6.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal6) {
    modal6.style.display = "none";
  }
} 
// end modal6

// modal1
var modal1 = document.getElementById("myModal1");

var btn1 = document.getElementById("modal-1");

var span1 = document.getElementsByClassName("close1")[0];

btn1.onclick = function () {
  modal1.style.display = "block";
}

span1.onclick = function () {
  modal1.style.display = "none";
}

window.onclick = function (event) {
  if (event.target == modal1) {
    modal1.style.display = "none";
  }
}
// end modal1

$(document).ready(function () {

  $('.side-collapse').click(function () {
    $('.sidebar1').slideToggle('slow', function () {
      $('.sidebar1').css ('width','100%');      
      $('.side-item').css ('display','inline-grid');      
      $('.sidebar').css ('padding-top','1%');      
      $('.sidebar').css ('height','auto');      
      $('.side-item').css ('margin-right','40px');      
      $('.side-text').css ('display','none');      
      $('.sideimg').css ('width','30px');      
      $('.sideimg').css ('height','30px');      
    });
  });
});


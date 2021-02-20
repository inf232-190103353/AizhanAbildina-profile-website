function bigImg(x) {
  x.style.height = "200px";
  x.style.width = "270px";
}

function normalImg(x) {
  x.style.height = "160px";
  x.style.width = "230px";
}
function bigCircle(x) {
  x.style.height = "620px";
  x.style.width = "620px";
}

function normalCircle(x) {
  x.style.height = "500px";
  x.style.width = "500px";
}
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  
  slides[slideIndex-1].style.display = "block";  
  setTimeout(showSlides, 2000); 
}

    $('#close-header').on('click', function (){
        $(this).parent().addClass('hidden');
    });

$(document).ready(function(){
  $("#iconMenu").click(function(){
    $("#panel").slideToggle("slow");
  });
});

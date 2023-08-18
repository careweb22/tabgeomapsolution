// mobile style icon x
function myFunction(x) {
  x.classList.toggle("change");
}

// after scroll fix in the top
let navbar = document.getElementById("navbar");
window.addEventListener("scroll", function () {
  if (this.window.pageYOffset >= 200) {
    navbar.classList.add("sticky");
  } else {
    navbar.classList.remove("sticky");
  }
});

// perLoader
var loader = document.getElementById("perLoader");
window.addEventListener("load", function () {
  loader.style.display = "none";
});

// top button
$(window).scroll(function () {
  if ($(window).scrollTop() > 300) {
    $(".top-btn-container").fadeIn();
  } else {
    $(".top-btn-container").fadeOut();
  }
});

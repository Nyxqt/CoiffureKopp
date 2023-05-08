window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("navbarCollapse").style.padding = "15px 0";
  } else {
    document.getElementById("navbarCollapse").style.padding = "30px 0";
  }
}
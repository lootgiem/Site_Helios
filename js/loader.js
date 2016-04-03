

$(window).load(function () {
     setTimeout(HideLoader, 3000);
     });
function HideLoader() {
 $(".load").animate({ opacity: "0" }, 300);
  setTimeout(CloseLoad, 1000);
 $(window).scrollTop(0);
 $("#logo").addClass("zoomIn");
  }

function CloseLoad() {
  $(".load").hide();
  }
$(document).ready(function () {
    $("#load").fadeOut(1000);
})
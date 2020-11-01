$(document).ready(function () {
  // Header Menu
  $(".hamburger").on("click", function (e) {
    e.preventDefault(); // stops link from making page jump to the top
    e.stopPropagation(); // when you click the button, it stops the page from seeing it as clicking the body too
    $("html").toggleClass("navOpen");
  });

  //Mobile Hover Alternative
  const mobileHover = $(".mobile-hover");

  mobileHover.click(function (e) {
    e.preventDefault();
    $(this).toggleClass("hovering");
  });
});

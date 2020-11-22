$(document).ready(function () {
  // Header Menu
  const hamburgerElem = $(".hamburger");

  // A11Y Note: <button> tag will fire a 'click' event on Enter or Spacebar, so adding a keyup event isn't necessary in those cases.
  hamburgerElem.keyup((e) => {
    if (e.keyCode === 13 || e.keyCode === 32) {
      hamburgerElem.click();
    }
  });

  hamburgerElem.click((e) => {
    e.preventDefault(); // stops link from making page jump to the top
    e.stopPropagation(); // when you click the button, it stops the page from seeing it as clicking the body too
    $("html").toggleClass("navOpen");
  });

  // Accordion
  const accordionButtons = document.querySelectorAll(".accordion__button");
  console.log(accordionButtons);
  accordionButtons.forEach((button) => {
    const btnID = button.getAttribute("id").split("-").pop();
    const accordionSection = document.getElementById(
      `accordion-section-${btnID}`
    );
    button.addEventListener('click', () => {
      button.classList.toggle('expanded');
      accordionSection.classList.toggle('open');

      if(button.classList.contains('open')){
        accordionSection.setAttribute('aria-expanded', true);
        accordionSection.setAttribute('aria-hidden', false);
      } else{
        accordionSection.setAttribute('aria-expanded', false)
        accordionSection.setAttribute('aria-hidden', true)
      }
    })
  });

  //Mobile Hover Alternative
  const mobileHover = $(".mobile-hover");

  mobileHover.click(function (e) {
    e.preventDefault();
    $(this).toggleClass("hovering");
  });


  const abstract4Path1 = "M0,0.285549824 C308.543888,0.0977431353 496.084969,0.0038397911 562.623242,0.0038397911 C692.079763,0.0038397911 719.072138,45.8919922 643.600369,137.668297 C589.615618,202.558874 603.832795,261.180231 686.2519,313.532368 C768.671005,365.884506 700.128082,403.424656 480.623132,426.152819 C364.616714,426.152819 264.677015,410.923439 180.804033,380.464679 C96.9310509,350.005918 36.66304,379.852305 0,470.00384 L0,0.285549824 Z";
  const abstract4Path2 = "M 0 0.2855 C 308.5439 0.0977 496.085 0.0038 562.6232 0.0038 C 692.0798 0.0038 694 104 651 146 C 589.6156 202.5589 603.8328 261.1802 658 319 C 725 422 638 435 481 425 C 356 407 275 383 174 364 C 96.9311 350.0059 59 399 0 470.0038 L 0 0.2855 Z";
  
  anime({
    targets: '.abstract-4 path',
    easing: 'linear',
    duration: 7500,
    loop: true,
    d: [
      { value: [abstract4Path1, abstract4Path2] },
      //{ value: wave3 },
      // { value: wave4 },
      { value: wave1 },
    ],

  });


});


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
});

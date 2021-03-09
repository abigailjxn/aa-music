// Project Scripts

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

  // A11y Accordion
  const accordionButtons = document.querySelectorAll(".accordion__button");
  accordionButtons.forEach((button) => {
    const btnID = button.getAttribute("id").split("-").pop();
    const accordionSection = document.getElementById(
      `accordion-section-${btnID}`
    );
    button.addEventListener("click", () => {
      button.classList.toggle("expanded");
      accordionSection.classList.toggle("open");

      if (button.classList.contains("open")) {
        accordionSection.setAttribute("aria-expanded", true);
        accordionSection.setAttribute("aria-hidden", false);
      } else {
        accordionSection.setAttribute("aria-expanded", false);
        accordionSection.setAttribute("aria-hidden", true);
      }
    });
  });

  //Mobile Hover Alternative
  const mobileHover = $(".mobile-hover");

  mobileHover.click(function (e) {
    e.preventDefault();
    $(this).toggleClass("hovering");
  });
});

// SVG Paths and blob looping animations

// Maybe use constructor instead of object literals? Kind of does the same thing
// class AbstractShape {
//   constructor(className, path1, path2) {
//     this.className = className;
//     this.path1 = path1;
//     this.path2 = path2;
//   }
// }

const abstract4 = {
  className: ".abstract-4",
  path1:
    "M0,0.285549824 C308.543888,0.0977431353 496.084969,0.0038397911 562.623242,0.0038397911 C692.079763,0.0038397911 719.072138,45.8919922 643.600369,137.668297 C589.615618,202.558874 603.832795,261.180231 686.2519,313.532368 C768.671005,365.884506 700.128082,403.424656 480.623132,426.152819 C364.616714,426.152819 264.677015,410.923439 180.804033,380.464679 C96.9310509,350.005918 36.66304,379.852305 0,470.00384 L0,0.285549824 Z",
  path2:
    "M 0 0.2855 C 308.5439 0.0977 496.085 0.0038 562.6232 0.0038 C 692.0798 0.0038 694 104 651 146 C 589.6156 202.5589 603.8328 261.1802 658 319 C 725 422 638 435 481 425 C 356 407 275 383 174 364 C 96.9311 350.0059 59 399 0 470.0038 L 0 0.2855 Z",
};
const abstract5 = {
  className: ".abstract-5",
  path1:
    "M393.819372,334 C632.201475,392.264081 547.882051,295.066602 630.662346,119.47939 C685.84921,2.4212479 834.295094,-28.071882 1076,28 L1076,437 L0,437 C103.624846,329.490612 234.89797,295.157279 393.819372,334 Z",
  path2:
    "M 393.8194 334 C 646 474 547.8821 295.0666 665 136 C 781 36 834.2951 -28.0719 1076 28 L 1076 437 L 0 437 C 4 316 211 240 393.8194 334 Z",
};

const blobArr = [abstract4, abstract5];

function morphing(blobArr) {
  blobArr.forEach((blob) => {
    const targets = blob.className + " path";
    const path1 = blob.path1;
    const path2 = blob.path2;

    anime({
      targets: targets,
      easing: "linear",
      duration: 7500,
      loop: true,
      d: [{ value: [path1, path2] }, { value: path1 }],
    });
  });
}

window.onload = function () {
  morphing(blobArr);
};

// A11y Add click event to turn off animation

// add CSS check for 'prefers-reduced-motion' ??

// Wrap anime() in var
// const animation = anime( blah blah blah);

// click event to reduce motion button
//   button.addEventListener("click", () => {
//   button.classList.toggle("animating"); }

// Play or pause based on click event
// if animating
// animation.play();
// if !animating
// animation.pause();

// Reveal on scroll
const controller = new ScrollMagic.Controller();
// build scenes
const animateEl = document.getElementsByClassName("animate");
for (let i = 0; i < animateEl.length; i++) {
  // create a scene for each element
  new ScrollMagic.Scene({
    triggerElement: animateEl[i], // y value not modified, so we can use element as trigger as well
    // offset: 50,												 // start a little later
    triggerHook: 0.9,
    reverse: false, // only do once
  })
    .setClassToggle(animateEl[i], "triggered") // add class toggle
    .addIndicators({ name: "animate " + (i + 1) }) // add indicators (requires plugin)
    .addTo(controller);
}

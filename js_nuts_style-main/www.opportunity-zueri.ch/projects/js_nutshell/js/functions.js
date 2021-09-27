//sidepanel navbar
var menu = document.getElementsByClassName("menu");
var ToC = document.getElementsByClassName("ToC");
var xIcon = document.getElementsByClassName("xIcon");
var menuIcon = document.getElementsByClassName("menuIcon");

/* URS TO TOP */
var mybutton = document.getElementById("myBtn2");

  // When the user scrolls down 20px from the top of the document, show the button
  window.onscroll = function() {scrollFunction()};

  function scrollFunction() {

    console.log('scolling');

    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      mybutton.style.display = "block";
      console.log("working");
    } else {
      mybutton.style.display = "none";
      console.log("not working");
    }
  }

  // When the user clicks on the button, scroll to the top of the document
  function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }

/* ToC[0].addEventListener("click", toggleMenu); */

console.log(menu);

menu.classList.contains("showMenu");

function toggleMenu() {
  if (menu.classList.contains("showMenu")) {
    menu.classList.remove("showMenu");
    xIcon.style.display = "none";
    menuIcon.style.display = "block";
  } else {
    menu.classList.add("showMenu");
    xIcon.style.display = "block";
    menuIcon.style.display = "none";
  }
}

var menuLinks = document.querySelectorAll(".menuLink");

menuLinks.forEach(function (menuLink) {
  menuLink.addEventListener("click", toggleMenu);
});

////////JS FONT SIZER MAYBE I DON'T KNOW HOW THIS WORKS OKAY THANKS BYE/////////////////////
function clampBuilder(minWidthPx, maxWidthPx, minFontSize, maxFontSize) {
  const root = document.querySelector("html");
  const pixelsPerRem = Number(getComputedStyle(root).fontSize.slice(0, -2));

  const minWidth = minWidthPx / pixelsPerRem;
  const maxWidth = maxWidthPx / pixelsPerRem;

  const slope = (maxFontSize - minFontSize) / (maxWidth - minWidth);
  const yAxisIntersection = -minWidth * slope + minFontSize;

  return `clamp(${minFontSize}rem, ${yAxisIntersection}rem + ${
    slope * 100
  }vw, ${maxFontSize}rem)`;
}

function calculateCh(element, fontSize) {
  const zero = document.createElement("span");
  zero.innerText = "0";
  zero.style.position = "absolute";
  zero.style.fontSize = fontSize;

  element.appendChild(zero);
  const chPixels = zero.getBoundingClientRect().width;
  element.removeChild(zero);

  return chPixels;
}

const div = document.querySelector("div");
div.style.fontSize = clampBuilder(320, 960, 1, 3);
div.style.width = `${(320 / calculateCh(div, "1rem")) * 0.6}ch`;



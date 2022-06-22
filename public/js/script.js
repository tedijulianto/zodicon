let pointer = document.querySelector(".pointer");
document.addEventListener("mousemove", function (e) {
  pointer.style.cssText =
    "left: " + e.clientX + "px; top: " + e.clientY + "px;";
});

// VanillaTilt.init(document.querySelector(".title"), {
//   max: 25,
//   speed: 400,
//   gyroscope: true,
// });

const loader = document.querySelector(".dot");
const main = document.querySelector(".main");

function opacityTransition() {
  setTimeout(() => {
    loader.style.opacity = 0;
    loader.style.display = "none";

    main.style.display = "block";
    setTimeout(() => (main.style.opacity = 1), 50);
  }, 2000);
}
opacityTransition();

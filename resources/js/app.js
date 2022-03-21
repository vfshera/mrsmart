require("./bootstrap");

import Alpine from "alpinejs";
import AOS from "aos";
import "aos/dist/aos.css";
import "animate.css";

window.Alpine = Alpine;

Alpine.start();

AOS.init({
    once: true,
});

const callIcon = document.querySelector("#call-icon");
const callUs = document.querySelector("#call-us");

callIcon.addEventListener("click", () => callUs.click());

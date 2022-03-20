require("./bootstrap");

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

const callIcon = document.querySelector("#call-icon");
const callUs = document.querySelector("#call-us");

callIcon.addEventListener("click", () => callUs.click());

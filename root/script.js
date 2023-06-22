// script.js
document.getElementById("buttondown").addEventListener("click", function() {
    const motivationElement = document.getElementById("motivation");
    motivationElement.scrollIntoView({ behavior: "smooth" });
});

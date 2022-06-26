document.addEventListener("DOMContentLoaded", () => {
    loadHtml("../html/footer_main.html", document.getElementById("footer-main"));
   /*  loadHtml("../html/header.html", document.getElementById("header-main")); */
});

function loadHtml(urlLocation, componet) {
    req = new XMLHttpRequest();
    req.open("GET", urlLocation, false);
    req.send(null);
    componet.innerHTML = req.responseText;
}


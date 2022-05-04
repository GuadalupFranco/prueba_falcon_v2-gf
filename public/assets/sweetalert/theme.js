const cambiarModo = document.getElementById("themeControlToggle");

const head = document.getElementsByTagName("head")[0];

const contenedorEstilosSweetAlert = document.createElement("link");
head.append(contenedorEstilosSweetAlert);

contenedorEstilosSweetAlert.rel = "stylesheet";

let themeMode = localStorage.getItem("theme");

cambiarModo.addEventListener("click", function () {
    let themeCondicional =
        localStorage.getItem("theme") == "light" ? "dark" : "light";
    cambiarEstilos(themeCondicional);
});

function cambiarEstilos(themeMode) {
    contenedorEstilosSweetAlert.href = `/assets/sweetalert/sweetalert-${themeMode}.css`;
}

cambiarEstilos(themeMode);

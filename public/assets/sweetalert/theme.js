const cambiarModo = document.getElementById("themeControlToggle");
const contenedorEstilosSweetAlert =
    document.getElementById("estilosSweetAlert");
let themeMode = localStorage.getItem("theme");

cambiarModo.addEventListener("click", function () {
    let themeCondicional =
        localStorage.getItem("theme") == "light" ? "dark" : "light";
    cambiarEstilos(themeCondicional);
});

function cambiarEstilos(themeMode) {
    contenedorEstilosSweetAlert.innerHTML = `<link rel="stylesheet" href="/assets/sweetalert/sweetalert-${themeMode}.css">`;
}

cambiarEstilos(themeMode);

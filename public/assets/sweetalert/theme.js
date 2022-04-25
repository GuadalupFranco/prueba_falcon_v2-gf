const cambiarModo = document.getElementById('themeControlToggle');
const contenedorEstilosSweetAlert = document.getElementById('estilosSweetAlert');
let themeMode = localStorage.getItem('theme');

cambiarModo.addEventListener('click', function (){
    let themeCondicional = (localStorage.getItem('theme') == 'light') ? 'dark' : 'light';
    cambiarEstilos(themeCondicional)
})

function cambiarEstilos(themeMode){
    if(themeMode == 'light'){
        contenedorEstilosSweetAlert.innerHTML = `<link rel="stylesheet" href="/assets/sweetalert/sweetalert-light.css">`;
    }else{
        contenedorEstilosSweetAlert.innerHTML = `<link rel="stylesheet" href="/assets/sweetalert/sweetalert-dark.css">`;
    }
}

cambiarEstilos(themeMode)
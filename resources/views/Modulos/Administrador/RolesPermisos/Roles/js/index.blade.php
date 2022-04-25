<script>
    /*function onClick(idRol){

        let url = window.location.origin+"/obtenerDatosRoles";
        let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        let contenedor = document.getElementById("staticBackdrop2")
        let dataPerse = '';
        alert(contenedor)

        fetch(url, {
                headers: {
                    "Content-Type": "application/json",
                    "X-Requested-With": "XMLHttpRequest",
                    "X-CSRF-TOKEN": token
                    },
                method: 'POST',
                credentials: "same-origin",
                body: JSON.stringify({
                    pidrol : idRol
                })
            })
            .then((response) => response.json())
            .then(data => {
                //console.log(data.id)
                $('#myModal').modal('show')
                dataParse = JSON.parse(data)
                contenedor.innerHTML = `@include('Modulos.Administrador.RolesPermisos.Roles.edit')`
            })
            .catch(function(error) {
                console.log(error);
            });
     }*/
</script>
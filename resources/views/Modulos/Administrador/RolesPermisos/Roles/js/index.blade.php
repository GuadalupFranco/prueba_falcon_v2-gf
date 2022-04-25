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

    function probarAlert(){
        const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-outline-success ms-2',
            cancelButton: 'btn btn-outline-danger'
        },
        buttonsStyling: false
        })

        swalWithBootstrapButtons.fire({
            title: '¿Está seguro/a?',
            text: "Esta acción no se puede deshacer",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Confirmar',
            cancelButtonText: 'Cancelar',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                let timerInterval=0
                Swal.fire({
                    title: 'Registro eliminado',
                    icon: 'success',
                    html: 'Cerrando en <b></b> segundos.',
                    timer: 2000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                        Swal.showLoading()
                        const b = Swal.getHtmlContainer().querySelector('b')
                        timerInterval = setInterval(() => {
                            b.textContent = Swal.getTimerLeft()/1000
                        }, 100)
                    },
                    willClose: () => {
                        clearInterval(timerInterval)
                    }
                }).then((result) => {
                    /* Read more about handling dismissals below */
                    if(result.dismiss === Swal.DismissReason.timer){
                        console.log('I was closed by the timer')
                    }
                })
            }else if(result.dismiss === Swal.DismissReason.cancel){
                swalWithBootstrapButtons.fire(
                    'Cancelado',
                    'Ningún registro fue alterado',
                    'error'
                )
            }
        })
    }
</script>
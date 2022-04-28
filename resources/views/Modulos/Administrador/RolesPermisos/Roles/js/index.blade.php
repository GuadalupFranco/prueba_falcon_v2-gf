<script>

    function guardar() {

        let form = document.getElementById("form-guardar");
        let tiempoEspera = 2000 // Está en milisegundos
        let timerInterval = 0

        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
                const b = Swal.getHtmlContainer().querySelector('b')
                timerInterval = setInterval(() => {
                    b.textContent = Swal.getTimerLeft() / 1000
                }, 100)
            },
            willClose: () => {
                clearInterval(timerInterval)
            }
        })

        Toast.fire({
            title: "Guardando registro",
            text: "Registro eliminado",
            icon: 'success',
            html: 'Cerrando en <b></b> segundos.',
            timer: tiempoEspera,
            timerProgressBar: true,
        })

        setTimeout(function () {
            form.submit()
        }, tiempoEspera)
    }


    function modificar() {

        let form = document.getElementById("form-modificar");
        let tiempoEspera = 2000 // Está en milisegundos
        let timerInterval = 0

        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
                const b = Swal.getHtmlContainer().querySelector('b')
                timerInterval = setInterval(() => {
                    b.textContent = Swal.getTimerLeft() / 1000
                }, 100)
            },
            willClose: () => {
                clearInterval(timerInterval)
            }
        })

        Toast.fire({
            title: "Modificando registro",
            text: "Registro eliminado",
            icon: 'warning',
            html: 'Cerrando en <b></b> segundos.',
            timer: tiempoEspera,
            timerProgressBar: true,
        })

        setTimeout(function () {
            form.submit()
        }, tiempoEspera)
    }

    function eliminar(id) {
        let form = document.getElementById(`form-eliminar-${id}`);
        let tiempoEspera = 2000 // Está en milisegundos

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
                let timerInterval = 0
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                        const b = Swal.getHtmlContainer().querySelector('b')
                        timerInterval = setInterval(() => {
                            b.textContent = Swal.getTimerLeft() / 1000
                        }, 100)
                    },
                    willClose: () => {
                        clearInterval(timerInterval)
                    }
                })
                Toast.fire({
                    title: "Eliminando registro",
                    text: "Registro eliminado",
                    icon: 'error',
                    html: 'Cerrando en <b></b> segundos.',
                    timer: tiempoEspera,
                    timerProgressBar: true,
                })
                setTimeout(function () {
                    form.submit()
                }, tiempoEspera)
            } else if (result.dismiss === Swal.DismissReason.cancel) {
                swalWithBootstrapButtons.fire(
                    'Cancelado',
                    'Ningún registro fue alterado',
                    'error'
                )
            }
        })
    }

</script>

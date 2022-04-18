
    <form class="row g-3 needs-validation" novalidate="" method="POST">
                <div class="d-inline-flex py-1 px-5">
                        <div class="flex-fill  position-relative">
                            <label class="form-label justify-content-start" for="validationTooltip01">Descripción</label>
                            <textarea class="form-control" id="validationTooltip01" value="" required=""></textarea>
                            <div class="valid-tooltip">Por favor ingresa una descripción en el campo.</div>
                        </div>
                        
                </div>
                <div class="d-inline-flex py-1 px-5">
                    <div class="flex-fill px-1 position-relative">
                        <label class="form-label" for="validationTooltip04">Tarea superior</label>
                        <select class="form-select" id="validationTooltip04" required="">
                            <option selected="" disabled="" value="">seleccionar...</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                        <div class="invalid-tooltip">Por favor selecciona un elemento de la lista válido.</div>

                    </div>
                    <div class="d-flex position-relative mx-5 px-1">
                        <div class="form-check">
                            <label class="order-1 form-check-label mx-0" for="flexCheckDefault">Por convocatoria</label>
                            <input class="order-2 form-check-input " id="flexCheckDefault" type="checkbox" value="" />    
                        </div>
                    </div>
                </div>

                <div class="d-inline-flex py-1 px-5">
                    <div class="flex-fill px-1 position-relative">
                        <label class="form-label" for="datepicker_ini">Fecha de creación</label>
                        <input class="form-control datetimepicker" id="datepicker_ini" type="text" placeholder="d/m/y" data-options='{"disableMobile":true}' />
                    </div>
                    <div class="flex-fill px-1  position-relative">
                        <label class="form-label" for="datepicker_fin" >última modificación</label>              
                        <input class="form-control datetimepicker" id="datepicker_fin" type="text" placeholder="d/m/y" data-options='{"disableMobile":true}' />
                    </div>
                </div>
        
       



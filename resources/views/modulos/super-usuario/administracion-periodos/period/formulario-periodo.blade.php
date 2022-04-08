
    <form class="row g-3 needs-validation" novalidate="">
                <div class="d-inline-flex py-1 px-5">
                        <div class="flex-fill px-2 position-relative">
                            <label class="form-label" for="validationTooltip01">Descripción</label>
                            <textarea class="form-control" id="validationTooltip01" value="" required=""></textarea>
                            <div class="valid-tooltip">Por favor ingresa una descripción en el campo.</div>

                        </div>
                        <div class="flex-fill px-2 position-relative">
                            <label class="form-label" for="validationTooltip04">Estatus</label>
                            <select class="form-select" id="validationTooltip04" required="">
                                <option selected="" disabled="" value="">seleccionar...</option>
                                <option>Activo</option>
                                <option>Inactivo</option>
                            </select>
                            <div class="invalid-tooltip">Por favor selecciona un elemento de la lista válido.</div>
                        </div>
                </div>
                    <div class="d-inline-flex py-1 px-5">
                        <div class="flex-fill px-2 position-relative">
                            <label class="form-label" for="validationTooltip04">Periodo superior</label>
                            <select class="form-select" id="validationTooltip04" required="">
                                <option selected="" disabled="" value="">seleccionar...</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                            </select>
                            <div class="invalid-tooltip">Por favor selecciona un elemento de la lista válido.</div>
                        </div>
                        <div class="flex-fill px-2 position-relative">
                            <label class="form-label" for="validationTooltip04">Tarea relacionada</label>
                            <select class="form-select" id="validationTooltip04" required="">
                                <option selected="" disabled="" value="">seleccionar...</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                            </select>
                            <div class="invalid-tooltip">Por favor selecciona un elemento de la lista válido.</div>
                        </div>   
                </div>
                
                <div class="d-inline-flex py-2 px-5">
                    <div class="flex-fill px-1 position-relative">
                        <label class="form-label" for="datepicker_ini">Fecha de inicio</label>
                        <input class="form-control datetimepicker" id="datepicker_ini" type="text" placeholder="d/m/y" data-options='{"disableMobile":true}'/>
                        <div class="valid-tooltip">Selecciona una fecha inicial válida</div>
                    </div>
                    <div class="flex-fill px-1 position-relative">
                        <label class="form-label" for="datepicker_fin">Fecha de fin</label>
                        <input class="form-control datetimepicker" id="datepicker_fin" type="text" placeholder="d/m/y" data-options='{"disableMobile":true}'/>
                        <div class="valid-tooltip">Selecciona una fecha final válida</div>
                    </div>
                </div>
        
       



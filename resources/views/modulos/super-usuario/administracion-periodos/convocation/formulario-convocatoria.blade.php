
    <form class="row g-3 needs-validation" novalidate="">
                <div class="d-inline-flex py-2 px-5">
                        <div class="flex-fill position-relative">
                            <label class="form-label" for="validationTooltip01">Descripción</label>
                            <textarea class="form-control" id="validationTooltip01" value="" required=""></textarea>
                            <div class="valid-tooltip">Por favor ingresa una descripción en el campo.</div>
                        </div>
                </div>
                <div class="d-inline-flex px-5 py-2">
                        <div class="flex-fill px-2 position-relative">
                            <label class="form-label" for="validationTooltip04">Periodo relacionado</label>
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
                
                <div class="d-inline-flex px-5 py-2">
                    <div class="flex-fill px-2 position-relative">
                        <label class="form-label" for="validationTooltip04">Estatus</label>
                        <select class="form-select" id="validationTooltip04" required="">
                            <option selected="" disabled="" value="">seleccionar...</option>
                            <option>Activo</option>
                            <option>Inactivo</option>
                        </select>
                        <div class="invalid-tooltip">Por favor selecciona un elemento de la lista válido.</div>
                    </div>
                    <div class="flex-fill px-2 position-relative">
                        <label class="form-label" for="validationTooltip04">Servicios implicados</label>
                        <select class="form-select js-choice" id="validationTooltip04" required="" data-options='{"removeItemButton":true,"placeholder":true}'>
                            <option selected="" disabled="" value="">seleccionar...</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                        <div class="invalid-tooltip">Por favor selecciona un elemento de la lista válido.</div>
                    </div> 
                </div>
                <div class="d-inline-flex px-5 py-2">    
                    <div class="flex-fill px-2 position-relative">
                        <label class="form-label" for="datepicker_ini">Fecha de inicio</label>
                        <input class="form-control datetimepicker" id="datepicker_ini" type="text" placeholder="d/m/y" data-options='{"disableMobile":true}'/>
                        <div class="valid-tooltip">Selecciona una fecha inicial válida</div>
                    </div>
                    <div class="flex-fill px-2 position-relative">
                        <label class="form-label" for="datepicker_fin">Fecha de fin</label>
                        <input class="form-control datetimepicker" id="datepicker_fin" type="text" placeholder="d/m/y" data-options='{"disableMobile":true}'/>
                        <div class="valid-tooltip">Selecciona una fecha final válida</div>
                    </div>
                </div>

                <div class="d-inline-flex px-5 py-2">
                    <div class="flex-fill dropzone dropzone-single p-0 position-relative" data-dropzone="data-dropzone" data-options='{"url":"valid/url","maxFiles":1,"dictDefaultMessage":"Choose or Drop a file here"}'>
                        <div class="fallback"><input type="file" name="file" /></div>
                        <div class="dz-preview dz-preview-single">
                            <div class="dz-preview-cover dz-complete"><img class="dz-preview-img" src="../../../assets/img/generic/image-file-2.png" alt="..." data-dz-thumbnail="" /><a class="dz-remove text-danger" href="#!" data-dz-remove="data-dz-remove"><span class="fas fa-times"></span></a>
                            <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress=""></span></div>
                            <div class="dz-errormessage m-1"><span data-dz-errormessage="data-dz-errormessage"></span></div>
                            </div>
                            <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress=""></span></div>
                        </div>
                        <div class="dz-message" data-dz-message="data-dz-message">
                            <div class="dz-message-text"><img class="me-2" src="../../../assets/img/icons/cloud-upload.svg" width="25" alt="" />Drop your file here</div>
                        </div>
                    </div>
                    
                    
                </div>
                
        
       



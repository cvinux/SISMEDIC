<?php
  headerAdmin($data); 
 ?> 

   <div class="page-content container container-plus">
     
  
    <div class="card acard mt-2 mt-lg-3">
      <div class="card-header">
                <h3 class="card-title text-125 text-primary-d2">
                  <i class="far fa-edit text-dark-l3 mr-1"></i>
                  Hoja de Atencion | Paciente
                </h3>
      </div>
      <div class="card-body px-3 pb-1">

          <!-- Tabs on left -->
          <div class="mt-3 card bcard bgc-transparent shadow-none">
                  <div class="card-body tabs-left p-0">
                    <ul class="nav nav-tabs align-self-start" role="tablist">
                      <li class="nav-item brc-success shadow-sm">
                        <a class="nav-link active text-left py-3" id="profile1-tab-btn" data-toggle="tab" href="#profile1" role="tab" aria-controls="profile1" aria-selected="true">
                          Datos Generales
                        </a>
                      </li>

                      <li class="nav-item brc-success shadow-sm">
                        <a class="nav-link text-nowrap py-3" id="profile2-tab-btn" data-toggle="tab" href="#profile2" role="tab" aria-controls="profile2" aria-selected="false">
                          Antecedentes Personales
                        </a>
                      </li>

                      <li class="nav-item shadow-sm">
                        <a class="nav-link text-nowrap py-3" id="profile3-tab-btn" data-toggle="tab" href="#profile3" role="tab" aria-controls="profile3" aria-selected="false">
                          Motivo Atención
                        </a>
                      </li>

                      <li class="nav-item shadow-sm">
                        <a class="nav-link text-nowrap py-3" id="profile4-tab-btn" data-toggle="tab" href="#profile4" role="tab" aria-controls="profile4" aria-selected="false">
                          Funciones Biológicas
                        </a>
                      </li>

                      <li class="nav-item shadow-sm">
                        <a class="nav-link text-nowrap py-3" id="profile5-tab-btn" data-toggle="tab" href="#profile5" role="tab" aria-controls="profile5" aria-selected="false">
                          Examen Físico
                        </a>
                      </li>

                      <li class="nav-item shadow-sm">
                        <a class="nav-link text-nowrap py-3" id="profile6-tab-btn" data-toggle="tab" href="#profile6" role="tab" aria-controls="profile6" aria-selected="false">
                          Examen Preferencial
                        </a>
                      </li>

                      <li class="nav-item shadow-sm">
                        <a class="nav-link text-nowrap py-3" id="profile7-tab-btn" data-toggle="tab" href="#profile7" role="tab" aria-controls="profile7" aria-selected="false">
                          Impresión diagnostica
                        </a>
                      </li>

                      <li class="nav-item shadow-sm">
                        <a class="nav-link text-nowrap py-3" id="profile8-tab-btn" data-toggle="tab" href="#profile8" role="tab" aria-controls="profile8" aria-selected="false">
                          Tratamiento
                        </a>
                      </li>
                    </ul>

                    <div class="tab-content p-35 border-1 brc-grey-l1 shadow-sm bgc-white">

                      <div class="tab-pane fade show active text-95" id="profile1" role="tabpanel" aria-labelledby="profile1-tab-btn">

                        <div class="text-primary-d3 text-120 mb-2">
                          Datos Generales
                        </div>

                          <form class="mt-lg-3" id="formPaciente" name="formPaciente">

                              <input type="hidden" id="idPaciente" name="idPaciente" value="">
                              <div class="form-group row">
                                <div class="col-sm-3 col-form-label text-sm-right pr-0">
                                  <label for="id-form-field-1" class="mb-0">
                                    Nombres
                                  </label>
                                </div>

                                <div class="col-sm-9">
                                  <input type="text" class="form-control col-sm-8 col-md-6" id="txtNombre" name="txtNombre" required="">
                                </div>
                              </div>

                              <div class="form-group row">
                                <div class="col-sm-3 col-form-label text-sm-right pr-0">
                                  <label for="id-form-field-focus-1" class="mb-0">
                                    Apellido Paterno
                                  </label>
                                </div>

                                <div class="col-sm-9">
                                  <input type="text" class="form-control brc-on-focus brc-success-m1 col-sm-8 col-md-6" id="txtApellidoPaterno" name="txtApellidoPaterno" required="">
                                </div>
                              </div>

                              <div class="form-group row">
                                <div class="col-sm-3 col-form-label text-sm-right pr-0">
                                  <label for="id-form-field-focus-1" class="mb-0">
                                    Apellido Materno
                                  </label>
                                </div>

                                <div class="col-sm-9">
                                  <input type="text" class="form-control brc-on-focus brc-success-m1 col-sm-8 col-md-6" id="txtApellidoMaterno" name="txtApellidoMaterno" required="">
                                </div>
                              </div>

                              <div class="form-group row">
                                <div class="col-sm-3 col-form-label text-sm-right pr-0">
                                  <label for="id-form-field-focus-1" class="mb-0">
                                    DNI/CE/PASAPORTE
                                  </label>
                                </div>

                                <div class="col-sm-6">
                                  <input type="text" class="form-control brc-on-focus brc-success-m1 col-sm-8 col-md-6" id="txtNroDocumento" name="txtNroDocumento">
                                </div>
                              </div>

                              <div class="form-group row">
                                <div class="col-sm-3 col-form-label text-sm-right pr-0">
                                  <label for="id-form-field-1" class="mb-0">
                                    Fecha de nacimiento
                                  </label>
                                </div>

                                <div class="col-sm-9">
                                  <input type="date" class="form-control col-sm-8 col-md-4" id="dtpFechaNacimiento" name="dtpFechaNacimiento">
                                </div>
                              </div>

                              <div class="form-group row">
                                <div class="col-sm-3 col-form-label text-sm-right pr-0">
                                  <label for="id-form-field-focus-1" class="mb-0">
                                    Nro Pase Medico
                                  </label>
                                </div>

                                <div class="col-sm-6">
                                  <input type="text" class="form-control brc-on-focus brc-success-m1 col-sm-8 col-md-6" id="txtNroPaseMedico" name="txtNroPaseMedico">
                                </div>
                              </div>

                              <div class="form-group row">
                                <div class="col-sm-3 col-form-label text-sm-right pr-0">
                                  <label for="id-form-field-1" class="mb-0">
                                    Fecha Ultima Prueba Covid
                                  </label>
                                </div>

                                <div class="col-sm-9">
                                  <input type="date" class="form-control col-sm-8 col-md-4" id="dtpFechaPruebaCovid" name="dtpFechaPruebaCovid">
                                </div>
                              </div>

                              <div class="form-group row">
                                <div class="col-sm-3 col-form-label text-sm-right pr-0">
                                  <label for="id-form-field-1" class="mb-0">
                                    Empresa
                                  </label>
                                </div>

                                <div class="col-sm-4">
                                    <select class="form-control selectpicker" id="cboEmpresa" name="cboEmpresa" required >
                                        <option value="1">Activo</option>
                                        <option value="2">Inactivo</option>
                                    </select>
                                </div>
                              </div>

                              <div class="form-group row">
                                <div class="col-sm-3 col-form-label text-sm-right pr-0">
                                  <label for="id-form-field-1" class="mb-0">
                                    Puesto de Trabajo
                                  </label>
                                </div>

                                <div class="col-sm-4">
                                    <select class="form-control selectpicker" id="cboPuesto" name="cboPuesto" required >
                                        <option value="1">Activo</option>
                                        <option value="2">Inactivo</option>
                                    </select>
                                </div>
                              </div>

                              <div class="form-group row">
                                <div class="col-sm-3 col-form-label text-sm-right pr-0">
                                  <label for="id-form-field-1" class="mb-0">
                                    Turno
                                  </label>
                                </div>

                                <div class="col-sm-4">
                                    <select class="form-control selectpicker" id="cboTurno" name="cboTurno" required >
                                        <option value="1">Activo</option>
                                        <option value="2">Inactivo</option>
                                    </select>
                                </div>
                              </div>

                              <div class="form-group row">
                                <div class="col-sm-3 col-form-label text-sm-right pr-0">
                                  <label for="id-form-field-1" class="mb-0">
                                    Dias de Turno
                                  </label>
                                </div>

                                <div class="col-sm-4">
                                    <select class="form-control selectpicker" id="cboDiasTurno" name="cboDiasTurno" required >
                                        <option value="">Seleccionar</option>
                                        <option value="1">1 Dia</option>
                                        <option value="2">2 Dias</option>
                                        <option value="3">3 Dias</option>
                                        <option value="4">4 Dias</option>
                                        <option value="5">5 Dias</option>
                                        <option value="6">6 Dias</option>
                                        <option value="7">7 Dias</option>
                                        <option value="8">8 Dias</option>
                                        <option value="9">9 Dias</option>
                                        <option value="10">10 Dias</option>
                                    </select>
                                </div>
                              </div>

                              <div class="form-group row">
                                <div class="col-sm-3 col-form-label text-sm-right pr-0">
                                  <label for="id-form-field-1" class="mb-0">
                                    Grupo Sanguineo
                                  </label>
                                </div>

                                <div class="col-sm-4">
                                    <select class="form-control selectpicker" id="cboGrupoSanguineo" name="cboGrupoSanguineo" required >
                                        <option value="1">Activo</option>
                                        <option value="2">Inactivo</option>
                                    </select>
                                </div>
                              </div>
   
                              <div class="mt-5 border-t-1 bgc-secondary-l4 brc-secondary-l2 py-35 mx-n25">
                                <div class="offset-md-3 col-md-9 text-nowrap">
                                  <button class="btn btn-info btn-bold px-4" type="submit">
                                    <i class="fa fa-check mr-1"></i>
                                    Grabar
                                  </button>

                                  <button class="btn btn-outline-lightgrey btn-bgc-white btn-bold ml-2 px-4" type="reset">
                                    <i class="fa fa-undo mr-1"></i>
                                    Limpiar
                                  </button>
                                </div>
                              </div>
                          </form>

                        <a class="btn btn-white px-3 radius-round shadow-sm" href="#profile2" data-toggle="next">
                          Siguiente
                          <i class="ml-2 far fa-hand-point-down"></i>
                        </a>
                      </div>

                      <div class="tab-pane fade text-95" id="profile2" role="tabpanel" aria-labelledby="profile2-tab-btn">
                        <div class="text-primary-d3 text-120 mb-2">
                          Antecedentes Personales
                        </div>

                        <form class="mt-lg-3" autocomplete="off">
                              <div class="form-group row">
                                <div class="col-sm-3 col-form-label text-sm-right pr-0">
                                  <label for="id-form-field-1" class="mb-0">
                                    Antecedentes Generales
                                  </label>
                                </div>

                                <div class="col-sm-9">
                                  <input type="text" class="form-control col-sm-8 col-md-6" id="id-form-field-1">
                                </div>
                              </div>

                              <div class="form-group row">
                                <div class="col-sm-3 col-form-label text-sm-right pr-0">
                                  <label for="id-form-field-focus-1" class="mb-0">
                                    Antecedentes Relacionados con la condicion actual
                                  </label>
                                </div>
                             
                                <div class="col-sm-9">
                                  <label>
                                    <input type="radio" name="option" class="mr-1">
                                    SI
                                  </label>
                              
                                  <label>
                                    <input type="radio" name="option" class="mr-1">
                                    NO
                                  </label>
                                </div>


                              </div>

                              <div class="form-group row">
                                <div class="col-sm-3 col-form-label text-sm-right pr-0">
                                  <label for="id-form-field-focus-1" class="mb-0">
                                    Detalle del Antecedente
                                  </label>
                                </div>

                                <div class="col-sm-5">
                                    <textarea class="form-control" id="id-textarea-limit2" maxlength="100" placeholder="100 Limite de Caracteres"></textarea>
                                </div>

                              </div> 

                              <div class="mt-5 border-t-1 bgc-secondary-l4 brc-secondary-l2 py-35 mx-n25">
                                <div class="offset-md-3 col-md-9 text-nowrap">
                                  <button class="btn btn-info btn-bold px-4" type="button">
                                    <i class="fa fa-check mr-1"></i>
                                    Grabar
                                  </button>

                                  <button class="btn btn-outline-lightgrey btn-bgc-white btn-bold ml-2 px-4" type="reset">
                                    <i class="fa fa-undo mr-1"></i>
                                    Limpiar
                                  </button>
                                </div>
                              </div>
                          </form>



                        <a class="btn btn-white px-3 radius-round shadow-sm" href="#more14" data-toggle="next">
                          Go to step 3
                          <i class="ml-2 far fa-hand-point-down"></i>
                        </a>
                      </div> 

                      <div class="tab-pane fade text-95" id="profile3" role="tabpanel" aria-labelledby="profile3-tab-btn">
                        <div class="text-primary-d3 text-120 mb-2">
                          Motivo de Atencion
                        </div>

                        <form class="mt-lg-3" autocomplete="off">
                              <div class="form-group row">
                                <div class="col-sm-3 col-form-label text-sm-right pr-0">
                                  <label for="id-form-field-1" class="mb-0">
                                    Motivo de Atencion
                                  </label>
                                </div>

                                <div class="col-sm-4">
                                    <select class="form-control selectpicker" id="listStatus" name="listStatus" required >
                                        <option value="1">Activo</option>
                                        <option value="2">Inactivo</option>
                                    </select>
                                </div>
                              </div>
 
                              <div class="form-group row">
                                <div class="col-sm-3 col-form-label text-sm-right pr-0">
                                  <label for="id-form-field-focus-1" class="mb-0">
                                    Paciente Acude
                                  </label>
                                </div>

                                <div class="col-sm-5">
                                    <textarea class="form-control" id="id-textarea-limit2" maxlength="100" placeholder="100 Limite de Caracteres"></textarea>
                                </div>

                              </div> 

                              <div class="form-group row">
                                <div class="col-sm-3 col-form-label text-sm-right pr-0">
                                  <label for="id-form-field-focus-1" class="mb-0">
                                    Tiempo de Enfermedad
                                  </label>
                                </div>

                                <div class="col-sm-6">
                                  <input type="text" class="form-control brc-on-focus brc-success-m1 col-sm-8 col-md-6" id="id-form-field-focus-1">
                                </div>
                              </div>

                              <div class="form-group row">
                                <div class="col-sm-3 col-form-label text-sm-right pr-0">
                                  <label for="id-form-field-1" class="mb-0">
                                    Tipo de Inicio
                                  </label>
                                </div>

                                <div class="col-sm-4">
                                    <select class="form-control selectpicker" id="listStatus" name="listStatus" required >
                                        <option value="1">Activo</option>
                                        <option value="2">Inactivo</option>
                                    </select>
                                </div>
                              </div>
   
                              <div class="mt-5 border-t-1 bgc-secondary-l4 brc-secondary-l2 py-35 mx-n25">
                                <div class="offset-md-3 col-md-9 text-nowrap">
                                  <button class="btn btn-info btn-bold px-4" type="button">
                                    <i class="fa fa-check mr-1"></i>
                                    Grabar
                                  </button>

                                  <button class="btn btn-outline-lightgrey btn-bgc-white btn-bold ml-2 px-4" type="reset">
                                    <i class="fa fa-undo mr-1"></i>
                                    Limpiar
                                  </button>
                                </div>
                              </div>
                          </form>



                        <a class="btn btn-white px-3 radius-round shadow-sm" href="#more14" data-toggle="next">
                          Go to step 3
                          <i class="ml-2 far fa-hand-point-down"></i>
                        </a>
                      </div>

                      <div class="tab-pane fade text-95" id="profile4" role="tabpanel" aria-labelledby="profile4-tab-btn">
                        <div class="text-primary-d3 text-120 mb-2">
                          Funciones Biologicas
                        </div>

                        <form class="mt-lg-3" autocomplete="off">
                              
                              <div class="form-group row">
                                <div class="col-sm-3 col-form-label text-sm-right pr-0">
                                  <label for="id-form-field-1" class="mb-0">
                                    Apetito
                                  </label>
                                </div>

                                <div class="col-sm-4">
                                    <select class="form-control selectpicker" id="listStatus" name="listStatus" required >
                                        <option value="1">Activo</option>
                                        <option value="2">Inactivo</option>
                                    </select>
                                </div>
                              </div>

                              <div class="form-group row">
                                <div class="col-sm-3 col-form-label text-sm-right pr-0">
                                  <label for="id-form-field-1" class="mb-0">
                                    Sed
                                  </label>
                                </div>

                                <div class="col-sm-4">
                                    <select class="form-control selectpicker" id="listStatus" name="listStatus" required >
                                        <option value="1">Activo</option>
                                        <option value="2">Inactivo</option>
                                    </select>
                                </div>
                              </div>

                              <div class="form-group row">
                                <div class="col-sm-3 col-form-label text-sm-right pr-0">
                                  <label for="id-form-field-1" class="mb-0">
                                    Orina
                                  </label>
                                </div>

                                <div class="col-sm-4">
                                    <select class="form-control selectpicker" id="listStatus" name="listStatus" required >
                                        <option value="1">Activo</option>
                                        <option value="2">Inactivo</option>
                                    </select>
                                </div>
                              </div>


                              <div class="form-group row">
                                <div class="col-sm-3 col-form-label text-sm-right pr-0">
                                  <label for="id-form-field-1" class="mb-0">
                                   Deposiciones
                                  </label>
                                </div>

                                <div class="col-sm-4">
                                    <select class="form-control selectpicker" id="listStatus" name="listStatus" required >
                                        <option value="1">Activo</option>
                                        <option value="2">Inactivo</option>
                                    </select>
                                </div>
                              </div>
   
                              <div class="mt-5 border-t-1 bgc-secondary-l4 brc-secondary-l2 py-35 mx-n25">
                                <div class="offset-md-3 col-md-9 text-nowrap">
                                  <button class="btn btn-info btn-bold px-4" type="button">
                                    <i class="fa fa-check mr-1"></i>
                                    Grabar
                                  </button>

                                  <button class="btn btn-outline-lightgrey btn-bgc-white btn-bold ml-2 px-4" type="reset">
                                    <i class="fa fa-undo mr-1"></i>
                                    Limpiar
                                  </button>
                                </div>
                              </div>
                          </form>



                        <a class="btn btn-white px-3 radius-round shadow-sm" href="#more14" data-toggle="next">
                          Go to step 3
                          <i class="ml-2 far fa-hand-point-down"></i>
                        </a>
                      </div>

                      <div class="tab-pane fade text-95" id="profile5" role="tabpanel" aria-labelledby="profile5-tab-btn">
                        <div class="text-primary-d3 text-120 mb-2">
                          Examen Fisico
                        </div>

                        <form class="mt-lg-3" autocomplete="off">
                        
                              <div class="form-group row">
                                <div class="col-sm-3 col-form-label text-sm-right pr-0">
                                  <label for="id-form-field-3" class="mb-0">
                                    Presion Arterial
                                  </label>
                                </div>

                                <div class="col-sm-4">
                                  <input type="text" class="form-control col-sm-8 col-md-6 d-inline-block"   id="id-form-field-3">
                                  <span class="form-text d-inline-block text-95 text-grey ml-sm-2">
                                    mmHg
                                </span>
                                </div>
                              </div>

                              <div class="form-group row">
                                <div class="col-sm-3 col-form-label text-sm-right pr-0">
                                  <label for="id-form-field-3" class="mb-0">
                                    FC
                                  </label>
                                </div>

                                <div class="col-sm-4">
                                  <input type="text" class="form-control col-sm-8 col-md-6 d-inline-block"   id="id-form-field-3">
                                  <span class="form-text d-inline-block text-95 text-grey ml-sm-2">
                                    Latidos/Minuto
                                </span>
                                </div>
                              </div>

                              <div class="form-group row">
                                <div class="col-sm-3 col-form-label text-sm-right pr-0">
                                  <label for="id-form-field-3" class="mb-0">
                                    FR
                                  </label>
                                </div>

                                <div class="col-sm-4">
                                  <input type="text" class="form-control col-sm-8 col-md-6 d-inline-block"   id="id-form-field-3">
                                  <span class="form-text d-inline-block text-95 text-grey ml-sm-2">
                                    Repiraciones/Minuto
                                </span>
                                </div>
                              </div>

                              <div class="form-group row">
                                <div class="col-sm-3 col-form-label text-sm-right pr-0">
                                  <label for="id-form-field-3" class="mb-0">
                                    SAT02
                                  </label>
                                </div>

                                <div class="col-sm-4">
                                  <input type="text" class="form-control col-sm-8 col-md-6 d-inline-block"   id="id-form-field-3">
                                  <span class="form-text d-inline-block text-95 text-grey ml-sm-2">
                                    %
                                </span>
                                </div>
                              </div>

                              <div class="form-group row">
                                <div class="col-sm-3 col-form-label text-sm-right pr-0">
                                  <label for="id-form-field-3" class="mb-0">
                                    PESO
                                  </label>
                                </div>

                                <div class="col-sm-4">
                                  <input type="text" class="form-control col-sm-8 col-md-6 d-inline-block"   id="id-form-field-3">
                                  <span class="form-text d-inline-block text-95 text-grey ml-sm-2">
                                    Kg
                                </span>
                                </div>
                              </div>

                              <div class="form-group row">
                                <div class="col-sm-3 col-form-label text-sm-right pr-0">
                                  <label for="id-form-field-3" class="mb-0">
                                    TALLA
                                  </label>
                                </div>

                                <div class="col-sm-4">
                                  <input type="text" class="form-control col-sm-8 col-md-6 d-inline-block"   id="id-form-field-3">
                                  <span class="form-text d-inline-block text-95 text-grey ml-sm-2">
                                    Mtrs
                                </span>
                                </div>
                              </div>

                              <div class="form-group row">
                                <div class="col-sm-3 col-form-label text-sm-right pr-0">
                                  <label for="id-form-field-3" class="mb-0">
                                    IMC
                                  </label>
                                </div>

                                <div class="col-sm-4">
                                  <input type="text" class="form-control col-sm-8 col-md-6 d-inline-block"   id="id-form-field-3">
                                  <span class="form-text d-inline-block text-95 text-grey ml-sm-2">
                                    Kg/m2
                                </span>
                                </div>
                              </div> 

                              <div class="form-group row">
                                <div class="col-sm-3 col-form-label text-sm-right pr-0">
                                  <label for="id-form-field-3" class="mb-0">
                                    Temperatura
                                  </label>
                                </div>

                                <div class="col-sm-4">
                                  <input type="text" class="form-control col-sm-8 col-md-6 d-inline-block"   id="id-form-field-3">
                                  <span class="form-text d-inline-block text-95 text-grey ml-sm-2">
                                    ℃
                                </span>
                                </div>
                              </div>

                              <div class="form-group row">
                                <div class="col-sm-3 col-form-label text-sm-right pr-0">
                                  <label for="id-form-field-1" class="mb-0">
                                    Estado General
                                  </label>
                                </div>

                                <div class="col-sm-4">
                                    <select class="form-control selectpicker" id="listStatus" name="listStatus" required >
                                        <option value="1">Activo</option>
                                        <option value="2">Inactivo</option>
                                    </select>
                                </div>
                              </div>

                              <div class="form-group row">
                                <div class="col-sm-3 col-form-label text-sm-right pr-0">
                                  <label for="id-form-field-1" class="mb-0">
                                    Estado de Hidratacion
                                  </label>
                                </div>

                                <div class="col-sm-4">
                                    <select class="form-control selectpicker" id="listStatus" name="listStatus" required >
                                        <option value="1">Activo</option>
                                        <option value="2">Inactivo</option>
                                    </select>
                                </div>
                              </div>

                              <div class="form-group row">
                                <div class="col-sm-3 col-form-label text-sm-right pr-0">
                                  <label for="id-form-field-1" class="mb-0">
                                    Estado de Nutricion
                                  </label>
                                </div>

                                <div class="col-sm-4">
                                    <select class="form-control selectpicker" id="listStatus" name="listStatus" required >
                                        <option value="1">Activo</option>
                                        <option value="2">Inactivo</option>
                                    </select>
                                </div>
                              </div>


                              <div class="form-group row">
                                <div class="col-sm-3 col-form-label text-sm-right pr-0">
                                  <label for="id-form-field-1" class="mb-0">
                                    Estado Neurologico
                                  </label>
                                </div>

                                <div class="col-sm-4">
                                    <select class="form-control selectpicker" id="listStatus" name="listStatus" required >
                                        <option value="1">Activo</option>
                                        <option value="2">Inactivo</option>
                                    </select>
                                </div>
                              </div>
   
                              <div class="mt-5 border-t-1 bgc-secondary-l4 brc-secondary-l2 py-35 mx-n25">
                                <div class="offset-md-3 col-md-9 text-nowrap">
                                  <button class="btn btn-info btn-bold px-4" type="button">
                                    <i class="fa fa-check mr-1"></i>
                                    Grabar
                                  </button>

                                  <button class="btn btn-outline-lightgrey btn-bgc-white btn-bold ml-2 px-4" type="reset">
                                    <i class="fa fa-undo mr-1"></i>
                                    Limpiar
                                  </button>
                                </div>
                              </div>
                          </form>



                        <a class="btn btn-white px-3 radius-round shadow-sm" href="#more14" data-toggle="next">
                          Go to step 3
                          <i class="ml-2 far fa-hand-point-down"></i>
                        </a>
                      </div>

                      <div class="tab-pane fade text-95" id="profile6" role="tabpanel" aria-labelledby="profile6-tab-btn">
                        <div class="text-primary-d3 text-120 mb-2">
                          Examen Preferencial
                        </div>

                        <form class="mt-lg-3" autocomplete="off">
                              <div class="form-group row">
                                <div class="col-sm-3 col-form-label text-sm-right pr-0">
                                  <label for="id-form-field-1" class="mb-0">
                                    Ojo
                                  </label>
                                </div>

                                <div class="col-sm-4">
                                    <select class="form-control selectpicker" id="listStatus" name="listStatus" required >
                                        <option value="1">Activo</option>
                                        <option value="2">Inactivo</option>
                                    </select>
                                </div>
                              </div>

                              <div class="form-group row">
                                <div class="col-sm-3 col-form-label text-sm-right pr-0">
                                  <label for="id-form-field-1" class="mb-0">
                                    Nariz
                                  </label>
                                </div>

                                <div class="col-sm-4">
                                    <select class="form-control selectpicker" id="listStatus" name="listStatus" required >
                                        <option value="1">Activo</option>
                                        <option value="2">Inactivo</option>
                                    </select>
                                </div>
                              </div>

                              <div class="form-group row">
                                <div class="col-sm-3 col-form-label text-sm-right pr-0">
                                  <label for="id-form-field-1" class="mb-0">
                                    Faringe
                                  </label>
                                </div>

                                <div class="col-sm-4">
                                    <select class="form-control selectpicker" id="listStatus" name="listStatus" required >
                                        <option value="1">Activo</option>
                                        <option value="2">Inactivo</option>
                                    </select>
                                </div>
                              </div>

                              <div class="form-group row">
                                <div class="col-sm-3 col-form-label text-sm-right pr-0">
                                  <label for="id-form-field-1" class="mb-0">
                                    Torax y Pulmones
                                  </label>
                                </div>

                                <div class="col-sm-4">
                                    <select class="form-control selectpicker" id="listStatus" name="listStatus" required >
                                        <option value="1">Activo</option>
                                        <option value="2">Inactivo</option>
                                    </select>
                                </div>
                              </div>

                              <div class="form-group row">
                                <div class="col-sm-3 col-form-label text-sm-right pr-0">
                                  <label for="id-form-field-1" class="mb-0">
                                    Cardiovascular
                                  </label>
                                </div>

                                <div class="col-sm-4">
                                    <select class="form-control selectpicker" id="listStatus" name="listStatus" required >
                                        <option value="1">Activo</option>
                                        <option value="2">Inactivo</option>
                                    </select>
                                </div>
                              </div>

                              <div class="form-group row">
                                <div class="col-sm-3 col-form-label text-sm-right pr-0">
                                  <label for="id-form-field-1" class="mb-0">
                                    Abdomen
                                  </label>
                                </div>

                                <div class="col-sm-4">
                                    <select class="form-control selectpicker" id="listStatus" name="listStatus" required >
                                        <option value="1">Activo</option>
                                        <option value="2">Inactivo</option>
                                    </select>
                                </div>
                              </div>

                              <div class="form-group row">
                                <div class="col-sm-3 col-form-label text-sm-right pr-0">
                                  <label for="id-form-field-1" class="mb-0">
                                    Genito Urinario
                                  </label>
                                </div>

                                <div class="col-sm-4">
                                    <select class="form-control selectpicker" id="listStatus" name="listStatus" required >
                                        <option value="1">Activo</option>
                                        <option value="2">Inactivo</option>
                                    </select>
                                </div>
                              </div>

                              <div class="form-group row">
                                <div class="col-sm-3 col-form-label text-sm-right pr-0">
                                  <label for="id-form-field-1" class="mb-0">
                                    Soma
                                  </label>
                                </div>

                                <div class="col-sm-4">
                                    <select class="form-control selectpicker" id="listStatus" name="listStatus" required >
                                        <option value="1">Activo</option>
                                        <option value="2">Inactivo</option>
                                    </select>
                                </div>
                              </div>

                              <div class="form-group row">
                                <div class="col-sm-3 col-form-label text-sm-right pr-0">
                                  <label for="id-form-field-1" class="mb-0">
                                    Sistema Nervioso
                                  </label>
                                </div>

                                <div class="col-sm-4">
                                    <select class="form-control selectpicker" id="listStatus" name="listStatus" required >
                                        <option value="1">Activo</option>
                                        <option value="2">Inactivo</option>
                                    </select>
                                </div>
                              </div>
   
                              <div class="mt-5 border-t-1 bgc-secondary-l4 brc-secondary-l2 py-35 mx-n25">
                                <div class="offset-md-3 col-md-9 text-nowrap">
                                  <button class="btn btn-info btn-bold px-4" type="button">
                                    <i class="fa fa-check mr-1"></i>
                                    Grabar
                                  </button>

                                  <button class="btn btn-outline-lightgrey btn-bgc-white btn-bold ml-2 px-4" type="reset">
                                    <i class="fa fa-undo mr-1"></i>
                                    Limpiar
                                  </button>
                                </div>
                              </div>
                          </form>



                        <a class="btn btn-white px-3 radius-round shadow-sm" href="#more14" data-toggle="next">
                          Go to step 3
                          <i class="ml-2 far fa-hand-point-down"></i>
                        </a>
                      </div>

                      <div class="tab-pane fade text-95" id="profile7" role="tabpanel" aria-labelledby="profile7-tab-btn">
                        <div class="text-primary-d3 text-120 mb-2">
                          Impresion Diagnostica
                        </div>

                        <form class="mt-lg-3" autocomplete="off">
                              <div class="form-group row">
                                <div class="col-sm-3 col-form-label text-sm-right pr-0">
                                  <label for="id-form-field-1" class="mb-0">
                                    CIE10
                                  </label>
                                </div>

                                <div class="col-sm-9">
                                  <input type="text" class="form-control col-sm-8 col-md-6" id="id-form-field-1">
                                </div>
                              </div>

                              <div class="form-group row">
                                <div class="col-sm-3 col-form-label text-sm-right pr-0">
                                  <label for="id-form-field-focus-1" class="mb-0">
                                    Diagnostico Medico
                                  </label>
                                </div>

                                <div class="col-sm-5">
                                    <textarea class="form-control" id="id-textarea-limit2" maxlength="100" placeholder="100 character limit"></textarea>
                                </div>

                              </div> 
   
                              <div class="mt-5 border-t-1 bgc-secondary-l4 brc-secondary-l2 py-35 mx-n25">
                                <div class="offset-md-3 col-md-9 text-nowrap">
                                  <button class="btn btn-info btn-bold px-4" type="button">
                                    <i class="fa fa-check mr-1"></i>
                                    Grabar
                                  </button>

                                  <button class="btn btn-outline-lightgrey btn-bgc-white btn-bold ml-2 px-4" type="reset">
                                    <i class="fa fa-undo mr-1"></i>
                                    Limpiar
                                  </button>
                                </div>
                              </div>
                          </form>



                        <a class="btn btn-white px-3 radius-round shadow-sm" href="#more14" data-toggle="next">
                          Go to step 3
                          <i class="ml-2 far fa-hand-point-down"></i>
                        </a>
                      </div>

                      <div class="tab-pane fade text-95" id="profile8" role="tabpanel" aria-labelledby="profile8-tab-btn">
                        <div class="text-primary-d3 text-120 mb-2">
                          Tratamiento
                        </div>

                        <form class="mt-lg-3" autocomplete="off">
                              
                              <div class="form-group row">
                                <div class="col-sm-3 col-form-label text-sm-right pr-0">
                                  <label for="id-form-field-1" class="mb-0">
                                    Codigo de Medicamentos
                                  </label>
                                </div>

                                <div class="col-sm-4">
                                    <select class="form-control selectpicker" id="listStatus" name="listStatus" required >
                                        <option value="1">Activo</option>
                                        <option value="2">Inactivo</option>
                                    </select>
                                </div>
                              </div>

                              <div class="form-group row">
                                <div class="col-sm-3 col-form-label text-sm-right pr-0">
                                  <label for="id-form-field-focus-1" class="mb-0">
                                    Indicaciones adicionales
                                  </label>
                                </div>

                                <div class="col-sm-5">
                                    <textarea class="form-control" id="id-textarea-limit2" maxlength="100" placeholder="100 character limit"></textarea>
                                </div>
                              </div> 

                              <div class="form-group row">
                                <div class="col-sm-3 col-form-label text-sm-right pr-0">
                                  <label for="id-form-field-1" class="mb-0">
                                    Reevaluacion en Topico
                                  </label>
                                </div>

                                <div class="col-sm-4">
                                    <select class="form-control selectpicker" id="listStatus" name="listStatus" required >
                                        <option value="1">Activo</option>
                                        <option value="2">Inactivo</option>
                                    </select>
                                </div>
                              </div>

                              <div class="form-group row">
                                <div class="col-sm-3 col-form-label text-sm-right pr-0">
                                  <label for="id-form-field-1" class="mb-0">
                                    Traslado
                                  </label>
                                </div>

                                <div class="col-sm-4">
                                    <select class="form-control selectpicker" id="listStatus" name="listStatus" required >
                                        <option value="1">Activo</option>
                                        <option value="2">Inactivo</option>
                                    </select>
                                </div>
                              </div>

                              <div class="form-group row">
                                <div class="col-sm-3 col-form-label text-sm-right pr-0">
                                  <label for="id-form-field-1" class="mb-0">
                                    Interconsulta por especialidad
                                  </label>
                                </div>

                                <div class="col-sm-4">
                                    <select class="form-control selectpicker" id="listStatus" name="listStatus" required >
                                        <option value="1">Activo</option>
                                        <option value="2">Inactivo</option>
                                    </select>
                                </div>
                              </div>

                              <div class="form-group row">
                                <div class="col-sm-3 col-form-label text-sm-right pr-0">
                                  <label for="id-form-field-1" class="mb-0">
                                    Estudios Complementarios
                                  </label>
                                </div>

                                <div class="col-sm-4">
                                    <select class="form-control selectpicker" id="listStatus" name="listStatus" required >
                                        <option value="1">Activo</option>
                                        <option value="2">Inactivo</option>
                                    </select>
                                </div>
                              </div>
   
                              <div class="mt-5 border-t-1 bgc-secondary-l4 brc-secondary-l2 py-35 mx-n25">
                                <div class="offset-md-3 col-md-9 text-nowrap">
                                  <button class="btn btn-info btn-bold px-4" type="button">
                                    <i class="fa fa-check mr-1"></i>
                                    Grabar
                                  </button>

                                  <button class="btn btn-outline-lightgrey btn-bgc-white btn-bold ml-2 px-4" type="reset">
                                    <i class="fa fa-undo mr-1"></i>
                                    Limpiar
                                  </button>
                                </div>
                              </div>
                          </form>



                        <a class="btn btn-white px-3 radius-round shadow-sm" href="#more14" data-toggle="next">
                          Go to step 3
                          <i class="ml-2 far fa-hand-point-down"></i>
                        </a>
                      </div>
 
                    </div>

                  </div>
          </div><!-- /.card -->

        </div><!-- /.col -->

      </div><!-- /.row -->     
    </div>         

 <?php footerAdmin($data); ?>
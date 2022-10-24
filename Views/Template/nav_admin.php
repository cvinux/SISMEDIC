<div id="sidebar" class="sidebar sidebar-white sidebar-fixed sidebar-backdrop expandable" data-swipe="true" data-dismiss="true">
          <div class="sidebar-inner">
 
            <!-- .navbar-brand inside sidebar, only show in desktop view -->
            <div class="d-none d-xl-flex sidebar-section-item m-0 fadeable-left fadeable-top">
              <div class="fadeinable">
                <div class="py-2 mx-1 border-b-1 brc-secondary-l3" id="sidebar-header-brand1">
                  <a class="navbar-brand text-140">
                    <i class="fa fa-leaf text-success-m2"></i>
                  </a>
                </div>
              </div>

              <div class="fadeable w-100 ">
                <div class="py-2 text-center mx-3 border-b-1 brc-secondary-l3" id="sidebar-header-brand2">

                  <a class="navbar-brand ml-n2 text-140 text-grey-d2" href="#">
                    <i class="fa fa-leaf mr-1 text-success-m2 text-105"></i>
                    SISMEDIC <span> System</span>
                  </a>

                </div>
              </div>
            </div><!-- /.sidebar-section-item  -->


            <div class="pt-2 flex-grow-1 ace-scroll" data-ace-scroll="{}">
              <!-- some part of sidebar header (brand) is outside scrollable area ^ -->
              <div class="sidebar-section-item fadeable-left fadeable-top">
                <div class="fadeinable">
                  <img alt="Natalie's Photo" src="<?= base_url(); ?>/Assets/image/avatar/avatar3.jpg" width="48" class="p-2px border-2 brc-primary-tp2 radius-round" />
                </div>

                <div class="fadeable hideable">

                  <div class="py-2 d-flex flex-column align-items-center">
                    <div>
                      <img alt="Natalie's Photo" src="<?= base_url(); ?>/Assets/image/avatar/avatar3.jpg" class="p-2px border-2 brc-primary-tp2 radius-round" />
                    </div>

                    <div class="text-center mt-1" id="id-user-info">
                      <a href="#id-user-menu" class="d-style pos-rel collapsed text-blue-d2 accordion-toggle no-underline bgc-h-primary-l2 px-1 py-2px" data-toggle="collapse" aria-expanded="false">
                        <span class="text-95 font-bolder">Natalie Kidman</span>
                        <i class="fa fa-caret-down text-90 d-collapsed"></i>
                        <i class="fa fa-caret-up text-90 d-n-collapsed"></i>
                      </a>
                      <div class="text-muted text-85">Marketing</div>
                    </div><!-- /#id-user-info -->

                    <div class="collapse" id="id-user-menu">
                      <div class="mt-3">
                        <a href="#" class="btn btn-light-blue btn-brc-white btn-h-light-blue radius-round py-2 px-1 border-2 shadow-sm">
                          <i class="fa fa-envelope w-4 text-110 text-blue-d1"></i>
                        </a>

                        <a href="#" class="btn btn-light-blue btn-brc-white btn-h-light-blue radius-round py-2 px-1 border-2 shadow-sm">
                          <i class="fa fa-users w-4 text-110 text-blue-d1"></i>
                        </a>

                        <a href="#" class="btn btn-light-blue btn-brc-white btn-h-light-blue radius-round py-2 px-1 border-2 shadow-sm">
                          <i class="fa fa-star w-4 text-110 text-blue-d1"></i>
                        </a>
                      </div>
                    </div><!-- /.collapse -->
                  </div>

                </div>
              </div>
              <!-- optional `nav` tag -->
              <nav aria-label="Main">
                <ul class="nav flex-column mt-2 has-active-border">

                  <li class="nav-item">

                    <a href="<?= base_url(); ?>/Dashboard" class="nav-link">
                      <i class="nav-icon fa fa-tachometer-alt nav-icon-round bgc-primary-tp1"></i>
                      <span class="nav-text fadeable">
                        <span>Dashboard</span>
                      </span>


                    </a>

                    <b class="sub-arrow"></b>

                  </li>


                  <li class="nav-item active open">

                    <a href="#" class="nav-link dropdown-toggle">
                      <i class="nav-icon fa fa-cube nav-icon-round bgc-orange-tp1"></i>
                      <span class="nav-text fadeable">
                        <span>Gestionar</span>
                      </span>

                      <b class="caret fa fa-angle-left rt-n90"></b>

                      <!-- or you can use custom icons. first add `d-style` to 'A' -->
                      <!--
                        <b class="caret d-n-collapsed fa fa-minus text-80"></b>
                        <b class="caret d-collapsed fa fa-plus text-80"></b>
                       -->
                    </a>

                    <div class="hideable submenu collapse show">
                      <ul class="submenu-inner">

                        <li class="nav-item">

                          <a href="<?= base_url(); ?>/pacientes/hojaatencion" class="nav-link">

                            <span class="nav-text">
                              <span>Hoja de Atencion</span>
                            </span>


                          </a>


                        </li>


                        <li class="nav-item active">

                          <a href="<?= base_url(); ?>/pacientes" class="nav-link">

                            <span class="nav-text">
                              <span>Lista de Pacientes</span>
                            </span>


                          </a>


                        </li>


                        <li class="nav-item">

                          <a href="#" class="nav-link">

                            <span class="nav-text">
                              <span>Informe Medico</span>
                            </span>


                          </a>


                        </li>


                        <li class="nav-item">

                          <a href="#" class="nav-link">

                            <span class="nav-text">
                              <span>Prescripcion Medica</span>
                            </span>


                          </a>


                        </li>


                        <li class="nav-item">

                          <a href="#" class="nav-link">

                            <span class="nav-text">
                              <span>Kardex de Medicamentos</span>
                            </span>


                          </a>


                        </li>

 
                      </ul>
                    </div>

                    <b class="sub-arrow"></b>

                  </li>


                  <li class="nav-item">

                    <a href="#" class="nav-link dropdown-toggle collapsed">
                      <i class="nav-icon fa fa-desktop nav-icon-round bgc-green-tp1"></i>
                      <span class="nav-text fadeable">
                        <span>Configuracion</span>
                      </span>

                      <b class="caret fa fa-angle-left rt-n90"></b>

                      <!-- or you can use custom icons. first add `d-style` to 'A' -->
                      <!--
                        <b class="caret d-n-collapsed fa fa-minus text-80"></b>
                        <b class="caret d-collapsed fa fa-plus text-80"></b>
                       -->
                    </a>

                    <div class="hideable submenu collapse">
                      <ul class="submenu-inner">

                        <li class="nav-item">

                          <a href="#" class="nav-link">

                            <span class="nav-text">
                              <span>Examen Medico</span>
                            </span>


                          </a>


                        </li>


                        <li class="nav-item">

                          <a href="#" class="nav-link">

                            <span class="nav-text">
                              <span>Funciones Biologicas</span>
                            </span>


                          </a>


                        </li>


                        <li class="nav-item">

                          <a href="#" class="nav-link">

                            <span class="nav-text">
                              <span>Funciones Fisicas</span>
                            </span>


                          </a>


                        </li> 

                        <li class="nav-item">

                          <a href="#" class="nav-link">

                            <span class="nav-text">
                              <span>Motivo Atencion</span>
                            </span>


                          </a>


                        </li> 

                      </ul>
                    </div>

                    <b class="sub-arrow"></b>

                  </li>


                  <li class="nav-item">

                    <a href="#" class="nav-link dropdown-toggle collapsed">
                      <i class="nav-icon fa fa-table nav-icon-round bgc-purple-tp1"></i>
                      <span class="nav-text fadeable">
                        <span>Mantenimiento</span>
                      </span>

                      <b class="caret fa fa-angle-left rt-n90"></b>

                      <!-- or you can use custom icons. first add `d-style` to 'A' -->
                      <!--
                        <b class="caret d-n-collapsed fa fa-minus text-80"></b>
                        <b class="caret d-collapsed fa fa-plus text-80"></b>
                       -->
                    </a>

                    <div class="hideable submenu collapse">
                      <ul class="submenu-inner">

                        <li class="nav-item">

                          <a href="<?= base_url(); ?>/usuarios" class="nav-link">

                            <span class="nav-text">
                              <span>Usuarios</span>
                            </span>


                          </a>


                        </li>


                        <li class="nav-item">

                          <a href="<?= base_url(); ?>/roles" class="nav-link">

                            <span class="nav-text">
                              <span>Roles</span>
                            </span>


                          </a>


                        </li>


                         

                      </ul>
                    </div>

                    <b class="sub-arrow"></b>

                  </li>


                  <li class="nav-item">

                    <a href="#" class="nav-link dropdown-toggle collapsed">
                      <i class="nav-icon fa fa-edit nav-icon-round bgc-red-tp1"></i>
                      <span class="nav-text fadeable">
                        <span>Reportes</span>
                      </span>

                      <b class="caret fa fa-angle-left rt-n90"></b>

                      <!-- or you can use custom icons. first add `d-style` to 'A' -->
                      <!--
                        <b class="caret d-n-collapsed fa fa-minus text-80"></b>
                        <b class="caret d-collapsed fa fa-plus text-80"></b>
                       -->
                    </a>

                    <div class="hideable submenu collapse">
                      <ul class="submenu-inner">

                        <li class="nav-item">

                          <a href="#" class="nav-link">

                            <span class="nav-text">
                              <span>Reporte</span>
                            </span>


                          </a>


                        </li>


                        <li class="nav-item">

                          <a href="#" class="nav-link">

                            <span class="nav-text">
                              <span>Reporte Total</span>
                            </span>


                          </a>


                        </li> 

                      </ul>
                    </div>

                    <b class="sub-arrow"></b>

                  </li>

 
                </ul>
              </nav>

            </div><!-- /.ace-scroll -->


            <div class="sidebar-section">
              <div class="sidebar-section-item fadeable-left fadeable-top">
                <div class="fadeinable">
                  <button type="button" class="btn btn-primary btn-bold radius-1">
                    <i class="fa fa-cloud"></i>
                  </button>
                </div>

                <div id="sidebar-footer" class="fadeable text-center border-t-1 brc-secondary-l3 w-95">
                  <div class="py-2">
                    <a type="button" class="btn btn-primary px-5 btn-bold radius-1" href="<?= base_url(); ?>/logout">
                      Cerrar Sesion
                    </a>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
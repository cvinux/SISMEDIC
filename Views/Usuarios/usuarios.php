 <?php 
    headerAdmin($data);  
     getModal('modalUsuarios',$data);
  ?>


       <div id="contentAjax"></div> 
       <div class="page-content container container-plus">
            <div class="page-header mb-2 pb-2 flex-column flex-sm-row align-items-start align-items-sm-center py-25 px-1">
              <h1 class="page-title text-primary-d2 text-140">
                Mantenimiento Usuarios
                <small class="page-info text-dark-m3">
                  <i class="fa fa-angle-double-right text-80"></i>
                  Listado Usuarios
                </small>
              </h1>

              <div class="page-tools mt-3 mt-sm-0 mb-sm-n1">
                <!-- dataTables search box will be inserted here dynamically -->
              </div>
            </div>
            <div>
                <?php if($_SESSION['permisosMod']['w']){ ?>
                    <button class="btn btn-primary" type="button" onclick="openModal();" ><i class="fas fa-plus-circle"></i> Nuevo</button>
                <?php } ?>
            </div>

            <div class="card bcard h-auto">
              <div autocomplete="off" class="border-t-3 brc-blue-m2">

                <table   class="d-style w-100 table text-dark-m1 text-95 border-y-1 brc-black-tp11 collapsed dtr-table"  id="tableUsuarios">
                  <!-- add `collapsed` by default ... it will be removed by default -->
                  <!-- thead with .sticky-nav -->
                  <thead class="sticky-nav text-secondary-m1 text-uppercase text-85">
                    <tr>
                     <th class="border-0 bgc-white bgc-h-yellow-l3 shadow-sm">
                        IdUsuario
                      </th>
                      <th class="border-0 bgc-white bgc-h-yellow-l3 shadow-sm">
                        Nombre
                      </th>
                      <th class="border-0 bgc-white bgc-h-yellow-l3 shadow-sm">
                        Apellido Paterno
                      </th>
                       <th class="border-0 bgc-white bgc-h-yellow-l3 shadow-sm">
                        Apellido Materno
                      </th>
                      <th class="border-0 bgc-white bgc-h-yellow-l3 shadow-sm">
                        Telefono
                      </th>
                      <th class="border-0 bgc-white bgc-h-yellow-l3 shadow-sm">
                        Email
                      </th> 
                      <th class="border-0 bgc-white bgc-h-yellow-l3 shadow-sm">
                        Rol
                      </th>
                      <th class="border-0 bgc-white bgc-h-yellow-l3 shadow-sm">
                        Status
                      </th>  
                      <th class="border-0 bgc-white bgc-h-yellow-l3 shadow-sm">
                        Acciones
                      </th> 
                    </tr>
                  </thead>

                  <tbody class="pos-rel">
                    
                  </tbody>
                </table>

              </div>
            </div>
          </div>
 
 
 
 
<?php
  footerAdmin($data); 
  ?>
    
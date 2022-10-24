<html lang="es">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
    <base href="../">

    <title>Login - SYSMEDIC Admin</title>

    <!-- include common vendor stylesheets & fontawesome -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/node_modules/bootstrap/dist/css/bootstrap.css" data-rtl="<?= base_url(); ?>/dist/css/rtl/bootstrap.css">

    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/node_modules/@fortawesome/fontawesome-free/css/fontawesome.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/node_modules/@fortawesome/fontawesome-free/css/regular.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/node_modules/@fortawesome/fontawesome-free/css/brands.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/node_modules/@fortawesome/fontawesome-free/css/solid.css">



    <!-- include vendor stylesheets used in "Login" page. see "/views//pages/partials/page-login/@vendor-stylesheets.hbs" -->


    <!-- include fonts -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/dist/css/ace-font.css">



    <!-- ace.css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/dist/css/ace.css">


    <!-- favicon -->
    <link rel="icon" type="image/png" href="<?= base_url(); ?>/assets/favicon.png">

    <!-- "Login" page styles, specific to this page for demo only -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/views/pages/page-login/@page-style.css">
 
  <body class="is-document-loaded">
    <div class="body-container">

      <div class="main-container container bgc-transparent">

        <div class="main-content minh-100 justify-content-center">
          <div class="p-2 p-md-4">
            <div class="row justify-content-center" id="row-1">
              <div class="bgc-white shadow radius-1 overflow-hidden col-12 col-lg-6 col-xl-5">

                <div class="row" id="row-2">

                  


                  <div id="id-col-main" class="col-12 py-lg-5 bgc-white px-0">
                    <!-- you can also use these tab links -->
                    <ul class="d-none mt-n4 mb-4 nav nav-tabs nav-tabs-simple justify-content-end bgc-black-tp11" role="tablist">
                      <li class="nav-item mx-2">
                        <a class="nav-link active px-2" data-toggle="tab" href="#id-tab-login" role="tab" aria-controls="id-tab-login" aria-selected="true">
                          Login
                        </a>
                      </li>
                      <li class="nav-item mx-2">
                        <a class="nav-link px-2" data-toggle="tab" href="#id-tab-signup" role="tab" aria-controls="id-tab-signup" aria-selected="false">
                          Signup
                        </a>
                      </li>
                    </ul>


                    <div class="tab-content tab-sliding border-0 p-0" data-swipe="right">

                      <div class="tab-pane active show mh-100 px-3 px-lg-0 pb-3" id="id-tab-login">
                        <!-- show this in desktop -->
                        

                        <!-- show this in mobile device -->
                        <div class="text-secondary-m1 my-4 text-center">
                          <a href="html/dashboard.html">
                            <i class="fa fa-leaf text-success-m2 text-200 mb-4"></i>
                          </a>
                          <h1 class="text-170">
                            <span class="text-blue-d1">
                                SISMEDIC <span class="text-80 text-dark-tp3"> System</span>
                            </span>
                          </h1>

                          Bienvenido
                        </div>


                        <form class="form-row mt-4" name="formLogin" action="" id="formLogin">
                          <div class="form-group col-sm-10 offset-sm-1 col-md-8 offset-md-2">
                            <div class="d-flex align-items-center input-floating-label text-blue brc-blue-m2">
                              <input placeholder="Usuario" type="text" class="form-control form-control-lg pr-4 shadow-none" id="txtEmail" name="txtEmail">
                              <i class="fa fa-user text-grey-m2 ml-n4"></i>
                              <label class="floating-label text-grey-l1 ml-n3" for="id-login-username">
                                Usuario
                              </label>
                            </div>
                          </div>


                          <div class="form-group col-sm-10 offset-sm-1 col-md-8 offset-md-2 mt-2 mt-md-1">
                            <div class="d-flex align-items-center input-floating-label text-blue brc-blue-m2">
                              <input placeholder="Contraseña" type="password" class="form-control form-control-lg pr-4 shadow-none" id="txtPassword" name="txtPassword" >
                              <i class="fa fa-key text-grey-m2 ml-n4"></i>
                              <label class="floating-label text-grey-l1 ml-n3" for="id-login-password">
                                Contraseña
                              </label>
                            </div>
                          </div>
 


                          <div class="form-group col-sm-10 offset-sm-1 col-md-8 offset-md-2">
                            <label class="d-inline-block mt-3 mb-0 text-dark-l1">
                              <input type="checkbox" class="mr-1" id="id-remember-me">
                              Recuerdame
                            </label>

                            <button  class="btn btn-primary btn-block px-4 btn-bold mt-2 mb-4"  type="submit">
                              Iniciar Sesion
                            </button>
                          </div>
                        </form>
 
              
                      </div>
 

                    </div><!-- .tab-content -->
                  </div>

                </div><!-- /.row -->

              </div><!-- /.col -->
            </div><!-- /.row -->

            <div class="d-lg-none my-3 text-white-tp1 text-center">
              <i class="fa fa-leaf text-success-l3 mr-1 text-110"></i> SISMEDIC Company © 2022
            </div>
          </div>
        </div>

      </div>

    </div>
    <script>
        const base_url = "<?= base_url(); ?>";
    </script>
    <script src="<?= base_url(); ?>/js/functions_login.js"></script>
    <!-- include common vendor scripts used in demo pages -->
    <script src="<?= base_url(); ?>/node_modules/jquery/dist/jquery.js"></script>
    <script src="<?= base_url(); ?>/node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="<?= base_url(); ?>/node_modules/bootstrap/dist/js/bootstrap.js"></script>


    <!-- include vendor scripts used in "Login" page. see "/views//pages/partials/page-login/@vendor-scripts.hbs" -->


    <!-- include ace.js -->
    <script src="<?= base_url(); ?>/dist/js/ace.js"></script>



    <!-- demo.js is only for Ace's demo and you shouldn't use it -->
   <!--  <script src="<?= base_url(); ?>/app/browser/demo.js"></script> -->



    <!-- "Login" page script to enable its demo functionality -->
    <!-- <script src="<?= base_url(); ?>/views/pages/page-login/@page-script.js"></script>-->
 
</body></html>
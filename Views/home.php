<!doctype html>
<html lang="eS">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
    <base href="../" />

    <title>Landing Page 2 - Ace Admin</title>

    <!-- include common vendor stylesheets & fontawesome -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/node_modules/bootstrap/dist/css/bootstrap.css">

    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/node_modules/@fortawesome/fontawesome-free/css/fontawesome.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/node_modules/@fortawesome/fontawesome-free/css/regular.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/node_modules/@fortawesome/fontawesome-free/css/brands.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/node_modules/@fortawesome/fontawesome-free/css/solid.css">



    <!-- include vendor stylesheets used in "Landing Page 2" page. see "/views//pages/partials/landing-page-2/@vendor-stylesheets.hbs" -->


    <!-- include fonts -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/dist/css/ace-font.css">



    <!-- ace.css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/dist/css/ace.css">


    <!-- favicon -->
    <link rel="icon" type="image/png" href="<?= base_url(); ?>/Assets/favicon.png" />

    <!-- "Landing Page 2" page styles, specific to this page for demo only -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/views/pages/landing-page-2/@page-style.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/dist/css/ace-themes.css">

  </head>

  <body>
    <div class="body-container">
      <div class="pos-abs" id="scroll-down"></div>

      <nav class="navbar navbar-fixed navbar-expand-lg navbar-white">
        <div class="navbar-inner shadow-sm border-b-1 brc-grey-l2">
          <div class="container">


            <button type="button" class="navbar-toggler btn btn-burger burger-times static collapsed d-flex d-lg-none ml-2" data-toggle="collapse" data-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navbar menu">
              <span class="bars text-dark-tp3"></span>
            </button><!-- mobile navbar toggler button -->


            <div class="navbar-intro justify-content-xl-between w-auto border-0">
              <a class="navbar-brand text-dark-tp3 text-180" href="#">
                <i class="fa fa-plane rotate-n45 text-105 text-blue-m1 mr-1"></i>
                <span>ACE</span>
                <span class="text-70">Travel</span>
              </a><!-- /.navbar-brand -->
            </div><!-- /.navbar-intro -->


            <div class="navbar-menu collapse navbar-collapse navbar-backdrop ml-auto mr-lg-4" id="navbarMenu">

              <div class="navbar-nav">
                <ul class="nav nav-compact-3">

                  <li class="nav-item dropdown dropdown-mega dropdown-hover">
                    <a class="btn btn-white btn-h-default btn-a-default dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                      <i class="fa fa-list-alt mr-2 d-lg-none"></i>
                      Mega
                      <i class="caret fa fa-angle-down d-none d-lg-block"></i>
                      <i class="caret fa fa-angle-left d-block d-lg-none"></i>
                    </a>
                    <div class="p-0 dropdown-menu bgc-default-l4 brc-primary-m3 border-b-2 ace-scrollbar">
                      <div class="d-flex flex-column">

                        <div class="row mx-0">

                          <div class="col-lg-4 col-12 p-2 p-lg-3 p-xl-4 d-flex flex-column align-items-center">
                            <div class="w-100 mb-3">
                              <h5 class="col-lg-9 mx-auto text-dark-m2 px-0">
                                <i class="fa fa-clipboard-check mr-1 text-purple-m1"></i>
                                Current Tasks
                              </h5>
                            </div>

                            <div class="col-lg-9 list-group px-0 border-1 brc-default-l2 radius-1 shadow-md">
                              <a href="#" class="border-0 bgc-h-primary-l4 list-group-item list-group-item-action">
                                <i class="fab fa-facebook text-blue-m1 text-110 mr-2"></i>
                                Cras justo odio
                              </a>
                              <a href="#" class="border-0 bgc-h-primary-l4 list-group-item list-group-item-action text-primary">
                                <i class="fa fa-user text-success-m1 text-110 mr-2"></i>
                                Dapibus ac facilisis in
                              </a>
                              <a href="#" class="border-0 bgc-h-primary-l4 list-group-item list-group-item-action">
                                <i class="fa fa-clock text-purple-m1 text-110 mr-2"></i>
                                Morbi leo risus
                              </a>
                              <a href="#" class="border-0 list-group-item list-group-item-action bgc-success-l2">
                                <i class="fa fa-check text-orange-d1 text-110 mr-2"></i>
                                Porta ac consectetur
                                <span class="ml-2 badge badge-primary badge-pill badge-lg">14</span>
                              </a>
                              <a href="#" class="border-0 list-group-item list-group-item-action disabled">Vestibulum at eros</a>
                            </div>
                          </div><!-- .col:mega tasks -->



                          <div class="bgc-white col-lg-4 col-12 p-4">
                            <h5 class="text-dark-m2">
                              <i class="fas fa-bullhorn mr-1 text-primary-m1"></i>
                              Notifications
                            </h5>

                            <div class="mt-3">
                              <div class="media mt-2 px-3 pt-1 border-l-2 brc-purple-m2">
                                <div class="bgc-purple radius-1 mr-3 p-3">
                                  <i class="fa fa-user text-white text-150"></i>
                                </div>
                                <div class="media-body pb-0 mb-0 text-90 text-grey-m1">
                                  <div class="text-grey-d2 font-bolder">@username1</div>
                                  Donec id elit non mi porta gravida at eget metus. Fusce dapibus...
                                </div>
                              </div>

                              <hr />

                              <div class="media mt-2 px-3 pt-1 border-l-2 brc-warning-m2">
                                <div class="bgc-warning radius-1 mr-3 p-3">
                                  <i class="fa fa-user text-white text-150"></i>
                                </div>
                                <div class="media-body pb-0 mb-0 text-90 text-grey-m1">
                                  <div class="text-grey-d2 font-bolder">@username2</div>
                                  Fusce dapibus, tellus ac cursus commodo, tortor mauris...
                                </div>
                              </div>

                              <hr />

                              <div class="media mt-2 px-3 pt-1 border-l-2 brc-success-m2">
                                <div class="bgc-success radius-1 mr-3 p-3">
                                  <i class="fa fa-user text-white text-150"></i>
                                </div>
                                <div class="media-body pb-0 mb-0 text-90 text-grey-m1">
                                  <div class="text-grey-d2 font-bolder">@username3</div>
                                  Tortor mauris condimentum nibh, fusce dapibus...
                                </div>
                              </div>
                            </div>

                          </div><!-- .col:mega notifications -->


                          <div class="col-lg-4 col-12 p-4 dropdown-clickable">
                            <h5 class="text-dark-m2">
                              <i class="fa fa-envelope mr-1 text-green-m1"></i>
                              Contact Us
                            </h5>

                            <form class="my-3">
                              <div class="form-group mb-2">
                                <input placeholder="Name" type="text" class="form-control border-l-2" />
                              </div>

                              <div class="form-group mb-2">
                                <input placeholder="Email" type="text" class="form-control border-l-2" />
                              </div>

                              <div class="form-group mb-4">
                                <textarea class="form-control brc-primary-m2 border-l-2 text-grey-d1" rows="3" placeholder="Your message..."></textarea>
                              </div>

                              <div class="text-center">
                                <button type="reset" class="btn px-3 btn-secondary btn-bold tex1t-110">
                                  Reset
                                </button>

                                <button data-dismiss="dropdown" type="button" class="btn btn-outline-primary btn-bgc-white px-3 btn-bold btn-text-slide-x" style="width: 8rem;">
                                  Submit<i class="btn-text-2  move-right fa fa-arrow-right text-120 align-text-bottom ml-1"></i>
                                </button>
                              </div>
                            </form>
                          </div><!-- .col:mega contact -->

                        </div><!-- .row: mega -->



                        <!-- Big Action Buttons -->
                        <div class="order-first order-lg-last ">
                          <hr class="d-none d-lg-block brc-default-l1 my-0" /><!-- border above buttons in desktop mode -->

                          <div class="row mx-0 bgc-primary-l4">
                            <div class="col-lg-8 offset-lg-2 d-flex justify-content-center py-4 d-flex">

                              <button class="mx-2px btn btn-sm btn-app btn-outline-warning btn-h-outline-warning btn-a-outline-warning radius-1 border-2">
                                <i class="fa fa-cog text-190 d-block mb-2 h-4"></i>
                                <span class="text-muted">Settings</span>
                              </button>

                              <button class="mx-2px btn btn-sm btn-app btn-outline-info btn-h-outline-info radius-1 border-2">
                                <i class="fa fa-edit text-190 d-block mb-2 h-4"></i>
                                Edit
                                <span class="position-tr text-danger-m2 text-130 mr-1">*</span>
                              </button>

                              <button class="mx-2px btn btn-sm btn-app btn-dark radius-1">
                                <i class="fa fa-lock text-150 d-block mb-2 h-4"></i>
                                Lock
                              </button>

                            </div>
                          </div><!-- .row:megamenu big buttons -->

                          <hr class="d-lg-none brc-default-l1 mt-0" /><!-- border below buttons in mobile mode -->
                        </div>


                      </div>
                    </div>
                  </li>

                  <li class="nav-item dropdown mx-1px">
                    <a class="btn btn-white btn-h-default btn-a-default" href="#">
                      <i class="fa fa-map fa-flip-horizontal mr-1 text-green bgc-white-tp1 radius-1 p-1"></i>
                      Explorations
                    </a>
                  </li>

                  <li class="nav-item dropdown mx-1px">
                    <a class="btn btn-white btn-h-default btn-a-default" href="<?= base_url(); ?>/login">
                      <i class="fa fa-phone fa-flip-horizontal mr-1 text-blue bgc-white-tp1 radius-1 p-1"></i>
                      Login
                    </a>
                  </li>

                  <li class="nav-item ml-xl-2">
                    <a class="btn btn-light-green border-2 btn-brc-tp d-none d-lg-inline-flex" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                      <i class="fa fa-fire-alt mr-2"></i>
                      Hot Deals
                    </a>

                    <a class="btn btn-light-green d-lg-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                      <i class="fa fa-fire-alt mr-2"></i>
                      Hot Deals
                    </a>
                  </li>
                </ul><!-- /.navbar-nav menu -->
              </div><!-- /.navbar-nav -->

            </div><!-- /.navbar-menu.navbar-collapse -->



            <button type="button" class="d-style mr-2 px-4 navbar-toggler btn btn-burger static collapsed d-flex d-lg-none" data-toggle="collapse" data-target="#navbarMenu2" aria-controls="navbarMenu2" aria-expanded="false" aria-label="Toggle navbar menu">
              <i class="fa fa-caret-down d-collapsed text-grey-m1 text-80"></i>
              <i class="fa fa-caret-up d-n-collapsed text-grey-m1 text-80"></i>

              <i class="fa fa-user text-orange-d1 ml-2"></i>
            </button><!-- mobile navbar toggler button -->

            <div class="navbar-menu collapse navbar-collapse navbar-backdrop " id="navbarMenu2">
              <div class="navbar-nav">
                <ul class="nav">

                  <li class="nav-item dropdown px-lg-2 d-lg-flex flex-column justify-content-center">
                    <a class="d-none d-lg-block h-auto btn btn-outline-blue btn-bold radius-round border-2 dropdown-toggle px-2 px-xl-4" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                      Login
                    </a>

                    <a class="d-lg-none nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                      <i class="fa fa-caret-right bgc-blue radius-round text-white py-2 px-4 mr-2"></i>
                      Login
                    </a>

                    <div style="width: 20rem;" data-display="static" class="shadow radius-1 p-0 dropdown-menu dropdown-menu-right dropdown-animated animated-2 brc-primary-m3 mt-lg-n1 mr-lg-n2 dropdown-caret">
                      <!-- login dialog -->
                      <h4 class="text-120 mb-3 text-secondary-d3 px-3 mt-3 mb-2">Please enter your details</h4>
                      <hr class="border-dotted brc-default-l2" />
                      <form class="dropdown-clickable text-grey-d2" name="formLogin" action="" id="formLogin">
                        <div class="dropdown-body my-25">
                          <div class="form-group mx-3">
                            <div class="d-flex align-items-center input-floating-label text-blue-m1 brc-blue-m2">
                              <input placeholder="Usuario" type="text" class="form-control pr-4 shadow-none" autocomplete="off" id="txtEmail" name="txtEmail"/>
                              <i class="fa fa-user text-grey-m2 ml-n4"></i>
                              <label class="floating-label text-grey-l1 ml-n3">Email</label>
                            </div>
                          </div>

                          <div class="form-group mx-3">
                            <div class="d-flex align-items-center input-floating-label text-blue-m1 brc-blue-m2">
                              <input placeholder="Password" type="password" class="form-control pr-4 shadow-none" autocomplete="off" id="txtPassword" name="txtPassword"/>
                              <i class="fa fa-key text-grey-m2 ml-n4"></i>
                              <label class="floating-label text-grey-l1 ml-n3">Password</label>
                            </div>
                          </div>

                          <div class="mx-3">
                            <label class="d-inline-block mt-2 text-secondary-d2">
                              <input type="checkbox" class="mr-1" />
                              Remember me
                            </label>
                          </div>
                        </div>

                        <div class="dropdown-footer text-center py-25 bgc-default-l4 border-t-1 brc-default-l2">
                          <button type="submit" class="btn px-4 py-15 text-95 btn-blue">
                            Login
                          </button>

                          <button type="button" class="btn px-25 py-15 text-95 btn-outline-green btn-bgc-white">
                            Register
                          </button>
                        </div>
                      </form>
                    </div>
                  </li>


                </ul>
              </div>
            </div>

          </div>
        </div><!-- /.navbar-inner -->
      </nav>
      <div class="main-container bgc-white">

        <div role="main" class="main-content">
          <div class="page-content p-0">
            <div class="page-intro row pos-rel pt-lg-1 pt-xl-4" style="background-image: url('<?= base_url(); ?>/Assets/image/landing/travel-header.jpg')">
              <div class="col-11 col-lg-8 col-xl-7 mx-auto text-center py-4 py-lg-5 d-flex flex-column justify-content-end">
                <div class="bgc-black-tp4 radius-1 pt-2 pt-lg-4 pb-3 pb-lg-5 px-2">

                  <h1 class="text-white mb-3">
                    Let us take you to exciting destinations
                  </h1>

                  <div class="text-yellow-l4 text-140">
                    Just select your desired vacation features
                  </div>

                  <div class="mt-4 col-md-6 offset-md-3">
                    <form>
                      <div class="input-group">
                        <input type="text" class="form-control form-control-lg shadow-none border-0" placeholder="Location" />
                        <select class="form-control form-control-lg mx-2px border-0 ace-select py-2 h-auto">
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                        </select>
                        <div class="input-group-append">
                          <button class="btn btn-blue btn-bold" type="button">Start</button>
                        </div>
                      </div>
                    </form>
                  </div>

                </div>
              </div>
            </div>




            <div class="py-3 mt-3 bgc-white">
              <div class="container container-plus py-2 py-lg-4 text-center">

                <h2 class="text-primary mb-2 text-190">
                  Quickly find what you are looking for
                </h2>

                <div class="text-dark-l1 text-110">
                  With the help of our state of the art technology, it's as easy as 1-2-3
                </div>

                <div class="row mt-4">
                  <div class="col-12 col-lg-11 col-xl-9 mx-auto">

                    <div class="row my-4">
                      <div class="col-12 col-md-4 mb-4 mb-md-0 pb-2 pb-md-0">
                        <div class="d-inline-block text-center bgc-green-l4 p-4 radius-round text-120 border-2 brc-green-m4 d-style">
                          <i class="fa fa-bicycle fa-2x w-5 h-5 text-green-d1 d-zoom-2"></i>
                        </div>

                        <h3 class="text-grey-d3 text-140 my-2 my-md-3">
                          Travel by road
                        </h3>

                        <p class="text-dark-m3">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime...
                        </p>
                      </div>


                      <div class="col-12 col-md-4 mb-4 mb-md-0 pb-2 pb-md-0">
                        <div class="d-inline-block text-center bgc-blue-l4 p-4 radius-round text-120 border-2 brc-blue-l1 d-style">
                          <i class="fa fa-train text-180 w-5 h-5 text-blue-d1 d-zoom-2"></i>
                        </div>

                        <h3 class="text-grey-d3 text-140 my-2 my-md-3">
                          Travel by train
                        </h3>

                        <p class="text-dark-m3">
                          Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam...
                        </p>
                      </div>


                      <div class="col-12 col-md-4">
                        <div class="d-inline-block text-center bgc-orange-l4 p-4 radius-round text-120 border-2 brc-warning-m4 d-style">
                          <i class="fa fa-paper-plane text-180 w-5 h-5 text-orange-d2 d-zoom-2"></i>
                        </div>

                        <h3 class="text-grey-d3 text-140 my-2 my-md-3">
                          Travel by air
                        </h3>

                        <p class="text-dark-m3">
                          Veniam marfa mustache skateboard, adipisicing fugiat velit...
                        </p>
                      </div>
                    </div><!-- /.row -->

                  </div><!-- /.col -->
                </div><!-- /.row -->

              </div><!-- /.container -->
            </div>




            <div class="bgc-blue-l4">
              <div class="container container-plus py-45">
                <div class="row">
                  <div class="col-12 col-lg-8 mx-auto">
                    <div class="d-flex flex-column align-items-center flex-md-row align-items-md-center">
                      <div class="radius-2 mt-1 mr-md-4 shadow-sm border-1 p-2px brc-brown-l1 bgc-white">
                        <div class="overflow-hidden radius-1">
                          <img alt="Travel image" src="<?= base_url(); ?>/Assets/image/landing/travel1.jpg" class="dh-zoom-2" />
                        </div>
                      </div>

                      <div class="flex-grow-1 text-dark-m3 mt-4 mt-md-0">
                        <h3 class="text-dark-m3 text-center text-md-left mb-4">
                          Step 1
                        </h3>

                        <p>
                          Justo odio, dapibus ac facilisis in, egestas eget quam.
                        </p>
                        <p>
                          Donec id elit non mi porta gravida at eget metus.
                        </p>
                        <p>
                          Onec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo.
                        </p>
                        <p>
                          <a href="#" class="btn btn-outline-primary btn-bold btn-bgc-white">
                            Read More
                          </a>
                        </p>
                      </div>
                    </div>
                  </div><!-- /.col -->
                </div><!-- /.row -->
              </div><!-- /.container -->
            </div>


            <div>
              <div class="container container-plus py-45">
                <div class="row">
                  <div class="col-12 col-lg-8 mx-auto">
                    <div class="d-flex flex-column align-items-center flex-md-row align-items-md-center">

                      <div class="flex-grow-1 text-dark-m3 mt-4 mt-md-0">
                        <h3 class="text-dark-m3 text-center text-md-left mb-4">
                          Step 2
                        </h3>

                        <p>
                          Onec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo.
                        </p>
                        <p>
                          Justo odio, dapibus ac facilisis in, egestas eget quam.
                        </p>
                        <p>
                          Donec id elit non mi porta gravida at eget metus.
                        </p>
                        <p>
                          <a href="#" class="btn btn-outline-success btn-bold btn-bgc-white">Read More</a>
                        </p>
                      </div>

                      <div class="radius-2 mt-1 ml-md-4 shadow-sm border-1 p-2px brc-default-l1 bgc-white order-first order-md-last">
                        <div class="overflow-hidden radius-1">
                          <img alt="Travel image" src="<?= base_url(); ?>/Assets/image/landing/travel2.jpg" class="dh-zoom-2" />
                        </div>
                      </div>
                    </div>
                  </div><!-- /.col -->
                </div><!-- /.row -->
              </div><!-- /.container -->
            </div>





            <div class="bgc-blue-l4 pb-3">
              <div class="container container-plus py-5">
                <h3 class="text-center text-dark-tp3 text-160 mb-5">Our Packages</h3>
                <div>
                  <div class="row justify-content-center mx-1 mx-lg-0 mt-3">

                    <!-- Basic -->
                    <div class="col-12 col-sm-6 col-lg-3 px-2 dh-zoom-1 mb-4">
                      <div class="d-style btn btn-outline-default btn-h-outline-blue btn-a-outline-blue bgc-white w-100 border-t-3 pb-3">

                        <div class="d-flex flex-column align-items-center">

                          <h4 class="w-75 pt-15 pb-2 text-140 bgc-blue text-white mt-n35 mb-3 radius-1">
                            Basic
                          </h4>

                          <div class="text-secondary text-120">
                            $<span class="text-200">10</span> / month
                          </div>

                          <hr class="w-90 my-4 brc-secondary-l3" />

                          <div class="text-grey-d1 text-90 w-90">
                            <ul class="list-unstyled text-left mx-auto mb-1">
                              <li>
                                <i class="fa fa-check text-success-m2 text-110 mr-1 mt-1"></i>
                                <span>
                                            <span class="text-110">Donec id elit.</span>
                                Fusce dapibus...
                                </span>
                              </li>

                              <li class="mt-25">
                                <i class="fa fa-check text-success-m2 text-110 mr-1 mt-1"></i>
                                <span class="text-110">
                                            Placerat duis
                                        </span>
                              </li>

                              <li class="mt-25">
                                <i class="fa fa-times text-danger-m3 text-110 mr-1 mt-1"></i>
                                <span class="text-110">
                                            Tortor mauris
                                        </span>
                              </li>

                              <li class="mt-3 text-center">
                                <hr class="my-4 brc-secondary-l3" />
                                <a href="#" class="btn btn-outline-default px-3 btn-bold">Start Now</a>
                              </li>
                            </ul>
                          </div>


                        </div>

                      </div>
                    </div>


                    <!-- Pro -->
                    <div class="col-12 col-sm-6 col-lg-3 px-2 mt-lg-n2 dh-zoom-1 mb-4">
                      <div class="d-style active btn btn-outline-default btn-h-outline-success btn-a-outline-success bgc-white w-100 border-t-3 pb-3">

                        <div class="d-flex flex-column align-items-center">
                          <h4 class="w-75 pt-15 pb-2 text-140 bgc-success text-white mt-n35 mb-3 radius-1">
                            Pro
                          </h4>

                          <span class="position-tl mt-4 ml-n25 rotate-n45">
                                <span class="badge badge-lg bgc-yellow text-dark-tp2 brc-yellow arrowed-in arrowed-in-right">Special offer</span>
                          </span>

                          <div>
                            <div>
                              <s class="text-secondary-m3">$<span class="text-110">30</span> / month</s>
                            </div>
                            <div class="text-120">
                              <span class="text-green-d1">$<span class="text-200">20</span> / month</span>
                            </div>
                          </div>

                          <hr class="w-90 my-4 brc-secondary-l2" />

                          <div class="flex-grow-1 text-grey-d1 text-90 w-90">
                            <ul class="list-unstyled text-left mx-auto mb-1">
                              <li class="mb-3">
                                <i class="fa fa-check text-success-m2 text-110 mr-1 mt-1"></i>
                                <span class="text-110 text-1">
                                            Everything in Basic...
                                        </span>
                              </li>

                              <li>
                                <i class="fa fa-check text-success-m2 text-110 mr-1 mt-1"></i>
                                <span class="text-110">
                                            Non diam phasellus
                                        </span>
                              </li>

                              <li class="mt-25">
                                <i class="fa fa-check text-success-m2 text-110 mr-1 mt-1"></i>
                                <span class="text-110">
                                            Sed adipiscing diam
                                        </span>
                              </li>

                              <li class="mt-3 text-center">
                                <hr class="my-4 brc-secondary-l2" />
                                <a href="#" class="btn btn-success px-3 btn-bold">Start Now</a>
                              </li>
                            </ul>
                          </div>

                        </div>

                      </div>
                    </div>


                    <!-- Premium -->
                    <div class="col-12 col-sm-6 col-lg-3 px-2 dh-zoom-1 mb-4">
                      <div class="d-style btn btn-outline-default btn-h-outline-purple btn-a-outline-purple bgc-white w-100 border-t-3 pb-3">

                        <div class="d-flex flex-column align-items-center">
                          <h4 class="w-75 pt-15 pb-2 text-140 bgc-purple text-white mt-n35 mb-3 radius-1">
                            Premium
                          </h4>

                          <div class="text-secondary text-120">
                            $<span class="text-200">50</span> / month
                          </div>

                          <hr class="w-90 my-4 brc-secondary-l3" />

                          <div class="flex-grow-1 text-grey-d1 text-90 w-90">
                            <ul class="list-unstyled text-left mx-auto mb-1">
                              <li class="mb-3">
                                <i class="fa fa-check text-success-m2 text-110 mr-1 mt-1"></i>
                                <span class="text-110">
                                            Everything in Pro...
                                        </span>
                              </li>

                              <li>
                                <i class="fa fa-check text-success-m2 text-110 mr-1 mt-1"></i>
                                <span class="text-110">
                                            In fermentum et
                                        </span>
                              </li>

                              <li class="mt-25">
                                <i class="fa fa-check text-success-m2 text-110 mr-1 mt-1"></i>
                                <span class="text-110">
                                            Molestie nunc non
                                        </span>
                              </li>

                              <li class="mt-3 text-center">
                                <hr class="my-4 brc-secondary-l3" />
                                <a href="#" class="btn btn-outline-default px-3 btn-bold">Start Now</a>
                              </li>
                            </ul>
                          </div>

                        </div>

                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>




            <div>
              <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                  <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img data-src="<?= base_url(); ?>/node_modules/holderjs/holder.js/100px400?theme=industrial&text=Slide 1" class="d-block w-100" alt="Slide 1" />
                    <div class="carousel-caption d-none d-md-block">
                      <h5>
                        First slide label
                      </h5>
                      <p>
                        Nulla vitae elit libero, a pharetra augue mollis interdum.
                      </p>
                    </div>
                  </div>

                  <div class="carousel-item">
                    <img data-src="<?= base_url(); ?>/node_modules/holderjs/holder.js/100px400?theme=industrial&text=Slide 2" class="d-block w-100" alt="Slide 2" />
                    <div class="carousel-caption d-none d-md-block">
                      <h5>
                        Second slide label
                      </h5>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                      </p>
                    </div>
                  </div>

                  <div class="carousel-item">
                    <img data-src="<?= base_url(); ?>/node_modules/holderjs/holder.js/100px400?theme=vine&text=Slide 3" class="d-block w-100" alt="Slide 3" />
                    <div class="carousel-caption d-none d-md-block text-dark-tp2">
                      <h5>
                        Third slide label
                      </h5>
                      <p>
                        Praesent commodo cursus magna, vel scelerisque nisl consectetur.
                      </p>
                    </div>
                  </div>
                </div>

                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>

            </div>




            <div class="container container-plus py-3 my-45 px-lg-5">
              <div class="row">
                <div class="col-lg-9 mx-auto">
                  <h4 class="text-dark-tp3 text-center text-160 mb-2">
                    Our Clients
                  </h4>
                  <hr class="brc-secondary-l3" />

                  <div class="row text-130 mt-4">
                    <div class="col-4 col-sm-3 col-md-2 text-center my-2">
                      <i class="d-block fab fa-amazon text-orange-d1 fa-2x"></i>
                      <span class="text-90 text-muted">Amazon</span>
                    </div>

                    <div class="col-4 col-sm-3 col-md-2 text-center my-2">
                      <i class="d-block fab fa-linkedin-in text-primary fa-2x"></i>
                      <span class="text-90 text-muted">LinkedIn</span>
                    </div>

                    <div class="col-4 col-sm-3 col-md-2 text-center my-2">
                      <i class="d-block fab fa-android text-success-m1 fa-2x"></i>
                      <span class="text-90 text-muted">Android</span>
                    </div>

                    <div class="col-4 col-sm-3 col-md-2 text-center my-2">
                      <i class="d-block fab fa-youtube text-danger fa-2x"></i>
                      <span class="text-90 text-muted">Youtube</span>
                    </div>

                    <div class="col-4 col-sm-3 col-md-2 text-center my-2">
                      <i class="d-block fab fa-paypal text-blue-m1 fa-2x"></i>
                      <span class="text-90 text-muted">PayPal</span>
                    </div>

                    <div class="col-4 col-sm-3 col-md-2 text-center my-2">
                      <i class="d-block fab fa-github text-grey-d1 fa-2x"></i>
                      <span class="text-90 text-muted">Github</span>
                    </div>
                  </div><!-- /.row -->
                </div><!-- /.col -->
              </div><!-- /.row -->
            </div>






            <div class="footer h-auto text-white" style="background-image: url('<?= base_url(); ?>/Assets/image/landing/travel-footer.jpg')">
              <div class="footer-inner bgc-black-tp4 pt-5 pb-3">
                <div class="container container-plus">
                  <div class="row">
                    <div class="col-12 col-lg-3">
                      <h2>
                        <i class="fa fa-plane rotate-n45 text-85 mr-1 text-orange-l1 opacity-2"></i>
                        ACE
                        <span class="text-75">
                    Travel
                </span>
                      </h2>

                      <p>
                        Since 1965
                      </p>

                      <p class="text-90">
                        Praesent commodo cursus magna!
                      </p>
                    </div><!-- /.col -->

                    <div class="col-12 col-lg-6">
                      <div class="row">
                        <div class="col-4">
                          <h6 class="text-white-tp2 text-95 text-600 mb-3">ABOUT</h6>
                          <div>
                            <a href="#" class="text-white">Link 1</a>
                            <br />
                            <a href="#" class="text-white">Link 2</a>
                          </div>
                        </div>

                        <div class="col-4">
                          <h6 class="text-white-tp2 text-95 text-600 mb-3">PRODUCTS</h6>
                          <div>
                            <a href="#" class="text-white">Product 1</a>
                            <br />
                            <a href="#" class="text-white">Product 2</a>
                            <br />
                            <a href="#" class="text-white">Product 3</a>
                          </div>
                        </div>

                        <div class="col-4">
                          <h6 class="text-white-tp2 text-95 text-600 mb-3">CONTACT</h6>
                          <div>
                            <a href="#" class="text-white">Email</a>
                            <br />
                            <a href="#" class="text-white">Phone</a>
                            <br />
                            <a href="#" class="text-white">Address</a>
                          </div>
                        </div>
                      </div>
                    </div><!-- /.col -->

                    <div class="col-12 mt-5 col-lg-3 mt-lg-0">
                      <h6 class="text-white text-110 mb-3">
                        Join our community now:
                      </h6>
                      <div class="px-0 col-12 col-sm-8 col-lg-12 mx-auto radius-round border-2 brc-white-tp2 bgc-black-tp7 input-group ">
                        <input placeholder="Your email address" type="text" class="form-control form-control-lg radius-round shadow-none bgc-transparent border-0 text-white" />
                        <a href="#" class="btn radius-round btn-green text-600 text-110 px-35 m-3px">Join</a>
                      </div>
                    </div><!-- /.col -->
                  </div><!-- /.row -->

                  <div class="text-center mt-45">
                    <span class="text-white">
            Copyright &copy; 2021 Ace Company
        </span>
                    <div class="text-150 mt-2">
                      <i class="bgc-black-tp6 p-25 radius-round fab fa-twitter text-blue-l2 mx-1"></i>
                      <i class="bgc-black-tp6 p-25 radius-round fab fa-facebook text-blue-m2 mx-1"></i>
                      <i class="bgc-black-tp6 p-25 radius-round fab fa-instagram text-purple-m3 mx-1"></i>
                    </div>
                  </div>

                </div><!-- /.container -->
              </div><!-- /.footer-inner -->
            </div><!-- /.footer -->



            <div class="footer-tools">
              <a href="#" class="btn-scroll-up btn btn-blue px-25 py-2 text-95 border-2 radius-round mb-2 mr-2">
                <i class="fa fa-arrow-up w-2 h-2"></i>
              </a>
            </div>
          </div>
        </div>

      </div>

    </div>
    <script>
        const base_url = "<?= base_url(); ?>";
    </script>
    <!-- include common vendor scripts used in demo pages -->
    <script src="<?= base_url(); ?>/node_modules/jquery/dist/jquery.js"></script>
    <script src="<?= base_url(); ?>/node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="<?= base_url(); ?>/node_modules/bootstrap/dist/js/bootstrap.js"></script>


    <!-- include vendor scripts used in "Landing Page 2" page. see "/views//pages/partials/landing-page-2/@vendor-scripts.hbs" -->
    <script src="<?= base_url(); ?>/node_modules/holderjs/holder.js"></script>


    <!-- include ace.js -->
    <script src="<?= base_url(); ?>/dist/js/ace.js"></script>



    <!-- demo.js is only for Ace's demo and you shouldn't use it -->
    <!--  <script src="<?= base_url(); ?>/app/browser/demo.js"></script> -->

    <script src="<?= base_url(); ?>/js/functions_login.js"></script>

    <!-- "Landing Page 2" page script to enable its demo functionality -->
     <!-- <script src="<?= base_url(); ?>/views/pages/landing-page-2/@page-script.js"></script> -->
  </body>

</html>


            <nav class="navbar navbar-sm navbar-expand-lg navbar-fixed navbar-white2">
            <div class="navbar-inner">


              <div class="d-flex h-100 justify-content-xl-between align-items-center">

                <button type="button" class="btn btn-burger burger-arrowed static collapsed ml-2 d-flex d-xl-none" data-toggle-mobile="sidebar" data-target="#sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle sidebar">
                  <span class="bars text-grey-m2"></span>
                </button><!-- mobile sidebar toggler button -->

                <a class="navbar-brand d-xl-none mx-1 text-grey-d3 text-130" href="#">
                  <i class="fa fa-leaf mr-2px text-success-m2"></i>
                  ACE
                  <span class="d-none d-sm-inline-block">App</span>
                </a>

                <button type="button" class="btn text-grey-m2 btn-burger align-self-center mx-2 d-none d-xl-flex btn-h-light-primary" data-toggle="sidebar" data-target="#sidebar" aria-controls="sidebar" aria-expanded="true" aria-label="Toggle sidebar">
                  <span class="bars"></span>
                </button><!-- sidebar toggler button -->

              </div>


              <div class="navbar-content">
                <div class="dropdown dd-backdrop dd-backdrop-none-md">
                  <button type="button" id="id-nav-post-btn" class="btn btn-outline-primary btn-bold btn-sm mx-2 px-2 px-lg-3 radius-round dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-plus mr-lg-1"></i>
                    <span class="d-none d-lg-inline">Create Post</span>
                  </button>

                  <div class="dropdown-menu dropdown-menu-right dropdown-animated brc-primary-m3 radius-2 py-2 py-md-0 dd-slide-up dd-slide-none-md">
                    <div class="dropdown-inner">
                      <div class="dropdown-header d-md-none">Choose post type:</div>
                      <a class="dropdown-item btn btn-outline-grey btn-h-light-primary btn-a-light-primary" href="#">
                        <i class="fa fa-circle text-primary-m2 text-75 mr-1"></i>
                        Category 1
                      </a>

                      <a class="dropdown-item btn btn-outline-grey btn-h-light-success btn-a-light-success" href="#">
                        <i class="fa fa-circle text-success-m2 text-75 mr-1"></i>
                        Category 2
                      </a>

                      <a class="dropdown-item btn btn-outline-grey btn-h-light-purple btn-a-light-purple" href="#">
                        <i class="fa fa-circle text-purple-m2 text-75 mr-1"></i>
                        Category 3
                      </a>
                    </div>
                  </div>
                </div>


                <!-- #navbarSearch toggler -->
                <button class="navbar-toggler h-75" type="button" data-toggle="collapse" data-target="#navbarSearch" aria-controls="navbarSearch" aria-expanded="false" aria-label="Toggle navbar search">
                  <i class="fa fa-search text-grey-m2 text-90"></i>
                </button>

                <!-- searchbox -->
                <div class="collapse navbar-collapse navbar-backdrop" id="navbarSearch">
                  <form class="d-flex align-items-center ml-lg-3" data-submit="dismiss">
                    <i class="fa fa-search text-blue-m1 mr-n3 d-none d-lg-block pb-2px"></i>
                    <input type="text" class="navbar-input py-3 py-lg-1 px-3 pl-lg-4 w-100 autofocus" placeholder="SEARCH ..." aria-label="Search" />
                  </form>
                </div>
              </div><!-- .navbar-content -->


              <!-- #navbarMenu toggler -->
              <button class="navbar-toggler ml-1 mr-2 px-1" type="button" data-toggle="collapse" data-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navbar menu">
                <img class="mx-0 radius-round border-2 brc-primary-tp3 p-1px" src="<?= base_url(); ?>/Assets/image/avatar/avatar3.jpg" width="36" alt="Natalie's Photo">
              </button>


              <div class="navbar-menu collapse navbar-collapse navbar-backdrop" id="navbarMenu">

                <div class="navbar-nav">
                  <ul class="nav has-active-border">

                    <li class="nav-item dropdown dropdown-mega">
                      <a class="nav-link dropdown-toggle mr-1px" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-list-alt mr-2 d-lg-none"></i>
                        Mega
                        <i class="caret fa fa-angle-down d-none d-lg-block"></i>
                        <i class="caret fa fa-angle-left d-block d-lg-none"></i>
                      </a>
                      <div class="p-0 dropdown-menu dropdown-animated brc-primary-m3 border-b-2 ml-1 mr-1px w-auto bgc-default-l4">
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


                    <li class="nav-item dropdown dropdown-mega">
                      <a class="nav-link dropdown-toggle pl-lg-3 pr-lg-4" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-bell text-110 icon-animated-bell mr-lg-2"></i>
                        <span class="d-inline-block d-lg-none ml-2">Notifications</span>
                        <span id="id-navbar-badge1" class="badge badge-info radius-round text-75">3</span>

                        <i class="caret fa fa-angle-left d-block d-lg-none"></i>
                      </a>

                      <div class="shadow dropdown-menu dropdown-animated dropdown-sm p-0 brc-primary-m3 border-b-2 bgc-white">
                        <ul class="nav nav-tabs nav-tabs-simple w-100 nav-justified dropdown-clickable border-b-1 brc-secondary-l2" role="tablist">
                          <li class="nav-item">
                            <a class="d-style px-0 mx-0 py-3 nav-link active text-600 brc-blue-m1 text-dark-tp5 bgc-h-blue-l4" data-toggle="tab" href="#navbar-notif-tab-1" role="tab">
                              <span class="d-active text-blue-d1 text-105">Notifications</span>
                              <span class="d-n-active">Notifications</span>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="d-style px-0 mx-0 py-3 nav-link text-600 brc-purple-m1 text-dark-tp5 bgc-h-purple-l4" data-toggle="tab" href="#navbar-notif-tab-2" role="tab">
                              <span class="d-active text-purple-d1 text-105">Messages</span>
                              <span class="d-n-active">Messages</span>
                            </a>
                          </li>
                        </ul><!-- .nav-tabs -->


                        <div class="tab-content tab-sliding p-0">

                          <div class="tab-pane mh-none show active px-md-1 pt-1" id="navbar-notif-tab-1" role="tabpanel">

                            <a href="#" class="mb-0 border-0 list-group-item list-group-item-action btn-h-lighter-secondary">
                              <i class="fab fa-twitter bgc-blue-tp1 text-white text-110 mr-15 p-2 radius-1"></i>
                              <span class="text-muted">Followers</span>
                              <span class="float-right badge badge-danger radius-round text-80">- 4</span>
                            </a>
                            <a href="#" class="mb-0 border-0 list-group-item list-group-item-action btn-h-lighter-secondary">
                              <i class="fa fa-comment bgc-pink-tp1 text-white text-110 mr-15 p-2 radius-1"></i>
                              <span class="text-muted">New Comments</span>
                              <span class="float-right badge badge-info radius-round text-80">+12</span>
                            </a>
                            <a href="#" class="mb-0 border-0 list-group-item list-group-item-action btn-h-lighter-secondary">
                              <i class="fa fa-shopping-cart bgc-success-tp1 text-white text-110 mr-15 p-2 radius-1"></i>
                              <span class="text-muted">New Orders</span>
                              <span class="float-right badge badge-success radius-round text-80">+8</span>
                            </a>
                            <a href="#" class="mb-0 border-0 list-group-item list-group-item-action btn-h-lighter-secondary">
                              <i class="far fa-clock bgc-purple-tp1 text-white text-110 mr-15 p-2 radius-1"></i>
                              <span class="text-muted">Finished processing data!</span>
                            </a>

                            <hr class="mt-1 mb-1px brc-secondary-l2" />
                            <a href="#" class="mb-0 py-3 border-0 list-group-item text-blue text-uppercase text-center text-85 font-bolder">
                              See All Notifications
                              <i class="ml-2 fa fa-arrow-right text-muted"></i>
                            </a>

                          </div><!-- .tab-pane : notifications -->


                          <div class="tab-pane mh-none pl-md-2" id="navbar-notif-tab-2" role="tabpanel">
                            <div data-ace-scroll='{"ignore": "mobile", "height": 300, "smooth":true}'>
                              <a href="#" class="d-flex mb-0 border-0 list-group-item list-group-item-action btn-h-lighter-secondary">
                                <img alt="Alex's avatar" src="<?= base_url(); ?>/Assets/image/avatar/avatar.png" width="48" class="align-self-start border-2 brc-primary-m3 p-1px mr-2 radius-round" />
                                <div>
                                  <span class="text-primary-m1 font-bolder">Alex:</span>
                                  <span class="text-grey text-90">Ciao sociis natoque penatibus et auctor ...</span>
                                  <br />
                                  <span class="text-grey-m1 text-85">
                                                      <i class="far fa-clock"></i>
                                                      a moment ago
                                                  </span>
                                </div>
                              </a>
                              <hr class="my-1px brc-grey-l3" />
                              <a href="#" class="d-flex mb-0 border-0 list-group-item list-group-item-action btn-h-lighter-secondary">
                                <img alt="Susan's avatar" src="<?= base_url(); ?>/Assets/image/avatar/avatar3.png" width="48" class="align-self-start border-2 brc-primary-m3 p-1px mr-2 radius-round" />
                                <div>
                                  <span class="text-primary-m1 font-bolder">Susan:</span>
                                  <span class="text-grey text-90">Vestibulum id ligula porta felis euismod ...</span>
                                  <br />
                                  <span class="text-grey-m1 text-85">
                                                      <i class="far fa-clock"></i>
                                                      20 minutes ago
                                                  </span>
                                </div>
                              </a>
                              <hr class="my-1px brc-grey-l3" />
                              <a href="#" class="d-flex mb-0 border-0 list-group-item list-group-item-action btn-h-lighter-secondary">
                                <img alt="Bob's avatar" src="<?= base_url(); ?>/Assets/image/avatar/avatar4.png" width="48" class="align-self-start border-2 brc-primary-m3 p-1px mr-2 radius-round" />
                                <div>
                                  <span class="text-primary-m1 font-bolder">Bob:</span>
                                  <span class="text-grey text-90">Nullam quis risus eget urna mollis ornare ...</span>
                                  <br />
                                  <span class="text-grey-m1 text-85">
                                                      <i class="far fa-clock"></i>
                                                      3:15 pm
                                                  </span>
                                </div>
                              </a>
                              <hr class="my-1px brc-grey-l3" />
                              <a href="#" class="d-flex mb-0 border-0 list-group-item list-group-item-action btn-h-lighter-secondary">
                                <img alt="Kate's avatar" src="<?= base_url(); ?>/Assets/image/avatar/avatar2.png" width="48" class="align-self-start border-2 brc-primary-m3 p-1px mr-2 radius-round" />
                                <div>
                                  <span class="text-primary-m1 font-bolder">Kate:</span>
                                  <span class="text-grey text-90">Ciao sociis natoque eget urna mollis ornare ...</span>
                                  <br />
                                  <span class="text-grey-m1 text-85">
                                                      <i class="far fa-clock"></i>
                                                      1:33 pm
                                                  </span>
                                </div>
                              </a>
                              <hr class="my-1px brc-grey-l3" />
                              <a href="#" class="d-flex mb-0 border-0 list-group-item list-group-item-action btn-h-lighter-secondary">
                                <img alt="Fred's avatar" src="<?= base_url(); ?>/Assets/image/avatar/avatar5.png" width="48" class="align-self-start border-2 brc-primary-m3 p-1px mr-2 radius-round" />
                                <div>
                                  <span class="text-primary-m1 font-bolder">Fred:</span>
                                  <span class="text-grey text-90">Vestibulum id penatibus et auctor  ...</span>
                                  <br />
                                  <span class="text-grey-m1 text-85">
                                                      <i class="far fa-clock"></i>
                                                      10:09 am
                                                  </span>
                                </div>
                              </a>

                            </div><!-- ace-scroll -->

                            <hr class="my-1px brc-secondary-l2 border-double" />
                            <a href="html/page-inbox.html" class="mb-0 py-3 border-0 list-group-item text-purple text-uppercase text-center text-85 font-bolder">
                              See All Messages
                              <i class="ml-2 fa fa-arrow-right text-muted"></i>
                            </a>
                          </div><!-- .tab-pane : messages -->

                        </div>
                      </div>
                    </li>

                  </ul>
                </div>

              </div>



            </div>
          </nav>
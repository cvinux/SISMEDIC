<?php headerAdmin($data); ?>
 	  <div class="page-content container">
            <div class="page-header border-0 pb-3">
              <h1 class="text-dark-m3 pb-0 mb-1 text-130">
                Overview &amp; Stats
              </h1>

              <div class="page-tools">
                <div class="action-buttons text-nowrap">
                  <a class="btn bgc-white btn-light-secondary mx-0" href="#" data-toggle="tooltip" title="Details">
                    <i class="fa fa-search-plus text-blue-d1"></i>
                  </a>
                  <a class="btn bgc-white btn-light-secondary mx-0" href="#" data-toggle="tooltip" title="Print">
                    <i class="fa fa-print text-purple-d1"></i>
                  </a>
                  <a class="btn bgc-white btn-light-secondary mx-0" href="#" data-toggle="tooltip" title="Remove">
                    <i class="fa fa-trash text-danger"></i>
                  </a>
                </div>
              </div>
            </div>





            <!-- stat boxes -->
            <div class="row px-2">
              <div class="col-12 col-sm-6 col-md-3 px-2 mb-1 mb-md-0">

                <div class="bcard d-flex flex-column text-center px-2 py-3 h-100">
                  <div class="mb-1">
                    <span class="d-inline-block bgc-success-l2 p-3 radius-round">
                    <i class="fab fa-twitter text-success-m1 text-180 w-4"></i>
                </span>
                  </div>

                  <div class="mt-1">
                    <div class="text-secondary-d3 text-180">
                      132
                    </div>
                    <div class="text-dark-tp4 text-110">
                      new followers
                    </div>
                  </div>

                  <div class="text-blue-m1 font-bolder position-tr m-2">
                    6%
                    <i class="fas fa-caret-up text-120"></i>
                  </div>
                </div>

              </div>




              <div class="col-12 col-sm-6 col-md-3 px-2 mb-1 mb-md-0">

                <div class="bcard d-flex flex-column text-center px-2 py-3 h-100">
                  <div class="mb-1">
                    <span class="d-inline-block bgc-pink-l3 p-3 radius-round">
                    <i class="fa fa-shopping-cart text-pink-m2 text-170 w-4"></i>
                </span>
                  </div>

                  <div class="mt-1">
                    <div class="text-secondary-d3 text-180">
                      46
                    </div>
                    <div class="text-dark-tp4 text-110">
                      new orders
                    </div>
                  </div>

                  <div class="text-orange-d2 pr-1 font-bolder position-tr m-2">
                    1%
                    <i class="fa fa-caret-down text-120"></i>
                  </div>
                </div>

              </div>




              <div class="col-12 col-sm-6 col-md-3 px-2 mb-1 mb-md-0">

                <div class="bcard d-flex flex-column text-center px-2 py-3 h-100">
                  <div class="flex-grow-1">
                    <div class="text-secondary-d3 text-180">
                      6,205
                    </div>
                    <div class="text-dark-tp4 text-110">
                      page views
                    </div>
                  </div>

                  <div class="text-blue-m1 font-bolder position-tr m-2">
                    9%
                    <i class="fa fa-caret-up text-120"></i>
                  </div>

                  <div class="mt-2 w-100">
                    <canvas id="linechart-1" style="height: 60px; width: 100%;" class="ml-n1"></canvas>
                  </div>
                </div>

              </div>




              <div class="col-12 col-sm-6 col-md-3 px-2 mb-1 mb-md-0">

                <div class="bcard d-flex flex-column text-center px-2 py-3 h-100">
                  <div class="text-secondary-d2 text-110 text-nowrap">
                    Traffic Sources
                  </div>

                  <div class="m-auto pt-2 w-75">
                    <canvas id="piechart-1"></canvas>
                  </div>
                </div>

              </div>
            </div>





            <div class="mt-3 mt-lg-4">
              <div class="card bcard pt-1 pt-lg-2">
                <div class="card-header brc-primary-l3">
                  <h5 class="card-title pl-1 text-120">
                    Latest Members
                  </h5>

                  <div class="card-toolbar align-self-center no-border">
                    <button type="button" class="btn border-2 btn-outline-default btn-sm">
                      View All
                    </button>
                  </div>

                  <div class="card-toolbar align-self-center">
                    <a href="#" data-action="toggle" class="card-toolbar-btn text-grey text-110">
                      <i class="fa fa-chevron-up"></i>
                    </a>
                  </div>
                </div>


                <div class="card-body p-0 border-0">
                  <div class="table-responsive-md">
                    <table class="table table-striped-primary table-borderless border-0 mb-0">
                      <tbody>
                        <tr></tr>
                        <tr>
                          <td class="text-secondary-d2 pl-2 pl-lg-4">
                            <img alt="Bob Doe's avatar" src="<?= base_url(); ?>/Assets/image/avatar/avatar1.jpg" class="radius-round border-2 p-2px brc-default-m1 mr-2 w-5 h-5" />
                            Bob Doe
                          </td>

                          <td class="text-secondary text-85 font-bolder">
                            Moderator
                          </td>

                          <td class="text-grey-m1 text-85">
                            London
                          </td>

                          <td class="text-85">
                            <i class="fa fa-star text-orange-m2"></i>
                            <i class="fa fa-star text-orange-m2"></i>
                            <i class="fa fa-star text-orange-m2"></i>
                          </td>

                          <td class="font-bolder text-80 text-right pr-2 pr-lg-3">
                            <span class="badge bgc-green text-white-tp1">Approved</span>


                          </td>

                          <td class="px-2 px-lg-3 text-right" style="width:40px;">
                            <label>
                              <input type="checkbox" class="ace-switch" checked />
                            </label>


                          </td>
                        </tr>
                        <tr>
                          <td class="text-secondary-d2 pl-2 pl-lg-4">
                            <img alt="Maria Doe's avatar" src="<?= base_url(); ?>/Assets/image/avatar/avatar4.jpg" class="radius-round border-2 p-2px brc-default-m1 mr-2 w-5 h-5" />
                            Maria Doe
                          </td>

                          <td class="text-secondary text-85 font-bolder">
                            Customer
                          </td>

                          <td class="text-grey-m1 text-85">
                            Dubai
                          </td>

                          <td class="text-85">
                            <i class="fa fa-star text-orange-m2"></i>
                            <i class="fa fa-star text-orange-m2"></i>
                            <i class="fa fa-star text-orange-m2"></i>
                          </td>

                          <td class="font-bolder text-80 text-right pr-2 pr-lg-3">
                            <span class="badge bgc-green text-white-tp1">Approved</span>


                          </td>

                          <td class="px-2 px-lg-3 text-right" style="width:40px;">
                            <label>
                              <input type="checkbox" class="ace-switch" checked />
                            </label>


                          </td>
                        </tr>
                        <tr>
                          <td class="text-secondary-d2 pl-2 pl-lg-4">
                            <span class="d-inline-block text-center mr-2 pt-2 w-5 h-5 radius-round bgc-primary-l2 text-primary font-bolder text-90">
                                        <span>JS</span>
                            </span>
                            John Smith
                          </td>

                          <td class="text-secondary text-85 font-bolder">
                            Customer
                          </td>

                          <td class="text-grey-m1 text-85">
                            Istanbul
                          </td>

                          <td class="text-85">
                            <i class="fa fa-star text-orange-m2"></i>
                            <i class="fa fa-star text-orange-m2"></i>
                            <i class="fa fa-star text-orange-m2"></i>
                          </td>

                          <td class="font-bolder text-80 text-right pr-2 pr-lg-3">

                            <span class="badge bgc-default text-white-tp1">Pending</span>

                          </td>

                          <td class="px-2 px-lg-3 text-right" style="width:40px;">

                            <label>
                              <input type="checkbox" class="ace-switch" />
                            </label>

                          </td>
                        </tr>
                        <tr>
                          <td class="text-secondary-d2 pl-2 pl-lg-4">
                            <img alt="Jim Doe's avatar" src="<?= base_url(); ?>/Assets/image/avatar/avatar6.jpg" class="radius-round border-2 p-2px brc-default-m1 mr-2 w-5 h-5" />
                            Jim Doe
                          </td>

                          <td class="text-secondary text-85 font-bolder">
                            Tester
                          </td>

                          <td class="text-grey-m1 text-85">
                            Unknown
                          </td>

                          <td class="text-85">
                            <i class="fa fa-star text-orange-m2"></i>
                            <i class="fa fa-star text-orange-m2"></i>
                            <i class="fa fa-star text-orange-m2"></i>
                          </td>

                          <td class="font-bolder text-80 text-right pr-2 pr-lg-3">


                            <span class="badge bgc-red text-white-tp1">Banned</span>
                          </td>

                          <td class="px-2 px-lg-3 text-right" style="width:40px;">


                            <a href="#" class="action-btn text-danger-m1 mr-1"><i class="fa fa-trash-alt text-125"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td class="text-secondary-d2 pl-2 pl-lg-4">
                            <img alt="Alex's avatar" src="<?= base_url(); ?>/Assets/image/avatar/avatar2.png" class="radius-round border-2 p-2px brc-default-m1 mr-2 w-5 h-5" />
                            Alex
                          </td>

                          <td class="text-secondary text-85 font-bolder">
                            Moderator
                          </td>

                          <td class="text-grey-m1 text-85">
                            Santiago
                          </td>

                          <td class="text-85">
                            <i class="fa fa-star text-orange-m2"></i>
                            <i class="fa fa-star text-orange-m2"></i>
                            <i class="fa fa-star text-orange-m2"></i>
                          </td>

                          <td class="font-bolder text-80 text-right pr-2 pr-lg-3">

                            <span class="badge bgc-default text-white-tp1">Pending</span>

                          </td>

                          <td class="px-2 px-lg-3 text-right" style="width:40px;">

                            <label>
                              <input type="checkbox" class="ace-switch" />
                            </label>

                          </td>
                        </tr>
                        <tr>
                          <td class="text-secondary-d2 pl-2 pl-lg-4">
                            <img alt="Susan's avatar" src="<?= base_url(); ?>/Assets/image/avatar/avatar5.jpg" class="radius-round border-2 p-2px brc-default-m1 mr-2 w-5 h-5" />
                            Susan
                          </td>

                          <td class="text-secondary text-85 font-bolder">
                            Customer
                          </td>

                          <td class="text-grey-m1 text-85">
                            Los Angeles
                          </td>

                          <td class="text-85">
                            <i class="fa fa-star text-orange-m2"></i>
                            <i class="fa fa-star text-orange-m2"></i>
                            <i class="fa fa-star text-orange-m2"></i>
                          </td>

                          <td class="font-bolder text-80 text-right pr-2 pr-lg-3">
                            <span class="badge bgc-green text-white-tp1">Approved</span>


                          </td>

                          <td class="px-2 px-lg-3 text-right" style="width:40px;">
                            <label>
                              <input type="checkbox" class="ace-switch" checked />
                            </label>


                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div><!-- /.table-responsive-md -->

                </div><!-- /.card-body -->
              </div><!-- /.card -->
            </div>





            <div class="row mt-2 mt-lg-4 pt-2">
              <div class="col-12 col-lg-8">
                <div class="card bcard h-100">
                  <div class="border-t-3 w-100 brc-info-m1 radius-t-1"></div><!-- the colored line on top of stats -->

                  <div class="card-header">
                    <h5 class="card-title text-grey-d1 pl-1">
                      More Stats
                    </h5>
                  </div>

                  <div class="card-body h-98 d-flex flex-column justify-content-center py-2 py-md-3 px-0 px-md-4">
                    <canvas id="saleschart" class="mx-n1 mx-md-0"></canvas>
                  </div>
                </div>
              </div>


              <div class="col-12 col-lg-4 mt-3 mt-lg-0">
                <div class="card bcard h-100">
                  <div class="border-t-3 w-100 brc-success-m1 radius-t-1"></div>

                  <div class="card-header border-0">
                    <h5 class="card-title text-grey-d1 pl-1">
                      Activity Feed
                      <span class="badge btn-light-success text-success float-right font-bolder">
                        +3
                    </span>
                    </h5>
                  </div>

                  <div class="card-body p-3 d-flex flex-column h-100">
                    <div class="flex-grow-1">

                      <div class="mb-2 text-grey-m1 text-95">
                        <div class="d-flex align-items-start">
                          <span class="d-inline-block w-5 h-5 text-center pt-2 radius-round mr-2px bgc-primary-l3 text-primary-d1 font-bolder text-90">
                                        <span>
                                            SD
                                        </span>
                          </span>

                          <div class="mx-2 text-grey-d1">
                            <div class="text-600 text-blue-d1">
                              Susan Dalek
                            </div>
                            Uploaded a new photo
                          </div>

                          <span class="text-90 text-secondary-m1 ml-auto text-nowrap">
                                    3 min ago
                                </span>
                        </div>
                      </div>

                      <hr class="brc-grey-l3" />
                      <div class="mb-2 text-grey-m1 text-95">
                        <div class="d-flex align-items-start">
                          <img alt="River Song's avatar" src="<?= base_url(); ?>/Assets/image/avatar/avatar3.png" class="border-2 brc-success-m2 radius-round p-1px w-5 h-5 mr-2px" />

                          <div class="mx-2 text-grey-d1">
                            <div class="text-600 text-blue-d1">
                              River Song
                            </div>
                            Reviewed a product
                          </div>

                          <span class="text-90 text-secondary-m1 ml-auto text-nowrap">
                                    4 min ago
                                </span>
                        </div>
                      </div>

                      <hr class="brc-grey-l3" />
                      <div class="mb-2 text-grey-m1 text-95">
                        <div class="d-flex align-items-start">
                          <img alt="Jack Alien's avatar" src="<?= base_url(); ?>/Assets/image/avatar/avatar4.png" class="border-2 brc-success-m2 radius-round p-1px w-5 h-5 mr-2px" />

                          <div class="mx-2 text-grey-d1">
                            <div class="text-600 text-blue-d1">
                              Jack Alien
                            </div>
                            Won a trophy
                          </div>

                          <span class="text-90 text-secondary-m1 ml-auto text-nowrap">
                                    20 min ago
                                </span>
                        </div>
                      </div>

                      <hr class="brc-grey-l3" />
                      <div class="mb-2 text-grey-m1 text-95">
                        <div class="d-flex align-items-start">
                          <img alt="Robin Hood's avatar" src="<?= base_url(); ?>/Assets/image/avatar/avatar5.png" class="border-2 brc-success-m2 radius-round p-1px w-5 h-5 mr-2px" />

                          <div class="mx-2 text-grey-d1">
                            <div class="text-600 text-blue-d1">
                              Robin Hood
                            </div>
                            Upgraded his membership plan
                          </div>

                          <span class="text-90 text-secondary-m1 ml-auto text-nowrap">
                                    1 hour ago
                                </span>
                        </div>
                      </div>



                    </div>

                    <div class="mt-2 px-4 border-t-1 brc-default-l3 pt-3">
                      <button type="button" class="btn btn-block btn-sm border-2 btn-lighter-default btn-h-light-primary btn-a-light-primary">
                        View All
                      </button>
                    </div>
                  </div><!-- /.card-body -->
                </div><!-- /.card -->
              </div>
            </div>
          </div>
<?php footerAdmin($data); ?>

 
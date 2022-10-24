          
              <footer class="footer">
                <div class="footer-inner">
                  <div class="h-100 pt-3 border-t-1 brc-secondary-l3 bgc-white">
                    <span class="text-primary-m2 font-bolder text-120">SISMEDIC</span>
                    <span class="text-muted">System &copy; 2022</span>

                    <span class="mx-3 action-buttons">
                          <a href="#" class="text-blue-m3 text-140"><i class="fab fa-twitter-square"></i></a>
                          <a href="#" class="text-blue-d1 text-140"><i class="fab fa-facebook"></i></a>
                          <a href="#" class="text-orange text-140"><i class="fa fa-rss-square"></i></a>
                       </span>
                  </div>
                </div><!-- .footer-inner -->
              </footer>


        </div>
        <!-- .END MAIN CONTENT -->
    
   </div>
</div>
<!-- FOOTER IMAGINARIO -->

    <script>
            const base_url = "<?= base_url(); ?>";
    </script>

    <!-- include common vendor scripts used in demo pages -->
    <script src="<?= base_url(); ?>/node_modules/jquery/dist/jquery.js"></script>
    <script src="<?= base_url(); ?>/node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="<?= base_url(); ?>/node_modules/bootstrap/dist/js/bootstrap.js"></script>

    <!-- include vendor scripts used in "Dashboard 3" page. see "/views//pages/partials/dashboard-3/@vendor-scripts.hbs" -->
    <script src="<?= base_url(); ?>/node_modules/chart.js/dist/Chart.js"></script>
    <!-- include ace.js -->
    <script src="<?= base_url(); ?>/dist/js/ace.js"></script>
    <!-- demo.js is only for Ace's demo and you shouldn't use it  -->
    <!--<script src="<?= base_url(); ?>/app/browser/demo.js"></script>  -->
    <!-- "Dashboard 3" page script to enable its demo functionality -->
    <!--<script src="<?= base_url(); ?>/views/pages/dashboard-3/@page-script.js"></script>  -->

    <!-- BEGIN DATATABLE -->
    <script src="<?= base_url(); ?>/node_modules/datatables/media/js/jquery.dataTables.js"></script>
    <script src="<?= base_url(); ?>/node_modules/datatables.net-bs4/js/dataTables.bootstrap4.js"></script>
    <script src="<?= base_url(); ?>/node_modules/datatables.net-colreorder/js/dataTables.colReorder.js"></script>
    <script src="<?= base_url(); ?>/node_modules/datatables.net-select/js/dataTables.select.js"></script>

    <script src="<?= base_url(); ?>/node_modules/datatables.net-buttons/js/dataTables.buttons.js"></script>
    <script src="<?= base_url(); ?>/node_modules/datatables.net-buttons-bs4/js/buttons.bootstrap4.js"></script>
    <script src="<?= base_url(); ?>/node_modules/datatables.net-buttons/js/buttons.html5.js"></script>
    <script src="<?= base_url(); ?>/node_modules/datatables.net-buttons/js/buttons.print.js"></script> 
    <script src="<?= base_url(); ?>/node_modules/datatables.net-buttons/js/buttons.colVis.js"></script>

    <script src="<?= base_url(); ?>/node_modules/datatables.net-responsive/js/dataTables.responsive.js"></script>

    <!-- END DATATABLE-->

    <!-- BEGIN SWEETALERT -->
    <script src="<?= base_url(); ?>/node_modules/sweetalert2/dist/sweetalert2.all.js"></script>
    <script src="<?= base_url(); ?>/node_modules/interactjs/dist/interact.js"></script>
    <!-- END SWEETALERT -->  

    <script src="<?= base_url(); ?>/node_modules/nouislider/distribute/nouislider.js"></script>

    <script src="<?= base_url(); ?>/js/<?= $data['page_functions_js']; ?>"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script> 
  </body>
</html>

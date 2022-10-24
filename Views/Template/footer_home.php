     <script>
        const base_url = "<?= base_url(); ?>";
    </script>

    <!-- include common vendor scripts used in demo pages -->
    <script src="<?= base_url(); ?>/node_modules/jquery/dist/jquery.js"></script>
    <script src="<?= base_url(); ?>/node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="<?= base_url(); ?>/node_modules/bootstrap/dist/js/bootstrap.js"></script>


    <!-- include vendor scripts used in "Landing Page 1" page. see "/views//pages/partials/landing-page-1/@vendor-scripts.hbs" -->
    <script src="<?= base_url(); ?>/node_modules/aos/dist/aos.js"></script>


    <!-- include ace.js -->
    <script src="<?= base_url(); ?>/dist/js/ace.js"></script>



    <!-- demo.js is only for Ace's demo and you shouldn't use it -->
    <script src="<?= base_url(); ?>/app/browser/demo.js"></script>



    <!-- "Landing Page 1" page script to enable its demo functionality -->
    <script src="<?= base_url(); ?>/views/pages/landing-page-1/@page-script.js"></script>
  </body>

</html>

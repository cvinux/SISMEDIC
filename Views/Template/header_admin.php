<html lang="es"> 
    
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
    <base href="../" />

    <title><?= $data['page_tag'] ?></title>

    <!-- include common vendor stylesheets & fontawesome -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/node_modules/bootstrap/dist/css/bootstrap.css">

    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/node_modules/@fortawesome/fontawesome-free/css/fontawesome.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/node_modules/@fortawesome/fontawesome-free/css/regular.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/node_modules/@fortawesome/fontawesome-free/css/brands.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/node_modules/@fortawesome/fontawesome-free/css/solid.css">

      <!-- include vendor stylesheets used in "DataTables" page. see "/views//pages/partials/table-datatables/@vendor-stylesheets.hbs" -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/node_modules/datatables.net-buttons-bs4/css/buttons.bootstrap4.css">


    <!-- include vendor stylesheets used in "Dashboard 3" page. see "/views//pages/partials/dashboard-3/@vendor-stylesheets.hbs" -->


    <!-- include fonts -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/dist/css/ace-font.css">



    <!-- ace.css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/dist/css/ace.css">


    <!-- favicon -->
    <link rel="icon" type="image/png" href="<?= base_url(); ?>/Assets/favicon.png" />

    <!-- "Dashboard 3" page styles, specific to this page for demo only -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/dist/css/ace-themes.css">



    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/node_modules/nouislider/distribute/nouislider.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">


  </head>


   <body>
    <div class="body-container">
      <div class="main-container">
        <?php require_once("nav_admin.php"); ?> 
          <div role="main" class="main-content">
             <?php require_once("nav_admin_top.php"); ?> 
      
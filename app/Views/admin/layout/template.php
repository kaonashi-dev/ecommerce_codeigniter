<!DOCTYPE html>
<html lang="es">

<head>
   <meta charset="utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
   <title> ADMIN - APP </title>
   <!-- Fonts and icons -->
   <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
   <!-- CSS Files -->
   <link rel="stylesheet" href="<?php echo base_url('admin/css/material_dashboard.min.css') ?>">
   <link rel="stylesheet" href="<?php echo base_url('css/font_awesome_css_all.min.css') ?>">

</head>

<body class="g-sidenav-show  bg-gray-200">

   <?= $menu ?>
   <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">

      <!-- Navbar -->
      <?= $navbar ?>

      <div class="container-fluid py-4">

         <?= $content ?>

         <?= $footer ?>
      
      </div>
   </main>

   <div class="fixed-plugin">
      <div class="card shadow-lg">
         <div class="card-body pt-sm-3 pt-0">
            <!-- Sidenav Type -->
            <div class="mt-3">
               <h6 class="mb-0">Sidenav</h6>
            </div>
            <div class="d-flex">
               <button class="btn bg-gradient-dark px-3 mb-2 active" data-class="bg-gradient-dark" onclick="sidebarType(this)">Dark</button>
               <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
               <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
            </div>
            <!-- Navbar Fixed -->
            <div class="mt-3 d-flex">
               <h6 class="mb-0">Navbar Fixed</h6>
               <div class="form-check form-switch ps-0 ms-auto my-auto">
                  <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
               </div>
            </div>
            <hr class="horizontal dark my-3">
            <div class="mt-2 d-flex">
               <h6 class="mb-0">Light / Dark</h6>
               <div class="form-check form-switch ps-0 ms-auto my-auto">
                  <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
               </div>
            </div>
         </div>
      </div>
   </div>

   <!--   Core JS Files   -->
   <script src="<?= base_url('js/popper.min.js') ?>"></script>
   <script src="<?= base_url('admin/js/bootstrap.min.js') ?>"></script>
   <script src="<?= base_url('admin/js/material_dashboard.min.js') ?>"></script>
</body>

</html>
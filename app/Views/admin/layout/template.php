<!DOCTYPE html>
<html lang="es">

<head>
   <meta charset="utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title> ADMIN - APP </title>
   <!-- Fonts and icons -->
   <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
   <!-- CSS Files -->
   <link rel="stylesheet" href="<?= base_url('assets/css/soft-ui-dashboard.min.css') ?>">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   <!-- JS Files -->
   <script src="<?= base_url('assets/js/vue.js') ?>"></script>
   <script src="<?php echo base_url('assets/js/axios.min.js') ?>"></script>

</head>

<body class="g-sidenav-show  bg-gray-200">

   <input type="hidden" id="site_url" value="<?php echo site_url(); ?>">
   <input type="hidden" id="base_url" value="<?php echo base_url(); ?>">

   <!-- JS -->
   <script src="<?= base_url('vue/main.js') ?>"></script>

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
      <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
         <i class="fa fa-cog py-2"> </i>
      </a>
      <div class="card shadow-lg ">
         <div class="card-header pb-0 pt-3 ">
            <div class="float-start">
               <h5 class="mt-3 mb-0">Soft UI Configurator</h5>
               <p>See our dashboard options.</p>
            </div>
            <div class="float-end mt-4">
               <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
                  <i class="fa fa-close"></i>
               </button>
            </div>
            <!-- End Toggle Button -->
         </div>
         <hr class="horizontal dark my-1">
         <div class="card-body pt-sm-3 pt-0">
            <!-- Sidebar Backgrounds -->
            <div>
               <h6 class="mb-0">Sidebar Colors</h6>
            </div>
            <a href="javascript:void(0)" class="switch-trigger background-color">
               <div class="badge-colors my-2 text-start">
                  <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
                  <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
                  <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
                  <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
                  <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
                  <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
               </div>
            </a>
            <!-- Sidenav Type -->
            <div class="mt-3">
               <h6 class="mb-0">Sidenav Type</h6>
               <p class="text-sm">Choose between 2 different sidenav types.</p>
            </div>
            <div class="d-flex">
               <button class="btn bg-gradient-primary w-100 px-3 mb-2 active" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
               <button class="btn bg-gradient-primary w-100 px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
            </div>
            <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
            <!-- Navbar Fixed -->
            <div class="mt-3">
               <h6 class="mb-0">Navbar Fixed</h6>
            </div>
            <div class="form-check form-switch ps-0">
               <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
            </div>
            <hr class="horizontal dark my-sm-4">
            <a class="btn bg-gradient-dark w-100" href="https://www.creative-tim.com/product/soft-ui-dashboard-pro">Free Download</a>
            <a class="btn btn-outline-dark w-100" href="https://www.creative-tim.com/learning-lab/bootstrap/license/soft-ui-dashboard">View documentation</a>
            <div class="w-100 text-center">
               <a class="github-button" href="https://github.com/creativetimofficial/soft-ui-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/soft-ui-dashboard on GitHub">Star</a>
               <h6 class="mt-3">Thank you for sharing!</h6>
               <a href="https://twitter.com/intent/tweet?text=Check%20Soft%20UI%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fsoft-ui-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
                  <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
               </a>
               <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/soft-ui-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
                  <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
               </a>
            </div>
         </div>
      </div>
   </div>

   <!-- JS Files   -->
   <script src="<?= base_url('assets/js/popper.min.js') ?>"></script>
   <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
   <script src="<?= base_url('assets/js/sweetalert2.all.min.js') ?>"></script>
   <script src="<?= base_url('assets/js/soft-ui-dashboard.min.js') ?>"></script>
</body>

</html>
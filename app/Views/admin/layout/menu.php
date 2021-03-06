<?php

$menu = array(
   array(
      'name' => 'Dashboard',
      'url' => 'admin/home/index',
      'icon' => 'fas fa-home',
   ),
   array(
      'name' => 'Productos',
      'url' => 'admin/product/index',
      'icon' => 'fas fa-shopping-bag',
   ),
   array(
      'name' => 'Categorias',
      'url' => 'admin/category/index',
      'icon' => 'fas fa-list',
   ),
);

?>

<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
   <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
         <img src="https://static.vecteezy.com/system/resources/previews/000/376/355/original/user-management-vector-icon.jpg" class="navbar-brand-img h-100" alt="main_logo">
         <span class="ms-1 font-weight-bold text-white">Dashboard app</span>
      </a>
   </div>
   <hr class="horizontal light mt-0 mb-2">
   <div class="collapse navbar-collapse w-auto max-height-vh-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">

         <?php foreach ($menu as $item) : ?>
            <!-- <li class="nav-item">
               <a class="nav-link text-white" href="<?= site_url($item['url']) ?>">
                  <div class="text-white text-center me-3 d-flex align-items-center justify-content-center">
                     <i class="<?= $item['icon'] ?>" style="font-size: 1.5rem;"></i>
                  </div>
                  <span class="nav-link-text ms-1"><?= $item['name'] ?></span>
               </a>
            </li> -->
            <li class="nav-item">
               <a class="nav-link" href="<?= site_url($item['url']) ?>">
                  <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center text-dark">
                     <i class="<?= $item['icon'] ?> text-dark" style="font-size: 1.3rem;"></i>
                  </div>
                  <span class="nav-link-text ms-1 text-white"><?= $item['name'] ?></span>
               </a>
            </li>
         <?php endforeach ?>

      </ul>
   </div>
   <div class="sidenav-footer position-absolute w-100 bottom-0 ">
      <div class="mx-3">
         <a class="btn bg-gradient-primary mt-4 w-100" href="javascript:;" type="button">APP</a>
      </div>
   </div>
</aside>
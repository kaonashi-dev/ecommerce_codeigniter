<?php

namespace App\Controllers\Admin;

use App\Controllers\Base\BaseController;

class Dashboard extends BaseController
{
   /**
    * Cargar plantilla del dashboard
    */
   public function loadTemplate(string $view): string
   {
      # Conseguir el layout
      $menu = view('admin/layout/menu');
      $navbar = view('admin/layout/navbar');
      $footer = view('admin/layout/footer');

      # Vista que solicitada
      $content = view('admin/' . $view);

      $data = array(
         'menu' => $menu,
         'navbar' => $navbar,
         'footer' => $footer,
         'content' => $content,
      );

      return view('admin/layout/template', $data);
   }
}

<?php

namespace App\Controllers\Admin;

use App\Controllers\Base\BaseController;
use App\Controllers\Admin\Dashboard;

class Product extends BaseController
{
   private $dashboard;

   public function __construct()
   {
      $this->dashboard = new Dashboard();
   }

   public function index()
   {
      return $this->dashboard->loadTemplate('product/index');
   }
}

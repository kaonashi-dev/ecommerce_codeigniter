<?php

namespace App\Controllers\Admin;

use App\Controllers\Base\BaseController;
use CodeIgniter\API\ResponseTrait;

use App\Controllers\Admin\Dashboard;
use App\Models\Admin\CategoryModel;

class Category extends BaseController
{
   use ResponseTrait;
   private $categoryModel;

   public function __construct()
   {
      $this->categoryModel = new CategoryModel();
   }

   /**
    * Lista todas las categorias
    */
   public function getAll()
   {
      $data = $this->categoryModel->getAll();
      $json = array(
         'results' => $data
      );
      return $this->respond($json);
   }

   /**
    * Filtra categoria por el id
    */
   public function getById()
   {
      $id = $this->request->getPost('categoryId');
      var_dump($id);
      $data = $this->categoryModel->getItemById($id);

      $json = array(
         'results' => $data
      );
      return $this->respond($json);
   }

   /**
    * Crear categorias
    */
   public function create()
   {
      $category = array(
         'name' => $this->request->getPost('name'),
         'description' => $this->request->getPost('description'),
         'picture' => '',
         'state' => $this->request->getPost('state'),
      );
      $response = $this->categoryModel->insertItem($category);

      $json = array('results' => $response);
      return $this->respond($json);
   }

   /**
    * Vista principal
    */
   public function index(): void
   {
      $dashboard = new Dashboard();
      echo $dashboard->loadTemplate('category/index');
   }
}

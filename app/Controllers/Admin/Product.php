<?php

namespace App\Controllers\Admin;

use App\Controllers\Base\BaseController;
use CodeIgniter\API\ResponseTrait;

use App\Controllers\Admin\Dashboard;
use App\Models\Admin\ProductModel;

class Product extends BaseController
{
   use ResponseTrait;
   private $productModel;
   private $dashboard;

   public function __construct()
   {
      $this->productModel = new ProductModel();
   }

   /**
    * Cargar vista para listar, crear, actualizar los productos
    */
   public function index()
   {
      $dashboard = new Dashboard();
      return $dashboard->loadTemplate('product/index');
   }

   /**
    * Crear un producto
    */
   public function create()
   {
      $product = json_decode($this->request->getPost('product'), true);
      $category = array(
         'name' => $product['name'],
         'idcategory' => $product['idcategory'],
         'name' => $product['name'],
         'description' => $product['description'],
         'price' => $product['price'],
         'dcto' => $product['dcto'],
         'picture' => $product['picture'],
         'state' => $product['state'],
      );
      $response = $this->productModel->insertProduct($category);

      $json = array('results' => $response);
      return $this->respond($json);
   }

   /**
    * Edición del producto
    */
   public function update()
   {
      $product = json_decode($this->request->getPost('product'), true);
      $updateData = array(
         'name' => $product['name'],
         'idcategory' => $product['idcategory'],
         'name' => $product['name'],
         'description' => $product['description'],
         'price' => $product['price'],
         'dcto' => $product['dcto'],
         'picture' => $product['picture'],
         'state' => $product['state'],
      );
      $productId = $product['id'];
      $response = $this->productModel->updateProduct($updateData, $productId);

      $json = array('results' => $response);
      return $this->respond($json);
   }

   /**
    * Listar todos los articulos
    */
   public function getAll()
   {
      $products = $this->productModel->getAll();
      foreach ($products as $product) {
         $data[] = array(
            'id' => $product['id'],
            'name' => $product['name'],
            'idcategory' => $product['idcategory'],
            'name' => $product['name'],
            'description' => $product['description'],
            'price' => $product['price'],
            'dcto' => $product['dcto'],
            'picture' => $product['dcto'],
            'state' => $product['state'],

            'priceView' => '$' . number_format($product['price']),
            'stateView' => ($product['state'] == 1) ? 'Activo' : 'Inactivo',
         );
      }


      $json = array('results' => $data);
      return $this->respond($json);
   }
}

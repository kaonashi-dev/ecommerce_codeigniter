<?php

namespace App\Models\Admin;

use CodeIgniter\Model;
use Config\Database;

class ProductModel extends Model
{
   protected $db;
   protected $builder;

   public function __construct()
   {
      $this->db = Database::connect();
      $this->builder = $this->db->table('product');
   }

   /**
    * Devuelve todos los productos
    */
   public function getAll(): array
   {
      $this->builder->select();
      $query = $this->builder->get();
      return $query->getResultArray();
   }

   /**
    * Crear producto
    * @param array $data Datos de la tabla
    * @return int Id del producto
    */
   public function insertProduct($data): int
   {
      $this->builder->insert($data);
      return $this->db->insertID();
   }

   /**
    * Actualizar producto
    * @param array $data Datos de la tabla
    * @param int $id id del producto
    * @return bool
    */
   public function updateProduct($data, $id): bool
   {
     $this->builder->where('id', $id);
     return $this->builder->update($data);
   }
}

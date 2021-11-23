<?php

namespace App\Models\Admin;

use CodeIgniter\Model;
use Config\Database;

class CategoryModel extends Model
{
   protected $db;
   protected $builder;

   public function __construct()
   {
      $this->db = Database::connect();
      $this->builder = $this->db->table('category');
   }

   /**
    * Devuelve todas las categorias
    */
   public function getAll(): array
   {
      $this->builder->select();
      $query = $this->builder->get();
      return $query->getResultArray();
   }

   /**
    * Devuelve una categoria por el id
    * @param int $id Id de la categoria
    */
   public function getItemById(int $id): array
   {
      return $this->findAll();
   }

   /**
    * Registar categoria
    * @param array $data Datos de la tabla
    * @return int Id de la categoria
    */
   public function insertItem($data) : int
   {
      $this->builder->insert($data);
      return $this->db->insertID();
   }

   /**
    * Devuelve información basica de las categorias disponibles
    */
   public function getListCategory()
   {
      $this->builder->select('id, name');
      $this->builder->where('state', 1);
      $query = $this->builder->get();
      return $query->getResultArray();
   }
}

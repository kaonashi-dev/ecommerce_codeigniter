<?php

namespace App\Models;

use CodeIgniter\Model;

class TestModel extends Model
{
   protected $table = 'item';

   public function getAll()
   {
      return $this->findAll();
   }
}

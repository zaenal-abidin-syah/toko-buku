<?php

namespace App\Models;

use CodeIgniter\Model;

class MenuModel extends Model
{
  protected $table = 'menu';
  protected $primaryKey = 'id';
  protected $allowedFields = ['nama_menu', 'controller'];

  public function getMenu($id = false)
  {
    if ($id === false) {
      return $this->findAll();
    } else {
      return $this->where(['id' => $id])->first();
    }
  }
}

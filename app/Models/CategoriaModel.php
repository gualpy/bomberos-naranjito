<?php
namespace App\Models;


use CodeIgniter\Model;

class CategoriaModel extends Model
{
    protected $table            =   'tblCategorias';
    protected $primaryKey       =   'id';
    protected $allowedFields    =   ['nombre','descripcion','condicion'];


    protected $useTimestamps    =   true;

    protected $updatedField     =   'updated_at';
}
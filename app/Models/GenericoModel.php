<?php 
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
use CodeIgniter\Validation\ValidationInterface;
use CodeIgniter\Config\Database;

class GenericoModel extends Model{

//    public $table            =   'tblBlogs';
//    public $primaryKey       =   'id';
//    public $allowedFields    =   ['titulo','contenido','slug','estado','fecha'];
//    public $useSoftDeletes   =   true;

//    public $useTimestamps    =   true;
//    public $createdField     =   'created_at';
//    public $updatedField     =   'updated_at';
//    public $deletedField     =   'deleted_at';

    public function __construct()
    {
        parent::__construct();
        $db = \Config\Database::connect();
    }

    public function listarTodo()
    {
        $db = \Config\Database::connect();
        $builder = $db->table("tblBlogs");
        return $query = $builder->get();


    }

}
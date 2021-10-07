<?php 
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Validation\ValidationInterface;
use CodeIgniter\Model;

class BlogModel extends Model{

    protected $table            =   'tblBlogs';
    protected $primaryKey       =   'id';
    protected $allowedFields    =   ['titulo','contenido','slug','estado','fecha'];


    protected $useTimestamps    =   true;

    protected $updatedField     =   'updated_at';


    public function crearNoticia($data=null)
    {
        //return $this->db->table($this->table)->insert($data);
    }

    //getIdNoticia ya no uso por que uso find()

    public function getNoticiaBySlug($slug=null)
    {
        if($slug===null)
        {
            return $this->findAll();
        }
        return $this->asArray()->where(['slug'=>$slug])->first();
    }

}
<?php
namespace App\Models;
use CodeIgniter\Model;

class VoluntarioModel extends Model
{
    protected $table            =   'tblVoluntarios';
    protected $primaryKey       =   'id';
    protected $useTimestamps    =   true;
    //protected $createdField     =   'created_at';
    protected $updatedField     =   'updated_at';
    protected $allowedFields    =   ['nombre','apellido','direccion','cedula','telefono','foto','fechaNacimiento','tipoSanguineo','email','estado'];


}
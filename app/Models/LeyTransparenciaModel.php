<?php


namespace App\Models;


class LeyTransparenciaModel
{
    protected $table            =   'tblley';
    protected $primaryKey       =   'id';
    protected $useTimestamps    =   true;
    protected $createdField     =   'created_at';
    protected $updatedField     =   'updated_at';
    protected $allowedFields    =   ['titular','tema','ruta','categoria'];

}
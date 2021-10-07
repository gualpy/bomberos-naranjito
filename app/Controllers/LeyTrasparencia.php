<?php

namespace App\Controllers;


use App\Models\LeyTransparenciaModel;

class LeyTrasparencia
{
    private  $model;
    public function __construct()
    {
        $this->model=new LeyTransparenciaModel();
    }

    public function index()
    {
        $data = [
            'voluntario' => $this->model->orderBy('id','DESC')->paginate(10),
            'pager' =>$this->model->pager
        ];

        echo view('admin/voluntario_view',$data);

    }

}
<?php


namespace App\Controllers;

use CodeIgniter\Controller;

class CategoriaController extends Controller
{

    public function index()
    {
        if(isset($_GET))
        {
            var_dump($_GET);
            return view('admin/categoria_view');

        }else{
            return var_dump($_GET);
        }


    }

}
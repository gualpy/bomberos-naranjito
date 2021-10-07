<?php

namespace App\Controllers;

class Home extends BaseController
{
    
    public function index()
	{
        //envía la data a la vista HOME, portada principal
        $model = new BlogModel();

        $data['BlogModel']=$model->orderBy('id','DESC')->findAll();
        //ob_start();
        return view('/layouts/home_view',$data);
	}

	public function institucion()
	{
		return view('layouts/institucion_view');
	}

	public function ayuda()
	{
		return view('layouts/ayuda-comunitaria_view');
	}

	public function contactenos()
	{
		return view('layouts/contactenos_view');
	}
	public function galeria()
	{
		return view('layouts/galeria_view');
	}

	public function leydetransparencia()
	{
		return view ('layouts/ley-de-transparencia_view');
	}

	public function nosotros()
	{
		return view('layouts/nosotros_view');
	}

	public function noticias()
	{

        $model = new BlogModel();
        $data['BlogModel']=$model->orderBy('id','DESC')->findAll();
		return view('layouts/noticias_view',$data);
	}

	public function permisofuncionamiento()
	{
		return view('layouts/permiso-funcionamiento_view');
	}

	public function prevencion()
	{
		return view('layouts/prevencion_view');
	}
}

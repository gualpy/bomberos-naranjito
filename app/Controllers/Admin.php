<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\BlogModel;
class Admin extends Controller{
    
    
    
    

    public function index()
    {
        
        return view('admin/ley_view'); 
    }

    public function blognoticia()
    {
        /*$model = new BlogModel();
        $data['Blogs']=$model->orderBy('id','DESC')->findAll();*/

        /*$data['profiles']=[
            array(
                'nombre'=>'nombre1',
                'apellido'=>'apellido1',
                'direccion'=>'direccion1',
            ),
            array(
                'nombre'=>'nombre2',
                'apellido'=>'apellido2',
                'direccion'=>'direccion2',
            ),
            array(
                'nombre'=>'nombre3',
                'apellido'=>'apellido3',
                'direccion'=>'direccion3',
            ),
        ];*/
        $model = new BlogModel();
        $data['BlogModel']=$model->orderBy('id','DESC')->findAll();
        return view('/admin/blognoticia_view',$data);

    }
     
    public function voluntario()
    {
        return view('admin/voluntario_view');
    }
    public function categoria()
    {
        return view('admin/categoria_view');
    }

    public function banner()
    {
        return view('admin/banner_view');
    }

    public function portada()
    {
        return view('admin/portada_view');
    }

    public function ley()
    {
    return view('admin/ley_view'); 
    }

}
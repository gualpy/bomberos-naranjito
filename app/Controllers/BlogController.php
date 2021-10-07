<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\BlogModel;
use CodeIgniter\Exceptions\PageNotFoundException;



class BlogController extends Controller
{
    public $tabla = 'tblBlogs';
    private $model;
    //protected $helpers = ['operaciones', 'utilidades'];
    public function __construct()
    {
        $this-> model =new BlogModel();
    }


    public function index()
    {
        $pager = \Config\Services::pager();
        helper(['utilidades','operaciones']);
        //$model = new BlogModel();
        //$data['BlogModel']=$model->orderBy('id','DESC')->findAll();
        $data=[
            'noticia'=>$this->model->orderBy('id','DESC')->paginate(4),
            'pager' =>$this->model->pager
        ];
        //var_dump($data['noticia']);die();
        //envía la data a la sección ADMIN
        return view('/admin/blognoticia_view',$data);
    }

    public function formulario()
    {
        return view("/admin/nuevoblog_view");
    }

    public function createUpdate($id=null)
    {

        helper(['form','url']);
       //$validation =  \Config\Services::validation();

        $inputs=$this->validate([
            'titulo' => 'required|min_length[3]',
            'contenido' => 'required|min_length[3]',
        ]);

        if (!$inputs)
            {
                return view('/admin/nuevoblog_view',[
                    'validation'=>$this->validator
                ]);
            }
        $data['noticias']   =  $this->model->find($id);
        $id = $this->request->getVar('id');

        if (empty($data['noticias'])) {

            throw new \CodeIgniter\Exceptions\PageNotFoundException(('No se puede encontrara esta noticia'));
        }

        if (empty($id))
        {
            //Si el ID está vacio entonces crea una nueva noticia
            $data = [

                'titulo'     =>$this->request->getVar('titulo'),
                'contenido'  =>$this->request->getVar('contenido'),
                'slug'       =>url_title($this->request->getVar('titulo'),'-',TRUE),
            ];

            $this->model->save($data);
        }else{
            // si el id está lleno entonces actualiza la noticia
            $data = [
                'id'         =>$this->request->getVar('id'),
                'titulo'     =>$this->request->getVar('titulo'),
                'contenido'  =>$this->request->getVar('contenido'),
                'slug'       =>url_title($this->request->getVar('titulo'),'-',TRUE),
            ];

            $this->model->save($data);

        }



        return redirect()->to(base_url("admin/blog/listado"));

    }

    public function update($id=null)
    {
        $data['noticias']   =   $this->model->find($id);
        if (empty($data['noticias']))
        {
            throw new PageNotFoundException("No se puede encontrar esta noticia");
        }
        /*var_dump($id);
        die();*/
        $data   =   [
            'id'           =>  $data['noticias']['id'],
            'titulo'       =>  $data['noticias']['titulo'],
            'contenido'    =>  $data['noticias']['contenido'],
            'estado'       =>  $data['noticias']['estado'],
        ];
        return view('/admin/nuevoblog_view',$data);
        //echo view("/admin/creado_view", ['titulo'=>'Se ha actualizado la nueva noticia']);
    }

    public function delete($id = null)
    {
        $this->model->delete($id);
        //return view('/admin/eliminado_view');
        //echo view("/admin/creado_view", ['titulo'=>'Se ha eliminado la nueva noticia']);
    }
}
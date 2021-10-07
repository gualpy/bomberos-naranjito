<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\VoluntarioModel;
use CodeIgniter\Exceptions\PageNotFoundException;
use CodeIgniter\Typography\Typography;

class VoluntarioController extends Controller
{

    private $model;

    public function __construct()
    {
        $this->model = new VoluntarioModel();
    }

    public function index()
    {
        $data = [
            'voluntario' => $this->model->orderBy('id', 'ASC')->paginate(10),
            'pager' =>$this->model->pager
        ];

        return view('admin/voluntario_view', $data);
    }

    public function create()
    {
        $archivo = $this->request->getFile('foto');
        $validated = $this->validate([
            'nombre'=>'required|min_length[5]',
            'apellido'=>'required',
            'telefono'=>'required',
            'direccion'=>'required',
            'cedula'=>'required',
            'email'=>'required|valid_email',
            'foto'=>'required|uploaded[foto]'
        ]);

        if(!$validated)
        {
            return view('/admin/voluntariofrm_view',['validation'=>$this->validator]);
        }
        if (!empty($archivo))
        {
            throw new \Exception("Debe ingresar una foto");
        }

        if (isset($_POST))
        {
            if(empty($id))
            {
                $foto=$this->request->getFile("foto");
                $fotoNombre = $foto->getName();
                $data=[
                    'nombre'            =>$this->request->getVar('nombre'),
                    'apellido'          =>$this->request->getVar('apellido'),
                    'direccion'         =>$this->request->getVar('direccion'),
                    'cedula'            =>$this->request->getVar('cedula'),
                    'telefono'          =>$this->request->getVar('telefono'),
                    'foto'              =>$fotoNombre,
                    'fechaNacimiento'   =>$this->request->getVar('fechaNacimiento'),
                    'tipoSanguineo'     =>$this->request->getVar('tipoSanguineo'),
                    'email'             =>$this->request->getVar('email'),
                    'estado'            =>$this->request->getVar('estado')
                ];

                $foto->move('uploads/perfil');
                $this->voluntario->save($data);

            }else{

                $foto=$this->request->getFile("foto");
                $fotoNombre = $foto->getName();
                $data=[
                    'id'                =>$this->request->getVar('id'),
                    'nombre'            =>$this->request->getVar('nombre'),
                    'apellido'          =>$this->request->getVar('apellido'),
                    'direccion'         =>$this->request->getVar('direccion'),
                    'cedula'            =>$this->request->getVar('cedula'),
                    'telefono'          =>$this->request->getVar('telefono'),
                    'foto'              =>$fotoNombre,
                    'fechaNacimiento'   =>$this->request->getVar('fechaNacimiento'),
                    'tipoSanguineo'     =>$this->request->getVar('tipoSanguineo'),
                    'email'             =>$this->request->getVar('email'),
                    'estado'            =>$this->request->getVar('estado')
                ];
                $foto->move('uploads/perfil');
                $this->model->save($data);
            }
        }


        return redirect()->to(base_url("/admin/voluntarios/"));
    }

    public function update($id=null)
    {
        $data['voluntario']=$this->model->find($id);
        $foto=$this->request->getFile("foto");

            if (empty($data['voluntario']))
            {
                throw new PageNotFoundException("No se puede encontrar este voluntario");
            }


//            $fotoNombre = $foto->getName();
            $data=[
                'nombre'            =>$data['voluntario']['nombre'],
                'apellido'          =>$data['voluntario']['apellido'],
                'direccion'         =>$data['voluntario']['direccion'],
                'cedula'            =>$data['voluntario']['cedula'],
                'telefono'          =>$data['voluntario']['telefono'],
                'foto'              =>$data['voluntario']['foto'],
                'fechaNacimiento'   =>$data['voluntario']['fechaNacimiento'],
                'tipoSanguineo'     =>$data['voluntario']['tipoSanguineo'],
                'email'             =>$data['voluntario']['email'],
                'estado'            =>$data['voluntario']['estado']
            ];
            //var_dump($data);die();
            return view('/admin/voluntariofrm_view',$data);
    }

    public function delete($id = null)
    {
        /*Busca el nombre del archivo por el ID y con unlink borra */
        $data['voluntario']=$this->model->find($id);
        //var_dump($data);die();
        $nombreFoto=$data['voluntario']['foto'];
        //Si el archivo no lo encuentra igual debe borrar el registrox
        if (empty($nombreFoto))
        {

            return $this->model->delete($id);;
        }else
        {
            unlink("uploads/perfil/".$nombreFoto);
            $this->model->delete($id);
        }

    }

    public function buscar()
    {


        $type=$this->request->getGet('type');
        $field=$this->request->getGet('txtBuscar');
        $query = [];

        if ( $type != '' && $type === 'nombre') {
            $query = $this->model->like('nombre', $field)->get();
        }else if ( $type != '' && $type === 'cedula'){
            $query = $this->model->like('cedula', $field)->get();
        }

        if( $query->getResultArray() > 0 ){
            $data['voluntario'] = $query->getResultArray();
        } else {
            $this->session->setFlashdata('message', "<div class = 'alert alert-warning'><b>No existe ese voluntario</b></div>");
        }

        return view('admin/voluntario_view', $data);

        //return redirect()->to(base_url("/admin/voluntarios", $data));

    }

    public function frm()
    {

        return view("/admin/voluntariofrm_view");
    }

}

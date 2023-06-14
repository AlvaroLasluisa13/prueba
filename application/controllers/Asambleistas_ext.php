<?php
 class Asambleistas_ext extends CI_Controller
 {
   function __construct()
   {
     parent::__construct();
     //Cargar el modelo
     $this->load->model('Asambleista_ext');
   }

   public function index()
   {
     $data['asambleistas_ext']=$this->Asambleista_ext->obtenerTodos();
     $this->load->view('header');
     $this->load->view('asambleistas_ext/index',$data);
     $this->load->view('footer');
   }

   public function nuevo()
   {
     $this->load->view('header');
     $this->load->view('asambleistas_ext/nuevo');
     $this->load->view('footer');
   }

   public function guardar(){
     $datosNuevoAsambleista_ext=array(
       "ci_asamext"=>$this->input->post('ci_asamext'),
       "apellido_asamext"=>$this->input->post('apellido_asamext'),
       "apellido2_asamext"=>$this->input->post('apellido2_asamext'),
       "nombre_asamext"=>$this->input->post('nombre_asamext'),
       "provincia_asamext"=>$this->input->post('provincia_asamext'),
       "ciudad_asamext"=>$this->input->post('ciudad_asamext'),
       "partido_asamext"=>$this->input->post('partido_asamext'),
       "latitud_asamext"=>$this->input->post('latitud_asamext'),
       "longitud_asamext"=>$this->input->post('longitud_asamext'),
      );
      //$this->Instructor->insertar($datosNuevo);
      if ($this->Asambleista_ext->insertar($datosNuevoAsambleista_ext))
      {
        redirect ('Asambleistas_ext/index');
      }else {
        echo "<h1>Error al insertar</h1>";
      }
   }
   //funcion para terminar asamextidentes
   public function eliminar($id_asamext){
     if ($this->Asambleista_ext->borrar($id_asamext)) {
       redirect('asambleistas_ext/index');
     }else {
       echo "ERROR AL BORRAR :(";
     }

   }
 }

 ?>

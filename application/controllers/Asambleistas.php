<?php
 class Asambleistas extends CI_Controller
 {
   function __construct()
   {
     parent::__construct();
     //Cargar el modelo
     $this->load->model('Asambleista');
   }

   public function index()
   {
     $data['asambleistas']=$this->Asambleista->obtenerTodos();
     $this->load->view('header');
     $this->load->view('asambleistas/index',$data);
     $this->load->view('footer');
   }

   public function nuevo()
   {
     $this->load->view('header');
     $this->load->view('asambleistas/nuevo');
     $this->load->view('footer');
   }

   public function guardar(){
     $datosNuevoAsambleista=array(
       "ci_asam"=>$this->input->post('ci_asam'),
       "apellido_asam"=>$this->input->post('apellido_asam'),
       "apellido2_asam"=>$this->input->post('apellido2_asam'),
       "nombre_asam"=>$this->input->post('nombre_asam'),
       "provincia_asam"=>$this->input->post('provincia_asam'),
       "ciudad_asam"=>$this->input->post('ciudad_asam'),
       "partido_asam"=>$this->input->post('partido_asam'),
       "latitud_asam"=>$this->input->post('latitud_asam'),
       "longitud_asam"=>$this->input->post('longitud_asam'),
      );
      //$this->Instructor->insertar($datosNuevo);
      if ($this->Asambleista->insertar($datosNuevoAsambleista))
      {
        redirect ('asambleistas/index');
      }else {
        echo "<h1>Error al insertar</h1>";
      }
   }
   //funcion para terminar
   public function eliminar($id_asam){
     if ($this->Asambleista->borrar($id_asam)) {
       redirect('asambleista/index');
     }else {
       echo "ERROR AL BORRAR :(";
     }

   }
 }

 ?>

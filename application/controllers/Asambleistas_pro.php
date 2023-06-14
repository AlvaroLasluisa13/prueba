<?php
 class Presidentes extends CI_Controller
 {
   function __construct()
   {
     parent::__construct();
     //Cargar el modelo
     $this->load->model('Presidente');
   }

   public function index()
   {
     $data['presidentes']=$this->Presidente->obtenerTodos();
     $this->load->view('header');
     $this->load->view('presidentes/index',$data);
     $this->load->view('footer');
   }

   public function nuevo()
   {
     $this->load->view('header');
     $this->load->view('presidentes/nuevo');
     $this->load->view('footer');
   }

   public function guardar(){
     $datosNuevoPresidente=array(
       "ci_pres"=>$this->input->post('ci_pres'),
       "apellido_pres"=>$this->input->post('apellido_pres'),
       "apellido2_pres"=>$this->input->post('apellido2_pres'),
       "nombre_pres"=>$this->input->post('nombre_pres'),
       "provincia_pres"=>$this->input->post('provincia_pres'),
       "ciudad_pres"=>$this->input->post('ciudad_pres'),
       "partido_pres"=>$this->input->post('partido_pres'),
       "latitud_pres"=>$this->input->post('latitud_pres'),
       "longitud_pres"=>$this->input->post('longitud_pres'),
      );
      //$this->Instructor->insertar($datosNuevo);
      if ($this->Presidente->insertar($datosNuevoPresidente))
      {
        redirect ('presidentes/index');
      }else {
        echo "<h1>Error al insertar</h1>";
      }
   }
   //funcion para terminar presidentes
   public function eliminar($id_pres){
     if ($this->Presidente->borrar($id_pres)) {
       redirect('presidentes/index');
     }else {
       echo "ERROR AL BORRAR :(";
     }

   }
 }

 ?>

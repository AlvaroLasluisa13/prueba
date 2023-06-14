<?php
  class Asambleista extends CI_Model
  {
    function __construct()
    {
      parent::__construct();
    }
    function insertar($datos){
        //Active record en CodeIgniter
        return $this->db->insert('asambleista',$datos);
    }

    function obtenerTodos(){
        $listadoAsambleistas=$this->db->get("asambleista");
        if ($listadoAsambleistas->num_rows()>0) {
          return $listadoAsambleistas->result();
        } else {
          return false;
        }
    }
    //borrar
    function borrar($id_ele){
      $this->db->where("id_asam",$id_asam);
        return $this->db->delete("asambleista");
    }
  }//cierre de la clase
 ?>

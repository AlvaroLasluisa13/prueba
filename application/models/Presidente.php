<?php
  class Presidente extends CI_Model
  {
    function __construct()
    {
      parent::__construct();
    }
    function insertar($datos){
        //Active record en CodeIgniter
        return $this->db->insert('presidente',$datos);
    }

    function obtenerTodos(){
        $listadoPresidentes=$this->db->get("presidente");
        if ($listadoPresidentes->num_rows()>0) {
          return $listadoPresidentes->result();
        } else {
          return false;
        }
    }
    //borrar presidentes
    function borrar($id_pres){
      $this->db->where("id_pres",$id_pres);
        return $this->db->delete("presidente");
    }
  }//cierre de la clase
 ?>

<?php
  class Asambleista_ext extends CI_Model
  {
    function __construct()
    {
      parent::__construct();
    }
    function insertar($datos){
        //Active record en CodeIgniter
        return $this->db->insert('asambleista_ext',$datos);
    }

    function obtenerTodos(){
        $listadoAsambleistas_ext=$this->db->get("asambleistaext");
        if ($listadoAsambleistas_ext->num_rows()>0) {
          return $listadoAsambleistas_ext->result();
        } else {
          return false;
        }
    }
    //borrar presidentes
    function borrar($id_asamext){
      $this->db->where("id_asamext",$id_asamext);
        return $this->db->delete("asambleistaext");
    }
  }//cierre de la clase
 ?>

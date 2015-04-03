<?php
class User_model extends CI_Model {
 
  public function __construct() {
    parent::__construct();
  }
 
  public function insert($nombre, $apellidos, $correo, $contrasena) {
      $this->db->set('nombre', $nombre);
      $this->db->set('apellidos', $apellidos);
      $this->db->set('correo', $correo);
      $this->db->set('contrasena', $contrasena);
      $this->db->insert('tbl_user');
  }

    //select de usuarios
    function get_all() 
    {
      $query = $this->db->get('tbl_user');
      return $query->result();
    }

    //autenticar usuario
   function authenticate($correo, $contrasena) 
   {
      //$this->db->select('id');  
      //$this->db->where('correo', $correo);
      //$this->db->where('contrasena', $contrasena);
      //$result = $this->db->get('tbl_user');
    $this->db->select('id');
    $this->db->where('correo',$correo);
    $this->db->where('contrasena',$contrasena);
    $query = $this->db->get('tbl_user');
    if($query->num_rows() == 1)
    {
      redirect('user/home','refresh');
    }else{
      redirect('user/login','refresh');
    }
   }

}
?>
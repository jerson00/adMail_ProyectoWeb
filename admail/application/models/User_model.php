<?php
class User_model extends CI_Model {
 
  public function __construct() {
    parent::__construct();
  }
 
  public function insert($nombre, $apellidos, $correo, $contrasena,$correo_alternativo,$verificada,$codigo) {
      
      $this->db->set('nombre', $nombre);
      $this->db->set('apellidos', $apellidos);
      $this->db->set('correo', $correo);
      $this->db->set('contrasena', $contrasena);
      $this->db->set('correo_alternativo', $correo_alternativo);
      $this->db->set('verificada', $verificada);
      $this->db->set('codigo_confirmacion', $codigo);
      $this->db->insert('tbl_user');
  }

    //select de usuarios
    function get_all() 
    {
      $query = $this->db->get('tbl_user');
      return $query->result();
    }

    function verificar($codigo,$correo) 
   {
    $verificada="N";
    $this->db->select('id');
    $this->db->where('correo',$correo);
    $this->db->where('verificada',$verificada);
    $this->db->where('codigo_confirmacion',$codigo);
    $consulta = $this->db->get('tbl_user');

    if($consulta->num_rows() == 1){
        
        $data = array(
            'verificada' => "S"
        );
        $this->db->where('correo',$correo);
        $this->db->update('tbl_user', $data);
        redirect('user/home','refresh');
    }else{
          redirect('user/login','refresh');
        }
    
   }


    //autenticar usuario
   function authenticate($correo, $contrasena) 
   {
    $verificada="S";
    $this->db->select('id');
    $this->db->where('correo',$correo);
    $this->db->where('contrasena',$contrasena);
    $query = $this->db->get('tbl_user');
    if($query->num_rows() == 1)
    {
        $this->db->select('id');
        $this->db->where('correo',$correo);
        $this->db->where('contrasena',$contrasena);
        $this->db->where('verificada',$verificada);
        $query = $this->db->get('tbl_user');
        if($query->num_rows() == 1){
          redirect('user/home','refresh');
        }
        else{
        redirect('user/verificar','refresh');
        }
      
    }else{
      redirect('user/login','refresh');
    }
   }

}
?>
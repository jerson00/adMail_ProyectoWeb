<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct() 
	{
		parent:: __construct();
		$this->load->model('User_model', 'user');
	}

	public function index()
	{
		$data['title'] = 'Login -- Admail';
		$this->load->view('template/header',$data);
		$this->load->view('user/login');
		$this->load->view('template/footer');
	}

	public function register()
	{
		$data['title'] = 'Registro -- Admail';
		$this->load->view('template/header',$data);
		$this->load->view('user/register');
		$this->load->view('template/footer');
	}

	public function home()
	{
		$this->load->view('user/home');
	}

	public function select() 
	{
		$result = $this->user->get_all();

		$data['users'] = $result;
		$data['title'] = "List of users test";
		$this->load->view('user/index', $data);
	}

	//se conecta con el modelo y llama a autenticar en modelo de usuarios
	public function authenticate() 
	{
		$correo = $_POST['correo'];
		$contrasena = $_POST['contrasena'];
		$encriptada=md5($contrasena);
		$this->load->model('User_model', 'user');
	    $this->user->authenticate($correo, $encriptada);
	}

	public function insert() 
	{
		$nombre = $_POST['nombre'];
		$apellidos = $_POST['apellidos'];
		$correo = $_POST['correo'];
		$contrasena = $_POST['contrasena'];
		$confirm_contrasena = $_POST['confirm_contrasena'];
		$correo_alternativo = $_POST['correo_alternativo'];
		$verificada = 'N';
		if($confirm_contrasena===$contrasena){
			$encriptada=md5($contrasena);
			$this->load->model('User_model', 'user');
			$this->user->insert($nombre,$apellidos,$correo,$encriptada,$correo_alternativo,$verificada);
			redirect(base_url("user/login"), "refresh");
		}else
		{
			echo "<script type=\"text/javascript\">history.go(-1);</script>";
			//redirect(base_url("user/register"), "refresh");
		}
	}
}
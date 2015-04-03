<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct() 
	{
		parent:: __construct();
		$this->load->model('User_model', 'user');
	}

	public function index()
	{
		$this->load->view('user/login');
	}

	public function register()
	{
		$this->load->view('user/register');
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
		$encriptada=md5($contrasena);
		$this->load->model('User_model', 'user');
		$this->user->insert($nombre,$apellidos,$correo,$encriptada);
		redirect(base_url("user/login"), "refresh");
	}
}
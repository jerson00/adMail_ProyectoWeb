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

	public function vistaVerificar(){
		$data['title'] = 'Verificación -- Admail';
		$this->load->view('template/header',$data);
		$this->load->view('user/verificar');
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
		$data['title'] = 'Inicio -- Admail';
		$this->load->view('template/header',$data);
		$this->load->view('user/home');
		$this->load->view('template/footer');
	}

	public function new_msg()
	{
		$data['title'] = 'Nuevo Mensaje -- Admail';
		$this->load->view('template/header',$data);
		$this->load->view('user/new_msg');
		$this->load->view('template/footer');
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


	public function verificar() 
	{
		$codigo = $_POST['codigo'];
		$correo = $_POST['correo'];
		$encriptado=md5($codigo);
		$this->load->model('User_model', 'user');
	    $this->user->verificar($encriptado,$correo);
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
		$codigo =rand(1000, 9999);
		$codigo_encriptado=md5($codigo);
		if($confirm_contrasena===$contrasena){
			$encriptada=md5($contrasena);
			$this->load->model('User_model', 'user');
			$this->user->insert($nombre,$apellidos,$correo,$encriptada,$correo_alternativo,$verificada,$codigo_encriptado);
			$this->enviar($correo_alternativo,$codigo);
			redirect(base_url("user/login"), "refresh");
		}else
		{
			echo "<script type=\"text/javascript\">history.go(-1);</script>";
			//redirect(base_url("user/register"), "refresh");
		}
	}

	//envia correo de registro
	public function enviar($para,$codigo){
		$config = array(
			'protocol' => 'smtp',
			'smtp_host' => 'smtp.mandrillapp.com', 
			'smtp_port' => 587,/*25,*/
			'smtp_user' => 'jerson.00@hotmail.com',/*mi user*/
			'smtp_pass' => 'D0HqYnexdN069atlLCcmCw'
		);

		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");
		$this->email->from('jerson.00@hotmail.com', 'Servicio de correo adMail');
		$this->email->to($para); /*para quién es*/
		$this->email->subject('Confirmación de la cuenta adMail');
		$this->email->message('Gracias por usar nuestro servicio.
			Una nueva cuenta ha sido creada, Para confirmar su correo debe ir al siguiente link: http://localhost/admail/index.php/user/verificar
			Su código de verificacion es '.$codigo.', guardelo en un lugar seguro.
			***El Equipo de adMail***'); /*the message*/

		if($this->email->send()){
	            echo('Email enviado correctamente');
	        //  redirect('user/home','refresh');
	    }else{
	           echo('No se a enviado el email');
	    }      
	}



}
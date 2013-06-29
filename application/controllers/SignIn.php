<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class SignIn extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();
		$this->load->model("sigin_model");
	}

	public function index()
	{
		$this->load->view('signIn');
	}

	public function process()
	{
		if(empty($_POST['email']) || empty($_POST['pass'])){
			$error = array("error" => "You must fill up both fields to login.");
			$this->load->view('signIn', $error);
		}else{
			$data = $this->sigin_model->get_members($_POST['email'], $_POST['pass']);
			//echo "<pre>";
			//var_dump($data);exit;


			if(count($data)!=0){
				$this->session->set_userdata($data[0]);
				redirect('/', 'reload');
				//$this->load->view('index');
			}else{
				$error = array("error" => "Email/Password is incorrect.");
				$this->load->view('signIn', $error);
			}
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
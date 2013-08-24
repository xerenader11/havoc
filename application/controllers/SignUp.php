<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class SignUp extends CI_Controller {

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
		$this->load->model("signup_model");
	}

	public function index()
	{
		$this->load->view('signUp');
	}

	public function process()
	{
		$data = array(
						"email"				=>	$_POST['email'],
						"password"			=>	$_POST['pass'],
						"fname"				=>	$_POST['fname'],
						"lname"				=>	$_POST['lname'],
						"mname"				=>	$_POST['mname'],
						"address"			=>	$_POST['address'],
						"mobile"			=>	$_POST['mobile'],
						"phone"				=>	$_POST['phone'],
						"gender"			=>	$_POST['gender'],
						"birth_date"		=>	$_POST['bdate'],
						"citizenship"		=>	$_POST['citizenship'],
						"civil_status"		=>	$_POST['cstatus'],
						"registration_date"	=>	$_POST['rdate']
			);

		$this->signup_model->new_member($data);

		redirect('/', 'location');
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */

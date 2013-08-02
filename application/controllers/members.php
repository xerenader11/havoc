<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Members extends CI_Controller {

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
		$this->load->model("member_model");
	}

	public function index()
	{
		$active = $this->member_model->get_active_members();
		$inactive = $this->member_model->get_inactive_members();


		$arr = array(
				'active'	=>	$active,
				'inactive'	=>	$inactive
			);

		$this->load->view('members', $arr);
	}

	public function activate()
	{
		$this->member_model->activateMember($_POST['member_id']);
	}

	public function getYear($year = '')
	{
		if(empty($year)){
			$year = date("Y");
		}

		return array($year - 1, $year, $year + 1);
	}

	public function promote()
	{
		$type = "user";

		if($_POST['bln']=='y'){
			$type = "admin";
		}

		$this->member_model->promote($type, $_POST['member_id']);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */

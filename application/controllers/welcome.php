<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

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

	private $page_id = 1;


	public function index()
	{	
		$this->load->model("content_model");

		if($this->session->userdata('type') == "admin"){
			$contents = $this->content_model->get_contents($this->page_id);
		}else{
			$contents = $this->content_model->get_published_contents($this->page_id);
		}

		$this->load->view('index', array("contents" => $contents, "page_id" => $this->page_id));
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
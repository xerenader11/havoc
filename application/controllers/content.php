<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Content extends CI_Controller {

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


	public function updateContent()
	{	
		$this->load->model("content_model");

		$data = array(
						"img"		=>	addslashes($this->input->post("img")),
						"title"		=>	addslashes($this->input->post("title")),
						"content"	=>	addslashes($this->input->post("content"))
			);

		$this->content_model->save_content($this->input->post("content_id"), $data);
	}

	public function updateIsActive()
	{
		$this->load->model("content_model");

		$data = array(
						"is_active"		=>	addslashes($this->input->post("act"))
			);

		$this->content_model->save_content($this->input->post("content_id"), $data);
	}

	public function addContent()
	{
		$this->load->model("content_model");

		$data = array(
						"page_id"	=>	$this->input->post("page_id"),
						"creator"	=>	$this->session->userdata('member_id'),
						"img"		=>	addslashes($this->input->post("img")),
						"title"		=>	addslashes($this->input->post("title")),
						"content"	=>	addslashes($this->input->post("content"))
			);

		$this->content_model->insert_content($data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
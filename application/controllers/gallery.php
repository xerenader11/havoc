<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gallery extends CI_Controller {

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
		$this->load->model("gallery_model");
	}

	public function index()
	{
		$obj_photo = $this->gallery_model->get_photos();
		$obj_video = $this->gallery_model->get_videos();

		if(isset($_FILES["file"])){
			$tmp_name = $_FILES["file"]["tmp_name"];
		    $name = $_FILES["file"]["name"];
		    $ext = pathinfo($name, PATHINFO_EXTENSION);


		   	$base_path = explode("/", BASEPATH);
			// checks for error in upload
			if (in_array($ext, array("jpg", "JPG", "jpeg", "JPEG", "gif", "GIF", "png", "PNG")))
			{
				// move uploaded file in temp folder
				move_uploaded_file($tmp_name, $base_path[0] . '/' . $base_path[1] . '/' . $base_path[2] . '/' . $base_path[3] . '/public/upload/img/' . $name);
			}
		}	//echo $base_path[0] . '/' . $base_path[1] . '/' . $base_path[2] . '/' . $base_path[3] . '/public/upload/img/' . $name; exit;


		$this->load->view('gallery', array("img" => $obj_photo, "vid" => $obj_video));
	}

	public function saveObj()
	{
		$data = array(
				"type"	=>	$this->input->post("type"),
				"url"	=>	$this->input->post("url"),
				"caption"	=>	$this->input->post("caption")
			);

		$this->gallery_model->save_objects($data);
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */

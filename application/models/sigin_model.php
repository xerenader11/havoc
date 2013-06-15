<?php

class Sigin_model extends CI_Model {

	public function __construct ()
	{
		
	}

	public function get_members ($email, $pass)
	{
		$this->havoc = $this->load->database("default", TRUE);

		$query = $this->havoc->get_where("members", array("email" => $email, "password" => $pass));

		$data = $query->result_array();	

		$query->free_result();	

		return $data;
		
	}


}
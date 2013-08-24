<?php

class Signup_model extends CI_Model {

	public function __construct ()
	{
		
	}

	public function new_member ($data)
	{
		$this->havoc = $this->load->database("default", TRUE);

		$this->havoc->insert("members", $data);
		
	}


}
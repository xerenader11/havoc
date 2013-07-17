<?php

class Member_model extends CI_Model {

	public function __construct ()
	{

	}

	public function get_active_members ()
	{
		$this->havoc = $this->load->database("default", TRUE);

		$query = $this->havoc->get_where("members", array("is_active" => 'y'));

		$data = $query->result_array();

		$query->free_result();

		return $data;

	}

	public function get_inactive_members ()
	{
		$this->havoc = $this->load->database("default", TRUE);

		$query = $this->havoc->get_where("members", array("is_active" => 'n'));

		$data = $query->result_array();

		$query->free_result();

		return $data;

	}
}

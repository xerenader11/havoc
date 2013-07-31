<?php

class Content_model extends CI_Model {

	public function __construct ()
	{

	}

	public function get_contents ($page_id)
	{
		$this->havoc = $this->load->database("default", TRUE);

		$query = $this->havoc->select('contents.*, members.fname, members.lname')
							 ->join("members", "members.member_id = contents.creator")
							 ->get_where("contents", array("contents.page_id" => $page_id));

		$data = $query->result_array();

		$query->free_result();

		return $data;

	}

	public function get_full_content ($content_id)
	{
		$this->havoc = $this->load->database("default", TRUE);

		$query = $this->havoc->select('contents.*, members.fname, members.lname')
							 ->join("members", "members.member_id = contents.creator")
							 ->get_where("contents", array("contents.content_id" => $content_id));

		$data = $query->result_array();

		$query->free_result();

		return $data;
	}

	public function get_published_contents ($page_id)
	{
		$this->havoc = $this->load->database("default", TRUE);

		$query = $this->havoc->select('contents.*, members.fname, members.lname')
							 ->join("members", "members.member_id = contents.creator")
							 ->get_where("contents", array("contents.page_id" => $page_id, "contents.is_active" => "y"));

		$data = $query->result_array();

		$query->free_result();

		return $data;
	}

	public function save_content ($content_id, $data)
	{
		$this->havoc = $this->load->database("default", TRUE);

		$query = $this->havoc->where("content_id", $content_id)->update("contents", $data);

		//echo $this->havoc->last_query();
	}

	public function insert_content ($data)
	{
		$this->havoc = $this->load->database("default", TRUE);

		$query = $this->havoc->insert("contents", $data);

		echo $this->havoc->last_query();
	}

}

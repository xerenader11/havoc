<?php

class Gallery_model extends CI_Model {

    public function __construct ()
    {

    }

    public function get_photos ()
    {
        $this->havoc = $this->load->database("default", TRUE);

        $query = $this->havoc->get_where("galleries", array("is_active" => "y", "type" => "photo"));

        $data = $query->result_array();

        $query->free_result();

        return $data;

    }

    public function get_videos ()
    {
        $this->havoc = $this->load->database("default", TRUE);

        $query = $this->havoc->get_where("galleries", array("is_active" => "y", "type" => "video"));

        $data = $query->result_array();

        $query->free_result();

        return $data;

    }


}

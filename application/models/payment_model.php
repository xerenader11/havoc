<?php

class Payment_model extends CI_Model {

    public function __construct ()
    {

    }

    public function get_paid_members ()
    {
        $this->havoc = $this->load->database("default", TRUE);

        $query = $this->havoc->get("payment");

        $data = $query->result_array();

        $query->free_result();

        return $data;

    }

    public function get_payment_status ($member_id)
    {
        $this->havoc = $this->load->database("default", TRUE);

        $query = $this->havoc->get_where("payment", array("member_id" => $member_id));

        $data = $query->result_array();

        $query->free_result();

        return $data;

    }

}

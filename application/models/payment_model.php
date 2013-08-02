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

        $query = $this->havoc->get_where("payment", array("member_id" => $member_id, "active_flag" => 'y'));

        $data = $query->result_array();

        $query->free_result();

        return $data;

    }

    public function memberPay()
    {
        $this->havoc = $this->load->database("default", TRUE);

        $this->havoc->insert("payment", array("member_id" => $_POST['member_id']));
    }

    public function deactivatePayment()
    {
        $this->havoc = $this->load->database("default", TRUE);

        $this->havoc->update("payment", array("active_flag" => 'n'));
    }

}

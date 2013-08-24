<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Financial extends CI_Controller {

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
		$this->load->model('payment_model');
		$this->load->model('member_model');
	}

	public function index()
	{
		$paid_members = array();
		$unpaid_members = array();
		$payment_array = array();

		$members = $this->member_model->get_active_members();
		$payment_types = $this->payment_model->getPaymentTypes();
		$payment_type_id = (isset($_GET['payment_type'])) ? $_GET['payment_type'] : 1;


		for($ctr=0; $ctr<count($members); $ctr++){
			$payment_status = $this->payment_model->get_payment_status($members[$ctr]['member_id'], $payment_type_id);

			if(count($payment_status) == 0){
				array_push($unpaid_members, $members[$ctr]);
			}else{
				$payment_desc = $this->payment_model->getPaymentType($payment_status[0]['payment_type_id']);
				array_push($paid_members, array_merge($members[$ctr], $payment_status[0], $payment_desc[0]));
			}
		}

		if(count($paid_members) != 0){
			$payment_array['paid_members'] = $paid_members;
		}
		if(count($unpaid_members) != 0){
			$payment_array['unpaid_members'] = $unpaid_members;
		}

		$payment_array['payment_types'] = $payment_types;

		//echo "<pre>"; var_dump($payment_array); exit;
		$this->load->view('financial', $payment_array);
	}

	public function memberPay()
	{
		$this->payment_model->memberPay($_POST['member_id'], $_POST['payment_type_id']);
	}

	public function deactivatePayment()
	{
		$this->payment_model->deactivatePayment();

		header("location: /index.php/financial");
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */

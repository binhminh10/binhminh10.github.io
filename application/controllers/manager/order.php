<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class order extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('order_model');
	}

	public function index()
	{
		$result = $this->order_model->getAllData();
		$data = array("mangketqua" => $result);
		$this->load->view('manager/order_view', $data);
		
	}
	public function order_delete($id){
		if ($this->order_model->deleteById($id)) {
			$result = $this->order_model->getAllData();
			$data = array("mangketqua" => $result);
			$this->load->view('manager/order_view', $data);
		}else{
			$this->load->view('errors/notify_error');
		}
	}
	public function getOrder($id){
		$ketqua = $this->order_model->getDataById($id);
		$ketqua = array('dulieukq' => $ketqua);
		$this->load->view('manager/order_update_view', $ketqua);
	}

	public function order_update()
	{
		
		$id = $this->input->post('order_id');
		$transaction_id = $this->input->post('transaction_id');
		$product_id = $this->input->post('product_id');
		$quantity = $this->input->post('quantity');
		$status = $this->input->post('status');
		
		if ($this->order_model->updateById($id,$transaction_id,$product_id,$quantity,$status)) {
			$result = $this->order_model->getAllData();
			$data = array("mangketqua" => $result);
			$this->load->view('manager/order_view', $data);
		}else{
			$this->load->view('errors/notify_error');
		}
	}

}

/* End of file order.php */
/* Location: ./application/controllers/order.php */
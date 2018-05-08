<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class order_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function getAllData(){
		$this->db->select('*');
		$this->db->order_by('order_id', 'asc');
		$data = $this->db->get('ordertable');
		$data = $data->result_array();

		return $data;
	}
	public function deleteById($id)
	{
		$this->db->where('order_id', $id);
		return $this->db->delete('ordertable');

	}
	public function getDataById($id){
		$this->db->select('*');
		$this->db->where('order_id', $id);
		$data = $this->db->get('ordertable');
		$data = $data->result_array();
		return $data;
	}

	public function updateById($id,$transaction_id,$product_id,$quantity,$status){
		$data = array(
			'transaction_id' => $transaction_id,
			'product_id' => $product_id,
			'quantity' => $quantity,
			'status' => $status 
		);
		$this->db->where('order_id', $id);
		return $this->db->update('ordertable', $data);
	}

}

/* End of file order_model.php */
/* Location: ./application/models/order_model.php */
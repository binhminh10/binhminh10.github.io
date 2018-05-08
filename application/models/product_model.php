<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class product_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function getAllData(){
		$this->db->select('*');
		$this->db->order_by('product_id', 'desc');
		$data = $this->db->get('product');
		$data = $data->result_array();

		return $data;
	}
	public function insertDataToMysql($product_name,$company,$category_id,$price,$discount,$image,$intro,$quantity)
	{
		$dulieu = array(
			'product_name' => $product_name,
			'company' => $company,
			'category_id' => $category_id,
			'price' => $price,
			'discount' => $discount,
			'image' => $image,
			'intro' => $intro,
			'quantity' => $quantity
		);
		$this->db->insert('product', $dulieu);
		return $this->db->insert_id();
	}
	public function removeById($id)
	{
		$this->db->where('product_id', $id);
		return $this->db->delete('product');

	}
	public function getDataById($key){
		$this->db->select('*');
		$this->db->where('product_id', $key);
		$data = $this->db->get('product');
		$data = $data->result_array();
		return $data;
	}

	public function updateById($id,$product_name,$company,$category_id,$price,$discount,$image,$intro,$quantity){
		$data = array(
			'product_name' => $product_name,
			'company' => $company,
			'category_id' => $category_id,
			'price' => $price,
			'discount' => $discount,
			'image' => $image,
			'intro' => $intro,
			'quantity' => $quantity
		);
		$this->db->where('product_id', $id);

		return $this->db->update('product', $data);
	}

	public function getData($length,$start) {
	    // $rowperpage length, $rowno start
	    $this->db->select('*');
	    //$this->db->order_by('product_id', 'desc');
	    $this->db->from('product');
	    $this->db->limit($length, $start);  
	    $query = $this->db->get();
	 	
	    return $query->result_array();
	}

	// Select total records
	public function getrecordCount() {

	    $this->db->select('count(*) as allcount');
	    $this->db->from('product');
	    $query = $this->db->get();
	    $result = $query->result_array();
	 
	    return $result[0]['allcount'];
	}
}

/* End of file product_model.php */
/* Location: ./application/models/product_model.php */
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class productcategory_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function insertDataToMysql($name,$parent_id)
	{
		$data = array(
			'category_name' => $name,
			'parent_id' => $parent_id
		);
		$this->db->insert('productcategory', $data);
		return $this->db->insert_id();
	}

	public function getAllData()
	{
		$this->db->select('*');
		$this->db->order_by('category_id', 'asc');
		$data = $this->db->get('productcategory');
		$data = $data->result_array();

		return $data;
	}

	public function getDataById($key){
		$this->db->select('*');
		$this->db->where('category_id', $key);
		$data = $this->db->get('productcategory');
		$data = $data->result_array();
		return $data;
		// echo '<pre>';
		// var_dump($dulieu);
	}

	public function updateById($id,$name,$parent_id){
		$data = array(
			'category_name' => $name,
			'parent_id' => $parent_id
		);
		$this->db->where('category_id', $id);
		return $this->db->update('productcategory', $data);
	}

	public function removeById($id)
	{
		$this->db->where('category_id', $id);
		return $this->db->delete('productcategory');

	}

}

/* End of file productcategory_model.php */
/* Location: ./application/models/productcategory_model.php */
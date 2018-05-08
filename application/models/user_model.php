<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class user_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function insertDataToMysql($username,$password,$email,$phone_number,$address)
	{
		$data = array(
			'user_name' => $username,
			'password' => $password,
			'email' => $email,
			'phone_number' => $phone_number,
			'address' => $address
		);
		$this->db->insert('user', $data);
		return $this->db->insert_id();
	}

	public function getAllData()
	{
		$this->db->select('*');
		$this->db->order_by('user_id', 'asc');
		$data = $this->db->get('user');
		$data = $data->result_array();

		return $data;
	}

	public function getDataById($key){
		$this->db->select('*');
		$this->db->where('user_id', $key);
		$data = $this->db->get('user');
		$data = $data->result_array();
		return $data;
	}

	public function updateById($user_id,$username,$password,$email,$phone_number,$address){
		$data = array(
			'user_name' => $username,
			'password' => $password,
			'email' => $email,
			'phone_number' => $phone_number,
			'address' => $address 
		);
		$this->db->where('user_id', $user_id);
		return $this->db->update('user', $data);
	}

	public function deleteById($id)
	{
		$this->db->where('user_id', $id);
		return $this->db->delete('user');

	}


}

/* End of file user_model.php */
/* Location: ./application/models/user_model.php */
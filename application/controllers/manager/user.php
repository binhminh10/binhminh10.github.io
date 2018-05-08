<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class user extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}

	public function index()
	{
		$result = $this->user_model->getAllData();
		$data = array("mangketqua" => $result);
		$this->load->view('manager/user_view', $data);
		
	}
	public function user_add()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$email = $this->input->post('email');
		$phone_number = $this->input->post('phone_number');
		$address = $this->input->post('address');
		$flag = $this->user_model->insertDataToMysql($username,$password,$email,$phone_number,$address);

		if($flag){
			$result = $this->user_model->getAllData();
			$data = array("mangketqua" => $result);
			$this->load->view('manager/user_view', $data);
		}else{
			$this->load->view('errors/notify_error');
		}
	}
	public function user_delete($id)
	{
		if ($this->user_model->deleteById($id)) {
			$result = $this->user_model->getAllData();
			$data = array("mangketqua" => $result);
			$this->load->view('manager/user_view', $data);
		}else{
			$this->load->view('errors/notify_error');
		}
	}
	public function getUser($id){
		$ketqua = $this->user_model->getDataById($id);
		$ketqua = array('dulieukq' => $ketqua);
		$this->load->view('manager/user_update_view', $ketqua);
	}

	public function user_update()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$email = $this->input->post('email');
		$phone_number = $this->input->post('phone_number');
		$address = $this->input->post('address');
		$id = $this->input->post('user_id');
		
		if ($this->user_model->updateById($id,$username,$password,$email,$phone_number,$address)) {
			$result = $this->user_model->getAllData();
			$data = array("mangketqua" => $result);
			$this->load->view('manager/user_view', $data);
		}else{
			$this->load->view('errors/notify_error');
		}
	}
	

}

/* End of file user.php */
/* Location: ./application/controllers/user.php */
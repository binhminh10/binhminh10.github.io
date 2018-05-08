<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class productcategory extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('productcategory_model');
	}

	public function index()
	{
		
		$ketqua = $this->productcategory_model->getAllData();
		$ketqua = array('mangketqua' => $ketqua);

		$this->load->view('manager/productcategory_view', $ketqua);
	}
	public function category_add()
	{

		$ten = $this->input->post('ten');
		$parent_id = $this->input->post('parent_id');

		$this->load->model('productcategory_model');
		$trangthai = $this->productcategory_model->insertDataToMysql($ten,$parent_id);
		if ($trangthai) {
			$ketqua = $this->productcategory_model->getAllData();
			$ketqua = array('mangketqua' => $ketqua);

			$this->load->view('manager/productcategory_view', $ketqua);
		}else{
			$this->load->view('errors/notify_error');
		}
	}
	public function category_delete($id)
	{
		$this->load->model('productcategory_model');
		if($this->productcategory_model->removeById($id)){
			$ketqua = $this->productcategory_model->getAllData();
			$ketqua = array('mangketqua' => $ketqua);

			$this->load->view('manager/productcategory_view', $ketqua);
		}else{
			$this->load->view('errors/notify_error');
		}
	}

	public function getCategoty($id)
	{
		$this->load->model('productcategory_model');
		$ketqua = $this->productcategory_model->getDataById($id);
		$ketqua = array('dulieukq' => $ketqua);
		$this->load->view('manager/category_update_view', $ketqua);
	}
	public function category_update()
	{
		$id = $this->input->post('id');
		$ten = $this->input->post('ten');
		$parent_id = $this->input->post('parent_id');

		$this->load->model('productcategory_model');
		if ($this->productcategory_model->updateByID($id,$ten,$parent_id)) {
		 	$ketqua = $this->productcategory_model->getAllData();
			$ketqua = array('mangketqua' => $ketqua);

			$this->load->view('manager/productcategory_view', $ketqua);
		}else{
			$this->load->view('errors/notify_error');
		}
	}

}

/* End of file Productcategory.php */
/* Location: ./application/controllers/Productcategory.php */
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class product extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		// Load Pagination library
    	$this->load->library('pagination');
		
		$this->load->model('product_model');
	}


	public function index()
	{
		$this->load->model('productcategory_model');
		$categories = $this->productcategory_model->getAllData();
		$categories = array('categorys' => $categories);
		$this->load->view('manager/product_view',$categories);
	}
	//==================================================================================
	//
	public function loadRecord($rowno=0){

	    // Row per page
	    $rowperpage = 6;

	    // Row position
	    if($rowno != 0){
	   		$rowno = ($rowno-1) * $rowperpage;
	    }
	 
	    // All records count
	    $allcount = $this->product_model->getrecordCount();

	    // Get records
	    $product = $this->product_model->getData($rowperpage,$rowno);
	 	
	 	// Get all category
	    $this->load->model('productcategory_model');
		$category = $this->productcategory_model->getAllData();

	    // Pagination Configuration
	    $config['use_page_numbers'] = TRUE;
	    $config['total_rows'] = $allcount;
	    $config['per_page'] = $rowperpage;

	    // Initialize
	    $this->pagination->initialize($config);

	    // Initialize $data Array
	    $data['pagination'] = $this->pagination->create_links();
	    $data['result'] = $product;
	    $data['categories'] = $category;
	    $data['row'] = $rowno;

	    echo json_encode($data);
	 
	}


	//---------------------------------------------------------------------------------
	public function product_add()
	{

		if ($_FILES['image']["name"]) {
		
			$target_dir="Fileupload/product/";
			$target_file = $target_dir . basename($_FILES["image"]["name"]);
			$uploadOk=1;

			$imageFileType=pathinfo($target_file,PATHINFO_EXTENSION);

			if (isset($_POST['submit'])) {
				$check = getimagesize($_FILES["image"]["tmp_name"]);
				if ($check!=false) {
					echo "File is an image - " . $check["mime"] . ".";
					$uploadOk=1;
				}else{
					echo "File is not image";
					$uploadOk=0;
				}
			}
			if ($_FILES["image"]["size"] > 50000000) {
				echo 'Sorry your file is too large';
				$uploadOk=0;
			}
			if ($imageFileType!="jpg" && $imageFileType !="png" && $imageFileType!="jpeg" && $imageFileType!="gif") {
				echo "<h2>Chỉ chấp nhận file ảnh</h2><br/>";
				$uploadOk=0;
			}
			if ($uploadOk==0) {
				echo 'ERROR: file chưa upload thành công';
			}else{
				if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
					
				} else {
					echo 'Sorry, there was an error uploading your file';
				}
			}
			$image = "Fileupload/product/".basename($_FILES["image"]["name"]);
		}else{

			$image = "Fileupload/product/noavatar.png";
		}
		// Lay view 
		$product_name = $this->input->post('product_name');
		$company = $this->input->post('company');
		$category_id = $this->input->post('category_id');
		$price = $this->input->post('price');
		$discount = $this->input->post('discount');
		$intro = $this->input->post('intro');
		$quantity = $this->input->post('quantity');


		
		$flag = $this->product_model->insertDataToMysql($product_name,$company,$category_id,$price,$discount,$image,$intro,$quantity);
		if ($flag) {
			
			$this->load->model('productcategory_model');
			
			$categories = $this->productcategory_model->getAllData();
			
			$categories = array('categorys' => $categories);
			
			$this->load->view('manager/product_view',$categories);
		}else{
			$this->load->view('errors/notify_error');
		}
	}

	public function product_delete($id){
		
		if($this->product_model->removeById($id)){
			
			$this->load->model('productcategory_model');
			
			$categories = $this->productcategory_model->getAllData();
			
			$categories = array('categorys' => $categories);
			
			$this->load->view('manager/product_view',$categories);
		}else{
			$this->load->view('errors/notify_error');
		}
	}
	
	public function getProduct($id){

		
		$ketqua = $this->product_model->getDataById($id);

		$this->load->model('productcategory_model');
		$category = $this->productcategory_model->getAllData();

		$ketqua = array('product' => $ketqua, 'categorys'=>$category);
		$this->load->view('manager/product_update_view', $ketqua);
	}

	public function product_update(){
		$product_id = $this->input->post('product_id');
		$product_name = $this->input->post('product_name');
		$company = $this->input->post('company');
		$category_id = $this->input->post('category_id');
		$price = $this->input->post('price');
		$discount = $this->input->post('discount');
		$intro = $this->input->post('intro');
		$quantity = $this->input->post('quantity');
		

		if ($_FILES['image']["name"]) {
		
			$target_dir="Fileupload/product/";
			$target_file = $target_dir . basename($_FILES["image"]["name"]);
			$uploadOk=1;

			$imageFileType=pathinfo($target_file,PATHINFO_EXTENSION);

			if (isset($_POST['submit'])) {
				$check = getimagesize($_FILES["image"]["tmp_name"]);
				if ($check!=false) {
					echo "File is an image - " . $check["mime"] . ".";
					$uploadOk=1;
				}else{
					echo "File is not image";
					$uploadOk=0;
				}
			}
			if ($_FILES["image"]["size"] > 50000000) {
				echo 'Sorry your file is too large';
				$uploadOk=0;
			}
			if ($imageFileType!="jpg" && $imageFileType !="png" && $imageFileType!="jpeg" && $imageFileType!="gif") {
				echo "<h2>Chỉ chấp nhận file ảnh</h2><br/>";
				$uploadOk=0;
			}
			if ($uploadOk==0) {
				echo 'ERROR: file chưa upload thành công';
			}else{
				if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
					
				} else {
					echo 'Sorry, there was an error uploading your file';
				}
			}
			$image = "Fileupload/product/".basename($_FILES["image"]["name"]);
		}else{

			$image = "Fileupload/product/noproduct.png";
		}

		

		if ($this->product_model->updateById($product_id,$product_name,$company,$category_id,$price,$discount,$image,$intro,$quantity)) {


		 	$this->load->model('productcategory_model');
			
			$categories = $this->productcategory_model->getAllData();
			
			$categories = array('categorys' => $categories);
			
			$this->load->view('manager/product_view',$categories);
		}else{
			$this->load->view('errors/notify_error');
		}
	}

}

/* End of file product.php */
/* Location: ./application/controllers/product.php */
<!DOCTYPE html>
<html lang="en"><head>
	<title> Hiển thị danh sách các sản phẩm </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
	<style type="text/css">
	    a {
	      padding-left: 15px;
	      padding-right: 15px;
	      margin-left: 15px;
	      margin-right: 15px;
	    }
    </style>
</head>
<body >

	<?php require_once('header.php') ?>
 	<div id="wrapper">
 		<?php require_once('sidebar.php') ?>
 		<div id="page-content-wrapper">
			<div class="container">
 				<h3 class="jumbotron">Danh sách các sản phẩm</h3>
 			</div>
	 		<div class="container-fluid">
	 			<div class="justify-content-center">
					<h2>Form below allow add product</h2><hr>
					<form method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>index.php/manager/product/product_add">
						<div class="form-group row">
							<div class="col-sm-6">
								<label for="name"><strong>Tên sản phẩm</strong></label>
								<input type="text" name="product_name" class="form-control" id="product_name" placeholder="vd: Bếp từ">
								
							</div>
							<div class="col-sm-6">
								<label for="company"><strong>Hãng sản xuất</strong></label>
								<input type="text" name="company" class="form-control" id="company" placeholder="vd: Sun House">
							</div>
						</div>
						<div class="form-group row">
							<div class="col-sm-6">
								<label for="price"><strong>Price</strong></label>
								<input type="text" name="price" class="form-control" id="price" placeholder="vd: 12.000">
							</div>
							<div class="col-sm-6">
								<label for="discount"><strong>Discount</strong></label>
								<input type="text" name="discount" class="form-control" id="discount" placeholder="vd: 5%">
							</div>
						</div>
						<div class="form-group row">
							<div class="col-sm-6">
								<label for="intro"><strong>Giới thiệu</strong></label>
								<input type="text" name="intro" class="form-control" id="intro" placeholder="vd: mặt hàng bán chạy nhất cho sinh viên">
							</div>
							<div class="col-sm-6">
								<label for="quantity"><strong>Số lượng sản phẩm</strong></label>
								<input type="number" name="quantity" class="form-control" id="quantity" placeholder="vd: 50">
							</div>
						</div>
						<div class="form-group row">
							<div class="col-sm-6">
								<label for="image"><strong>Ảnh sản phẩm</strong></label>
								<input type="file" name="image" class="form-control" id="image" placeholder="Upload ảnh">
							</div>
							<div class="col-sm-6">
								<div class="form-group">
								<label for="category_id"><strong>Danh mục sản phẩm</strong></label>
								<select  class="form-control" name="category_id" id="category_id" >
									<?php foreach ($categorys as $value): ?>
										<option value="<?= $value['category_id'] ?>"> <?= $value['category_name'] ?></option>
									<?php endforeach ?>
									
								</select>
							</div>
							</div>
							
						</div>
						

						<div class="row justify-content-center">
							<button type="submit" class="btn btn-success">Thêm mới</button>
							&nbsp; &nbsp;
							<button class="btn btn-danger" type="reset">Nhập lại</button>
						</div>
						
					</form>
				</div><br/>


	 			
 				<div class="row" id='postsList'>
	 				
	 			</div>	
	 			<center>
	 				<div style='margin-top: 10px;' id='pagination'></div>
	 			</center>
				
	 		</div><!-- end full container-->
 		</div>
 	</div>
 	
   
    <script type='text/javascript'>
	    $(document).ready(function(){

	    	// Detect pagination click
	    	$('#pagination').on('click','a',function(e){
	       		e.preventDefault(); 
	       		var pageno = $(this).attr('data-ci-pagination-page');
	       		loadPagination(pageno);
	    	});

		    loadPagination(0);

	    	// Load pagination
	     	function loadPagination(pagno){
	       		$.ajax({
	         		url: '<?=base_url()?>index.php/manager/product/loadRecord/'+pagno,
	         		type: 'get',
	         		dataType: 'json',
	         		success: function(response){
		            	$('#pagination').html(response.pagination);
		            	createTable(response.result,response.row);
	         		}
	        	});
	    	}

		    	// Create table list
		    function createTable(result,sno){
		       	sno = Number(sno);
		       	$('#postsList').empty();
		       	
		       	for(index in result){
		          	var product_id = result[index].product_id;
		          	var product_name = result[index].product_name;
		          	var category_id = result[index].category_id;
		          	var company =result[index].company;
		          	var price =result[index].price;
		          	var discount =result[index].discount;
		          	var quantity=result[index].quantity;
		          	var intro=result[index].intro;

		          	var image = result[index].image;
		          	// content = content.substr(0, 60) + " ...";
		          	sno+=1;

		          	var tr = '<div class="col-sm-4">';
		          	tr += '<div class="card card-block">';
		          	tr += '<img  style="height: 350px" class="card-img-top img-fluid img-thumbnail" src="<?php echo base_url(); ?>'+image+'" alt="Card images" >';
		          	tr += '<h4 class="card-title"><b>'+product_name+'</b></h4>';
		          	tr += '<p class="card-text category_id">Id category: <b>'+category_id+'</b></p>';
		          	tr += '<p class="card-text company">Hãng sản xuất: <b>'+company+'</b></p>';
		          	tr += '<p class="card-text price">Giá: <b>'+ price+'</b></p>';
		          	
		          	tr += '<p class="card-text discount">Khuyến mại: <b>'+discount+'</b></p>';
		          	tr += '<p class="card-text quantity">Số Lượng: <b>'+quantity+'</b></p>';
		          	tr += '<p class="card-text intro">Giới thiệu: <b>'+intro+'</b></p><br/>';
		          	tr += '<p class="card-text editns"><small><a href="<?= base_url(); ?>/index.php/manager/product/getProduct/'+product_id+'" class="btn btn-warning btn-xs">Sửa sản phẩm</a></small></p>';
		          	tr += '<p class="card-text delns"><small><a href="<?= base_url(); ?>/index.php/manager/product/product_delete/'+product_id+'" class="btn btn-outline-danger btn-xs">Xóa sản phẩm</a></small></p>';
		          	tr += '</div></div></br>';
		          	
		          	  	
		          	$('#postsList').append(tr);
		 			
		        }
		        
		    }
	    });
    </script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product update</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
<body>


	<?php require_once('header.php') ?>
 	<div id="wrapper">
 		<?php require_once('sidebar.php') ?>
 		<div id="page-content-wrapper">
			<div class="container">
 				<h3 class="jumbotron">Sửa sản phẩm</h3>
 			</div>
	 		<div class="container-fluid">
	 			<div class="justify-content-center">
					<form method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>index.php/manager/product/product_update">
						<?php foreach ($product as $value): ?>

							<input type="hidden" name="product_id" value="<?= $value['product_id'] ?>">
							<div class="form-group row">
								<div class="col-sm-6">
									<label for="name"><strong>Tên sản phẩm</strong></label>
									<input type="text" name="product_name" class="form-control" id="product_name" placeholder="vd: Bếp từ" value="<?= $value['product_name'] ?>">
									
								</div>
								<div class="col-sm-6">
									<label for="company"><strong>Hãng sản xuất</strong></label>
									<input type="text" name="company" class="form-control" id="company" placeholder="vd: Sun House" value="<?= $value['company'] ?>">
								</div>
							</div>
							<div class="form-group row">
								<div class="col-sm-6">
									<label for="price"><strong>Price</strong></label>
									<input type="text" name="price" class="form-control" id="price" placeholder="vd: 12.000" value="<?= $value['price'] ?>">
								</div>
								<div class="col-sm-6">
									<label for="discount"><strong>Discount</strong></label>
									<input type="text" name="discount" class="form-control" id="discount" placeholder="vd: 5%" value="<?= $value['discount'] ?>">
								</div>
							</div>
							<div class="form-group row">
								<div class="col-sm-6">
									<label for="intro"><strong>Giới thiệu</strong></label>
									<input type="text" name="intro" class="form-control" id="intro" placeholder="vd: mặt hàng bán chạy nhất cho sinh viên" value="<?= $value['intro'] ?>">
								</div>
								<div class="col-sm-6">
									<label for="quantity"><strong>Số lượng sản phẩm</strong></label>
									<input type="number" name="quantity" class="form-control" id="quantity" placeholder="vd: 50" value="<?= $value['quantity'] ?>">
								</div>
							</div>
							<div class="form-group row">
								<div class="col-sm-6">
									<label for="image"><strong>Ảnh sản phẩm</strong></label>
									<input type="file" name="image" class="form-control" id="image" placeholder="Upload ảnh" value="<?= $value['image'] ?>">
								</div>
								<div class="col-sm-6">
									<div class="form-group">
									<label for="category_id"><strong>Danh mục sản phẩm</strong></label>
									<select  class="form-control" name="category_id" id="category_id" >
										<?php foreach ($categorys as $category): 
											if($value['category_id']==$category['category_id']){
										?>
											<option  selected="selected" value="<?= $category['category_id'] ?>"> <?= $category['category_name'] ?></option>
										<?php	}else{ ?>
											<option  value="<?= $category['category_id'] ?>"> <?= $category['category_name'] ?></option>
										<?php 
											}
										endforeach 
										?>
										
									</select>
								</div>
								</div>
								
							</div>
						<?php endforeach ?>
						
						
						

						<div class="row justify-content-center">
							<button type="submit" class="btn btn-success">Lưu lại</button>
							&nbsp; &nbsp;
							<button class="btn btn-danger" type="reset">Nhập lại</button>
						</div>
						
					</form>
				</div><br/>


	 			

	 		</div><!-- end full container-->
 		</div>
 	</div>





	
</body>
</html>
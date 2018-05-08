<!DOCTYPE html>
<html lang="en"><head>
	<title> Hiển thị danh sách các danh mục sản phẩm </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
<body >

	<?php require_once('header.php') ?>
 	<div id="wrapper">
 		<?php require_once('sidebar.php') ?>
 		<div id="page-content-wrapper">
			<div class="container">
 				<h3 class="jumbotron">Danh sách các danh mục sản phẩm</h3>
 			</div>
	 		<div class="container-fluid">
	 			<div class="row">
	 				<div class="card-deck">
					<?php foreach ($mangketqua as $value): ?>
						<div class="col-sm-4">
							<div class="card">
								<div class="card-body">
			 						<h4 class="card-title"><?= $value['category_name'] ?></h4>
			 						<p class="card-text parent_id">Id: <b><?= $value['category_id'] ?></b></p>
			 						<p class="card-text parent_id">Parent id: <b><?= $value['parent_id'] ?></b></p>
			 					
									<p class="card-text editns"><small><a href="<?= base_url(); ?>/index.php/manager/productcategory/getCategoty/<?= $value['category_id'] ?>" class="btn btn-warning btn-xs">Sửa nội dung</a></small></p>

									<p class="card-text editns"><small><a href="<?= base_url(); ?>/index.php/manager/productcategory/category_delete/<?= $value['category_id'] ?>" class="btn btn-outline-danger btn-xs">Xóa nội dung</a></small></p>
		 						</div>
							</div><br/>
							<!-- end card-->
						</div>
					<?php endforeach ?>
	 				</div>
				
				</div>
				<div class="justify-content-center">
					<h2>Form below allow add categogy</h2><hr>
					<form method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>index.php/manager/productcategory/category_add">
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<label for="ten"><strong>Tên danh mục</strong></label>
									<input type="text" name="ten" class="form-control" id="ten" placeholder="vd: Bếp">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label for="parent_id"><strong>Parent id</strong></label>
									<input type="text" name="parent_id" class="form-control" id="parent_id" placeholder="vd: 12">
								</div>
							</div>
						</div>
						
						<div class="row justify-content-center">
							<button type="submit" class="btn btn-success">Thêm mới</button>
							&nbsp; &nbsp; &nbsp;
							<button class="btn btn-danger" type="reset">Nhập lại</button>
						</div>
						
					</form>
				</div>
	 		</div>
 		</div>
 	</div>
 	
</body>
</html>
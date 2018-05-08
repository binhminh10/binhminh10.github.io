<!DOCTYPE html>
<html lang="en"><head>
	<title> Hiển thị danh sách các đơn hàng </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>


	<link href="<?php echo base_url(); ?>vendor/css/toggle.css" rel="stylesheet">
</head>
<body >

	<?php require_once('header.php') ?>
 	<div id="wrapper">
 		<?php require_once('sidebar.php') ?>
 		<div id="page-content-wrapper">
			
			<div class="container">
 				<h3 class="jumbotron">Danh sách các đơn hàng</h3>
 			</div>

	 		<div class="container-fluid">
	 			<div class="row card-deck">
	 				
						<?php foreach ($mangketqua as $value): ?>
							<div class="col-md-4">
								<div class="card">
									<div class="card-body">
				 						<p class="card-text transaction">Mã Giao dịch: <b><?= $value['transaction_id'] ?></b></p>
										<label class="switch">
						                    <input type="checkbox"  <?php if ($value['status'] == 0) echo 'checked="cheked"' ?> >
						                    <span class="slider round"></span>

						                </label>
										
				 						<p class="card-text product">Mã sản phẩm: <b><?= $value['product_id'] ?></b></p>
				 						
				 						<p class="card-text quantity">Số lượng: <b><?= $value['quantity'] ?></b></p>
				 						
				 						

										<p class="card-text editns"><small><a href="<?= base_url(); ?>/index.php/manager/order/getOrder/<?= $value['order_id'] ?>" class="btn btn-warning btn-xs">Sửa nội dung</a></small></p>

										<p class="card-text dele"><small><a href="<?= base_url(); ?>/index.php/manager/order/order_delete/<?= $value['order_id'] ?>" class="btn btn-outline-danger btn-xs">Xóa nội dung</a></small></p>
			 						</div>
								</div><br/>
								<!-- end card-->
							</div>
						<?php endforeach ?>
		 			
				
				</div>
				
	 		</div>
 		</div>
 	</div>
 	
</body>
</html>
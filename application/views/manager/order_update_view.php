<!DOCTYPE html>
<html lang="en"><head>
	<title> Chi tiết đơn hàng </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">  

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
<body >
 	

 	<div class="container">
 		
		<div>
		<form method="post" action="<?= base_url(); ?>/index.php/manager/order/order_update">

			<?php foreach ($dulieukq as $value): ?>
				<div class="form-group row">

					<div class="col-sm-6">
						<div class="row">
							<label for="transaction_id" class="col-sm-4 form-control-label text-xs-right">Mã giao dịch</label>
							<div class="col-sm-8">
								
								<input type="text" name="transaction_id" class="form-control" id="transaction_id" value="<?= $value['transaction_id'] ?>">
							</div>
						</div>
					</div>
					
					<div class="col-sm-6">
						<div class="row">
							<label for="product_id" class="col-sm4 form-control-label text-xs-right">Mã sản phẩm</label>
							<div class="col-sm-8">
								<input type="text" name="product_id" class="form-control" id="product_id" placeholder="vd: 4" value="<?= $value['product_id'] ?>">
							</div>
						
						</div>
					</div>
					<div class="col-sm-6">
						<div class="row">
							<label for="quantity" class="col-sm4 form-control-label text-xs-right">Số lượng mua</label>
							<div class="col-sm-8">
								<input type="text" name="quantity" class="form-control" id="quantity" placeholder="vd: 4" value="<?= $value['quantity'] ?>">
							</div>
						
						</div>
					</div>
					<div class="col-sm-6">
						<div class="row">
							<label for="status" class="col-sm4 form-control-label text-xs-right"> status</label>
							<div class="col-sm-8">
								<input type="text" name="status" class="form-control" id="status" placeholder="vd: 012939393" value="<?= $value['status'] ?>">
							</div>
						
						</div>
					</div>
					
					<div class="col-sm-6">
						<input type="hidden" name="order_id" id="order_id" value="<?= $value['order_id'] ?>">				
					</div>
				</div>
				
			<?php endforeach ?>
			<div class="form-group row text-xs-center">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-outline-success">Lưu lại</button>
					<a href="<?php echo base_url(); ?>/index.php/manager/order" class="btn btn-primary">Trở về</a></button>
				</div>
			</div>
		</form>
		</div>
 	</div>
</body>
</html>
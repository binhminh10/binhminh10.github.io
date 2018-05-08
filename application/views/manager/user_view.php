<!DOCTYPE html>
<html lang="en"><head>
	<title> Hiển thị danh sách các khách hàng </title>
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
			<div class="justify-content-center">
				<h2>Form below allow add user</h2><hr>
				<form method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>index.php/manager/user/user_add">
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<label for="username"><strong>Username</strong></label>
								<input type="text" name="username" class="form-control" id="ten" placeholder="vd: Minh12ks">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label for="password"><strong>Password</strong></label>
								<input type="text" name="password" class="form-control" id="password" placeholder="vd: $%^&@#">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<label for="email"><strong>Email</strong></label>
								<input type="text" name="email" class="form-control" id="email" placeholder="vd: example@gmail.com">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label for="phone_number"><strong>Phonenumber</strong></label>
								<input type="text" name="phone_number" class="form-control" id="phone_number" placeholder="vd: 012012012">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<label for="address"><strong>Address</strong></label>
								<input type="text" name="address" class="form-control" id="address" placeholder="vd: Bách khoa, Hà Nội">
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


			<hr/>
			<div class="container">
 				<h3 class="jumbotron">Danh sách các khách hàng</h3>
 			</div>

	 		<div class="container-fluid">
	 			<div class="row card-deck">
	 				
						<?php foreach ($mangketqua as $value): ?>
							<div class="col-md-4">
								<div class="card">
									<div class="card-body">
				 						<h4 class="card-title"><?= $value['user_name'] ?></h4>
				 						<p class="card-text email">Email: <b><?= $value['email'] ?></b></p>
				 						<p class="card-text address">Address: <b><?= $value['address'] ?></b></p>
				 						<p class="card-text phone_number">Phone number: <b><?= $value['phone_number'] ?></b></p>
				 					
										<p class="card-text editns"><small><a href="<?= base_url(); ?>/index.php/manager/user/getUser/<?= $value['user_id'] ?>" class="btn btn-warning btn-xs">Sửa nội dung</a></small></p>

										<p class="card-text dele"><small><a href="<?= base_url(); ?>/index.php/manager/user/user_delete/<?= $value['user_id'] ?>" class="btn btn-outline-danger btn-xs">Xóa nội dung</a></small></p>
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
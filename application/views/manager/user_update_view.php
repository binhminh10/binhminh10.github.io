<!DOCTYPE html>
<html lang="en"><head>
	<title> Chi tiết User </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">  
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
<body >
 	<div class="container">
 		<div class="text-xs-center">
 			<h3 class="display-3"> danh mục	</h3>
 		</div>
 	</div>

 	<div class="container">
 		
		<div>
		<form method="post" action="<?= base_url(); ?>/index.php/manager/user/user_update">

			<?php foreach ($dulieukq as $value): ?>
				<div class="form-group row">

					<div class="col-sm-6">
						<div class="row">
							<label for="username" class="col-sm-4 form-control-label text-xs-right">Username</label>
							<div class="col-sm-8">
								
								<input type="text" name="username" class="form-control" id="username" value="<?= $value['user_name'] ?>">
							</div>
						</div>
					</div>
					
					<div class="col-sm-6">
						<div class="row">
							<label for="password" class="col-sm4 form-control-label text-xs-right">Password</label>
							<div class="col-sm-8">
								<input type="text" name="password" class="form-control" id="password" placeholder="vd: 234#@3" value="<?= $value['password'] ?>">
							</div>
						
						</div>
					</div>
					<div class="col-sm-6">
						<div class="row">
							<label for="email" class="col-sm4 form-control-label text-xs-right">Email</label>
							<div class="col-sm-8">
								<input type="text" name="email" class="form-control" id="email" placeholder="vd: example@gmail.com" value="<?= $value['email'] ?>">
							</div>
						
						</div>
					</div>
					<div class="col-sm-6">
						<div class="row">
							<label for="phone_number" class="col-sm4 form-control-label text-xs-right">Phone Number</label>
							<div class="col-sm-8">
								<input type="text" name="phone_number" class="form-control" id="phone_number" placeholder="vd: 012939393" value="<?= $value['phone_number'] ?>">
							</div>
						
						</div>
					</div>
					<div class="col-sm-6">
						<div class="row">
							<label for="address" class="col-sm4 form-control-label text-xs-right">Address</label>
							<div class="col-sm-8">
								<input type="text" name="address" class="form-control" id="address" placeholder="vd: HN" value="<?= $value['address'] ?>">
							</div>
						
						</div>
					</div>
					<div class="col-sm-6">
						<input type="hidden" name="user_id" id="user_id" value="<?= $value['user_id'] ?>">				
					</div>
				</div>
				
			<?php endforeach ?>
			<div class="form-group row text-xs-center">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-outline-success">Lưu lại</button>
					<a href="<?php echo base_url(); ?>/index.php/manager/user" class="btn btn-primary">Trở về</a></button>
				</div>
			</div>
		</form>
		</div>
 	</div>
</body>
</html>
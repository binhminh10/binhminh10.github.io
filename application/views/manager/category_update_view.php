<!DOCTYPE html>
<html lang="en"><head>
	<title> Hiển thị danh mục </title>
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
 			<h3 class="display-3">Sửa danh mục	</h3>
 		</div>
 	</div>

 	<div class="container">
 		
		<div>
		<form method="post" action="<?= base_url(); ?>/index.php/manager/productcategory/category_update">

			<?php foreach ($dulieukq as $value): ?>
				<div class="form-group row">

					<div class="col-sm-6">
						<div class="row">
							<label for="ten" class="col-sm-4 form-control-label text-xs-right">Tên danh mục</label>
							<div class="col-sm-8">
								<input type="hidden" name="id" value="<?= $value['category_id'] ?>">
								<input type="text" name="ten" class="form-control" id="ten" placeholder="ten" value="<?= $value['category_name'] ?>">
							</div>
						</div>
					</div>
					
					<div class="col-sm-6">
						<div class="row">
							<label for="parent_id" class="col-sm4 form-control-label text-xs-right">Parent id</label>
							<div class="col-sm-8">
								<input type="text" name="parent_id" class="form-control" id="parent_id" placeholder="vd: 12" value="<?= $value['parent_id'] ?>">
							</div>
						
						</div>
					</div>
				</div>
				
			<?php endforeach ?>
			<div class="form-group row text-xs-center">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-outline-success">Lưu lại</button>
					<a href="<?php echo base_url(); ?>/index.php/manager/productcategory" class="btn btn-primary">Trở về</a></button>
				</div>
			</div>
		</form>
		</div>
 	</div>
</body>
</html>
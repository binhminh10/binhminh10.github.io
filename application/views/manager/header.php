<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>

<div class="container-fluid">
	<div class="fixed-top">
		<div class='alert-primary' style="text-align: right; font-size: 20px">BIG WEB SALE HOUSEWARE - GROUP 12</div>
		<nav class="navbar navbar-expand-md bg-info navbar-dark">
			<a href="#" class="navbar-brand">
				<img src="<?php echo base_url(); ?>images/please.jpg" alt="Logo" style="width: 40px">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapse">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="collapse">
				<ul class="navbar-nav">
					<li class="nav-item"><a href="<?php echo base_url() ?>index.php/manager/home" class="nav-link text-white btn-outline-danger" >Trang chủ</a></li>
					<li class="nav-item"><a href="#menu-toggle" class="nav-link text-white btn-outline-danger" id="menu-toggle">Menu</a></li>
					<li class="nav-item"><a href="#" class="nav-link text-white btn-outline-danger" >Tin tức</a></li>
					<li class="nav-item dropdown">
						<a href="#" class="nav-link dropdown-toggle text-white btn-outline-danger" data-toggle="dropdown">Dropdown link</a>
						<div class="dropdown-menu">
							<a href="#" class="dropdown-item">Link 1</a>
							<a href="#" class="dropdown-item">Link 2</a>
							<a href="#" class="dropdown-item">Link 3</a>
						</div>
					</li>
				</ul>
			</div>
			<form class="form-inline" action="#">
				<input type="text" class="form-control" placeholder="Search...">
				<a href="#" class="btn btn-light text-lg-center text-primary border-dark" > Tìm kiếm</a>
			</form>
		</nav>
	</div>
	
	<br/><br/><br/><br/><br/>
</div>

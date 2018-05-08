<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

	<!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>vendor/css/simple-sidebar.css" rel="stylesheet">
</head>
<body>
	<!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">
                <a href="#">
                    Start Ecommerce
                </a>
            </li>
            <li>
                <a href="">Quản lý Admin</a>
            </li>
            <li>
                <a href="<?php echo base_url(); ?>index.php/manager/productcategory">Quản lý danh mục SP</a>
            </li>
            <li>
                <a href="<?php echo base_url(); ?>index.php/manager/product">Quản lý sản phẩm</a>
            </li>
            <li>
                <a href="<?php echo base_url(); ?>index.php/manager/user">Quản lý user</a>
            </li>
            <li>
                <a href="<?php echo base_url(); ?>index.php/manager/order">Quản lý đơn hàng</a>
            </li>
            
            <li>
                <a href="#">Contact</a>
            </li>
        </ul>
    </div>
    <!-- /#sidebar-wrapper -->
    <!-- Bootstrap core JavaScript -->


    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
</body>
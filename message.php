<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" href="">
</head>
<body>
	<br><br>
	<div class="container">
	<?php
	if (isset($_SESSION['message']))
	{
	?>
		
		<div class="alert alert-success alert-dismissible fade show" role="alert">
  			<strong>  Hey! </strong> <?php echo $_SESSION['message']; ?>
  			<!-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> -->
		</div> 
	<?php
		unset($_SESSION['message']);
	}
	?>
    </div>

    <div class="container">
	<?php
	if (isset($_SESSION['err_message']))
	{
	?>
		
		<div class="alert alert-danger alert-dismissible fade show" role="alert">
  			<strong>  Hey! </strong> <?php echo $_SESSION['err_message']; ?>
  			<!-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> -->
		</div> 
	<?php
		unset($_SESSION['err_message']);
	}
	?>
    </div>
</body>
</html>





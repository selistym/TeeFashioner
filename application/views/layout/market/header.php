<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="<?php echo $base_url; ?>/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo $base_url; ?>/bootstrap/css/bootstrap-theme.min.css" >
<script src="<?php echo $base_url; ?>/js/jquery.min.js"></script> 	
<script src="<?php echo $base_url; ?>/bootstrap/js/bootstrap.min.js"></script> 	 
<script src="<?php echo $base_url; ?>/js/angular.min.js"></script>
<link rel="stylesheet" href="<?php echo $base_url; ?>/css/css.css"> 
	
 	<title><?php echo $title; ?></title>
</head>
<body>


<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?php echo $base_url;?>">TEE?</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		



<?php if(!isset($_SESSION['user_id'])){ ?>
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			
			<ul class="nav navbar-nav navbar-right">
				<li><a href="campaigns">Make a Product</a></li>
				<li><a href="login">Login</a></li>
				<li><a href="#">Cart</a></li>
				
			</ul>
		</div><!-- /.navbar-collapse -->
<?php } ?>




<?php if(isset($_SESSION['user_id'])){ ?>
<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav">
				
			</ul>
			
			<ul class="nav navbar-nav navbar-right">
				
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					<?php if(isset($_SESSION['email'])){echo $_SESSION['email'];} ?> 
					<b class="caret"></b></a>
					<ul class="dropdown-menu">

					<li><a href="<?php echo $base_url;?>/user/campaigns">Campaigns</a></li>
					<li><a href="<?php echo $base_url;?>/user/stores">Stores</a></li>
					<li><a href="<?php echo $base_url;?>/user/orders">Orders</a></li>
					<li><a href="<?php echo $base_url;?>/user/message">Message</a></li>
					<li><a href="<?php echo $base_url;?>/user/promotion">Promotion</a></li>
					<li><a href="<?php echo $base_url;?>/user/setting">Setting</a></li>

				    <li><a href="<?php echo $base_url;?>/user/logout">Logout</a></li>
						
					</ul>
				</li>
			</ul>

		</div><!-- /.navbar-collapse -->
<?php } ?>





	</div>
</nav>




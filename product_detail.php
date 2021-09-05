<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Shoppee</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		<!-- bootstrap -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">      
		<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">		
		<link href="themes/css/bootstrappage.css" rel="stylesheet"/>
		
		<!-- global styles -->
		<link href="themes/css/flexslider.css" rel="stylesheet"/>
		<link href="themes/css/main.css" rel="stylesheet"/>

		<!-- scripts -->
		<script src="themes/js/jquery-1.7.2.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>				
		<script src="themes/js/superfish.js"></script>	
		<script src="themes/js/jquery.scrolltotop.js"></script>
		<!--[if lt IE 9]>			
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->
	</head>
    <body>		
		<div id="top-bar" class="container">
			<div class="row">
				<div class="span4">
				
				</div>
				<div class="span8">
					<div class="account pull-right">
						<ul class="user-menu">				
										
							<li><a href="index.html">Logout</a></li>		
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div id="wrapper" class="container">
			<section class="navbar main-menu">
				<div class="navbar-inner main-menu">				
					<a href="index.html" class="logo pull-left"><img src="themes/images//logo.png" class="site_logo" alt=""></a>
					<nav id="menu" class="pull-right">
						<ul>
						<li><a href="userhome.php">HOME</a></li>
							<li><a href="#">MY ITEMS</a>					
								<ul>
									<li><a href="itemadd.php">Item Entry</a></li>
									<li><a href="useritemview.php">Item View</a></li>								
								</ul>
							</li>	


<li><a href="alluserview.php">USERS ITEMS</a></li>

<li><a href="disposed.php">DISPOSED ITEMS</a></li>

<li><a href="profileup.php">PROFILE </a></li>

<li><a href="walletview.php">WALLET</a></li>
						
						
						</ul>
					</nav>
				</div>
			</section>			
			<section class="header_text sub">
			<img class="pageBanner" src="themes/images/pageBanner.png" alt="New products" >
				<h4><span>ITEMS</span></h4>
			</section>			
			<section class="main-content">				
				<div class="row">
					 <?php
            include('DatabaseCon.php');
            $db=new DatabaseCon();  
            session_start();
            $id=$_GET['id'];
            $s="select *from additem where id=$id";
            $rs=$db->selectData($s);
			$row=mysql_fetch_array($rs);
?>
							<div class="span4">
								<a href="<?php echo $row['image'];?>" class="thumbnail" data-fancybox-group="group1" title="Description 1"><img alt="" src="<?php echo $row['image'];?>"></a>												
							<br/>	
							</div>
							<div class="span5">
								<address>
									<strong>Category:</strong> <span><?php echo $row['itemCategory'];?></span><br>
									<strong>Product Name:</strong> <span><?php echo $row['itemName'];?></span><br>
									<strong>Details:</strong> <span><?php echo $row['Description'];?></span><br>
									<strong>Usage:</strong> <span><?php echo $row['usages'];?></span><br>								
								</address>									
								<h4><strong>Price: <?php echo $row['amount'];?></strong></h4>
							</div>
							<div class="span5">
								<a href="pay.php?id=<?php echo $row['id'];?>&amt=<?php echo $row['amount'];?>"><button class="btn btn-inverse" type="submit">PAY & BUY</button></a><BR/><BR/>
								<a href="buyaction.php?id=<?php echo $row['id'];?>&ot=cod"><button class="btn btn-inverse" type="submit">BUY & PAY ON DELIVERY</button></a>
							</div>							
						
				</div>
			</section>			
			
			<section id="copyright">
				<span>Copyright 2013 bootstrappage template  All right reserved.</span>
			</section>
		</div>
		<script src="themes/js/common.js"></script>
		<script>
			$(document).ready(function() {
				$('#checkout').click(function (e) {
					document.location.href = "checkout.html";
				})
			});
		</script>		
    </body>

</html>



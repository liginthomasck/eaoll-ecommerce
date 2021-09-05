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
							<li><a href="orders.php">Orders</a></li>							
							<li><a href="myorders.php">My Orders</a></li>			
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
					<div class="span12">					
						<h4 class="title"><span class="text"><strong>Item</strong> Details</span></h4>
	
	<center>
<form action="upprofileaction.php" >
 <?php
            include('DatabaseCon.php');
            $db=new DatabaseCon();
			session_start();
            $val=$_SESSION['userid'];
            $s="select login.userid,login.pass,userreg.id,userreg.name,userreg.addr,userreg.mob,userreg.email from userreg inner join login ON userreg.id=login.userid where userreg.id=$val";
            $rs=$db->selectData($s);
            $row=mysql_fetch_array($rs);
?>
<table>
<tr><th></th><td><input type="hidden" name="id" value="<?php echo $row['id'];?>" readonly/></td></tr>
<tr><th>name:</th><td><input type="text" name="name" value="<?php echo $row['name'];?>"/></td></tr>
<tr><th>address:</th><td><textarea name="adr" rows="5" cols="20" required ><?php echo $row['addr'];?></textarea></td></tr>
<tr><th>Phone:</th><td><input type="text" name="phn" value="<?php echo $row['mob'];?>" required /></td></tr>
<tr><th>email:</th><td><input type="email" name="em" value="<?php echo $row['email'];?>" required /></td></tr>
<tr><th>password:</th><td><input type="password" name="pass" value="<?php echo $row['pass'];?>" required /></td></tr>
<tr><th></th><td><input type="submit" value="update"/></td></tr>
</table>
</form>
    </center><br/><br/>
					</div>
					<div class="span6">					
												
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



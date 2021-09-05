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
						<li><a href="disposerhome.php">HOME</a></li>

					<li><a href="expireditem.php">DISPOSED ITEMS</a></li>

					<li><a href="buyeditem.php">BUYED ITEMS</a></li>
						
						</ul>
					</nav>
				</div>
			</section>			
			<section class="header_text sub">
			<img class="pageBanner" src="themes/images/pageBanner.png" alt="New products" >
				<h4><span>Items</span></h4>
			</section>			
			<section class="main-content">				
				<div class="row">
				
					<div class="span12">					
						<h4 class="title"><span class="text"><strong>Payment</strong> </span></h4>
						
 <form action="walletaction.php">
	
        <table>
		<?php
				$id=$_GET['id'];		
                $uid=$_GET['uid'];
				$iname=$_GET['name'];
				?>

		          <td><input type="hidden" name="id"  value="<?php echo $id;?>"/></td>
                  <td><input type="hidden" name="userid"  value="<?php echo $uid;?>"/></td>
 
        <tr><td>Item Name</td><td><input type="text" name="name"  value="<?php echo $iname;?>"/></td></tr>
    
        <tr><td>Amount</td><td><input type="number" name="amt" required /></td></tr>
        
        <tr><td align="center" colspan="2"><input type="submit" value="pay" class="btn btn-inverse large"  name="submitt"></td></tr>
        </table>
    </form>						
			<br/><br/><br/><br/>		</div>				
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


   

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
					<div class="span6">					
						<h4 class="title"><span class="text"><strong>Add</strong> Category</span></h4>
	
			<?php
include('DatabaseCon.php');
$db=new DatabaseCon();
?>
    <form action="additemaction.php" enctype="multipart/form-data" method="POST" class="form-stacked">
        <table>
       <tr><td>Item category &nbsp;</td><td>
	   <select name="cat" required >
	   &nbsp;&nbsp;
	
<?php
$s="select *from add_cat";
$rs=$db->selectData($s);
while($row=mysql_fetch_array($rs)){
	?>
	<option value="<?php echo $row['categoryname'];?>"><?php echo $row['categoryname'];?></option>
<?php }?>
	</select></td></tr><br/>
        <tr><td>Item Name</td><td><input type="text" name="iname" required /></td></tr>

        <tr><td>Description</td><td><textarea name="des" required></textarea></td></tr>
        <tr><td>Amount</td><td><input type="tel" name="amount" required /></td></tr>
        <tr><td>Usage</td><td><input type="text" name="usage" required /></td></tr>
        <tr><td>Image</td><td><input type="file" name="fileToUpload" id="fileToUpload" /></td></tr>
        
        <tr><td align="center" colspan="2"><input type="submit" value="ADD Item" class="btn btn-inverse large" name="submitt"></td></tr>
        </table>
    </form>	
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


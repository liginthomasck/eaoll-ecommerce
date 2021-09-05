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
								<li><a href="adminhome.php">HOME</a></li>

					<li><a href="add_cat.php">CATEGORY</a></li>

					<li><a href="itemview.php">ITEMS</a></li>

					<li><a href="viewuser.php">USERS</a></li>

					<li><a href="viewdisposed.php">DISPOSED ITEMS</a></li>
						
						</ul>
					</nav>
				</div>
			</section>			
			<section class="header_text sub">
			<img class="pageBanner" src="themes/images/pageBanner.png" alt="New products" >
				<h4><span>Login or Regsiter</span></h4>
			</section>			
			<section class="main-content">				
				<div class="row">
					<div class="span6">					
						<h4 class="title"><span class="text"><strong>Add</strong> Category</span></h4>
				  <form action="addcataction.php" class="form-stacked">
        <table>
            <tr><th>Category Name</th>
			</tr>
			<tr><td><input type="text" name="catname" class="input-xlarge" required /></td></tr>
            <tr><td align="center" colspan="2"><input type="submit" class="btn btn-inverse large" value="ADD" name="submit"></td></tr>
        </table>
    </form>			
					</div>
					<div class="span6">					
						<h4 class="title"><span class="text"><strong>Details</strong> </span></h4>
							<table border="1" style="width:100%;text-align:center">
							<tr style="background-color:#fd4004;color:white">
							<th>Category</th>
							<th>Action</th>							
							</tr>
							<?php
							include('DatabaseCon.php');
							$db=new DatabaseCon();
							$s="select * from add_cat";
							$rs=$db->selectData($s);
							while($row=mysql_fetch_array($rs)){
							?>
							<tr>
							<td><?php echo $row['categoryname']; ?></td>
							<td><a href="delcat.php?id=<?php echo $row['id']; ?>" style="color:red">Delete</a></td>
							</tr>
							<?php  } ?>
							</table>							
					</div>				
				</div>
			</section>			
			
<!-- Start copyright  -->
<div class="footer-bottom">
                <center>
                    <span class="credit">All Rights Reserved.</span>
                    <span class="far fa-copyright"></span>
                    <span>2020</span>
                    <span class="credit"><a href="#">eaoll.in</a></span>
                    <span class="credit">&nbsp; | &nbsp; Design By : <a href="https://www.linkedin.com/company/eaoll-web-services-ltd">Eaoll Web Services</a></span>
                </center>
            </div>
            <!-- End copyright  -->
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

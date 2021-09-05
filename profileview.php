<html>
<center>
<a href="userhome.php">HOME</a>
&nbsp;
<a href="itemadd.php">ITEMADD</a>
&nbsp;
<a href="useritemview.php">ITEMS</a>
&nbsp;
<a href="alluserview.php">USERS ITEMS</a>
&nbsp;
<a href="disposed.php">DISPOSED ITEMS</a>
&nbsp;
<a href="profileview.php">PROFILE VIEW</a>
&nbsp;
<a href="walletview.php">WALLET</a>
&nbsp;
<a href="index.html">LOGOUT</a>
<br/>
<head><link rel="stylesheet" type="text/css" href="mystyle.css"></head>
<br/>
<body>

<table border=1>
<tr>
<th>Id</th>
<th>name</th>
<th>Address</th>
<th>mobile</th>
<th>gender</th>
<th>email</th>
<th>Dob</th>
<th>Aadhar id</th>
<th>password</th>



</tr>
 <?php
            include('DatabaseCon.php');
            $db=new DatabaseCon();
			 session_start();
            $val=$_SESSION['userid'];
            $s="select *from userreg where id=$val";
            $rs=$db->selectData($s);
            while($row=mysql_fetch_array($rs)){
?>
 <tr>
  <td><?php echo $row['id'];?></td>
 <td><?php echo $row['name'];?></td>
 <td><?php echo $row['addr'];?></td>
  <td><?php echo $row['mob'];?></td>
   <td><?php echo $row['gender'];?></td>
   <td><?php echo $row['email'];?></td>
 <td><?php echo $row['dob'];?></td>
 <td><?php echo $row['aadharid'];?></td>
  <td><?php echo $row['password'];?></td>
    


  <td><a href="profileup.php?n=<?php echo $row['id'];?> ">update</a></td>
  

 </tr>
 <?php }?>
 </table>
 </center>
 </body>
 </html>
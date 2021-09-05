<?php
include('DatabaseCon.php');
$db=new DatabaseCon();
$address=$_GET['adr'];
$phone=$_GET['phn'];
$email=$_GET['em'];
$Password=$_GET['pass'];
$uid=$_GET['id'];
$sql="update userreg set addr='$address',mob='$phone',email='$email' where id='$uid'";
$db->insertQuery($sql);
$sql2="update login set uname='$email',pass='$Password' where userid='$uid'";
$db->insertQuery($sql2);
echo "<script>alert('success');window.location='userhome.php';</script>";
?>
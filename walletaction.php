<?php
include('DatabaseCon.php');
$db=new DatabaseCon();
$id=$_GET['id'];
$uid=$_GET['userid'];
$amt=$_GET['amt'];
$sql="insert into wallet(userid,itemid,amt) values('$uid','$id','$amt')";
$db->insertQuery($sql);
echo "<script>alert('success');window.location='disposerhome.php';</script>";
?>
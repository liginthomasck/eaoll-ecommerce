<?php
include('DatabaseCon.php');
$db=new DatabaseCon();
session_start();
$id=$_GET['id'];
$uid=$_SESSION['userid'];
$d=Date('Y-m-d');
$ot=$_GET['ot'];
echo $sql="insert into orders(userid,itemid,odate,status,otype) values('$uid','$id','$d','pending','$ot')";
$db->insertQuery($sql);
echo "<script>alert('success');window.location='alluserview.php';</script>";
?>
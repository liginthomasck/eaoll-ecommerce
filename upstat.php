<?php
include('DatabaseCon.php');
$db=new DatabaseCon();

$oid=$_GET['oid'];
echo $sql="update orders set status='Delivered' where oid='$oid'";
$db->insertQuery($sql);

echo "<script>alert('success');window.location='adminhome.php';</script>";
?>
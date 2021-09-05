<?php
include('DatabaseCon.php');
$db=new DatabaseCon();
$id=$_GET['n'];
$sql="update additem set status='rejected' where id=$id";
$db->insertQuery($sql);
echo "<script>alert('success');window.location='adminhome.php';</script>";
?>
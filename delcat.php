<?php
include('DatabaseCon.php');
$db=new DatabaseCon();
$id=$_GET['id'];
$sql="delete from add_cat where id='$id'";
$db->insertQuery($sql);
echo"<script>alert('success');window.location='add_cat.php';</script>";
?>
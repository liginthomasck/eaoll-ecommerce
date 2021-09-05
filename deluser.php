<?php
include('DatabaseCon.php');
$db=new DatabaseCon();
$slno=$_GET['n'];
$sql="delete from userreg where id='$slno'";
$db->insertQuery($sql);
echo"<script>alert('success');window.location='adminhome.php';</script>";
?>
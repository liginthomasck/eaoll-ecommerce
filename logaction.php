<?php
include('DatabaseCon.php');
$db=new DatabaseCon();
session_start();
$uname=$_POST['uname'];
$upass=$_POST['pass'];

$sql="select *from login where uname='$uname' and pass='$upass'";
$rt=$db->selectQuery($sql);
if($rt==1)
{
$rs=$db->selectData($sql);
$row=mysql_fetch_array($rs);
$utype=$row['utype'];
$_SESSION['userid']=$row['userid'];
if($utype=="admin")
{
echo "<script>alert('login successs');window.location='adminhome.php';</script>";
}
else if($utype=="user")
{
echo "<script>alert('login successs');window.location='userhome.php';</script>";
}
else if($utype=="disposer")
{
echo "<script>alert('login successs');window.location='disposerhome.php';</script>";
}
else
{
echo "<script>alert('login failed');window.location='register.html';</script>";
}
}
else
{
echo "<script>alert('login failed');window.location='register.html';</script>";
}
 ?>

<?php
include('DatabaseCon.php');
$db=new DatabaseCon();
$name=$_GET['name'];
$address=$_GET['add'];
$number=$_GET['mob'];

$email=$_GET['email'];
$adhar=$_GET['adhar'];

$pass=$_GET['pass'];
$sql="insert into userreg(name,addr,mob,email,aadharid) values('$name','$address',$number,'$email','$adhar')";
$db->insertQuery($sql);
$a="select max(id) as userid from userreg";
$rs=$db->selectData($a);
$row=mysql_fetch_array($rs);
$uid=$row['userid'];
//echo $userid;
$q2="insert into login(userid,uname,pass,utype)values('$uid','$email','$pass','user')";
$db->insertQuery($q2);
//header('location:login.php');
echo "<script>alert('succesfully registered');
window.location='register.html';
</script>";
?>
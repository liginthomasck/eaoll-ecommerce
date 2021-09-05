<?php
include('DatabaseCon.php');
$db=new DatabaseCon();
session_start();
$cat=$_POST['cat'];
$name=$_POST['iname'];
$description=$_POST['des'];
$amount=$_POST['amount'];
$usage=$_POST['usage'];
$sd=Date('Y-m-d');
$ed=Date('Y-m-d', strtotime($sd. ' + 10 days')); 
$uid=$_SESSION['userid'];
$target_dir = "picz/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    
	$sql="insert into additem(itemCategory,itemName,Description,amount,usages,image,sDate,EDate,status,userid)
	values('$cat','$name','$description',$amount,'$usage','$target_file','$sd','$ed','pending',$uid)";
$db->insertQuery($sql);
echo "<script>alert('success');window.location='userhome.php';</script>";

  } else {
    echo "Sorry, there was an error uploading your file.";
  }

?>
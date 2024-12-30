<?php
include('../inc/conn.php');
$type =$_POST['type'] ;
$fullname=$_POST['fullname'];
$email=$_POST['email']; 
$password=$_POST['password'];  
$phone=$_POST['phone']; 
$query="insert INTO user SET FullName='$fullname',Email='$email',Password='$password',Phone='$phone', type='$type'";
$execution=mysqli_query($conn,$query);
 if($execution)
 {
    header('Location:../users_list.php?msg=success');
    exit();
 }else
 {
    header('Location:../users_list.php?msg=failed');
 }
?>
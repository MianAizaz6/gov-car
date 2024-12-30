<?php
include('../inc/conn.php');
$fullname=$_GET['FullName'];
$email=$_GET['Email']; 
$password=$_GET['Password'];  
$phone=$_GET['Phone'];
$id=$_GET['id']; 
$query="UPDATE user SET FullName='$fullname',Email='$email',Password='$password',Phone='$phone' WHERE id ='$id'";
$execution=mysqli_query($conn,$query);
 if($execution)
 {
    header('Location:../users_list.php?msg=update');
    exit();
 }else
 {
    header('Location:../users_list.php?msg=notupdate');
 }
?>
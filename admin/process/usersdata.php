<?php
include('../inc/conn.php');
$type =$_POST['type'] ;
$username=$_POST['username'];
$password=$_POST['password'];   
$query="insert INTO user SET Username='$username',Password='$password',type='$type'";
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
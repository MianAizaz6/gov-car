<?php
include('../inc/conn.php');
$username=$_GET['username'];
$password=$_GET['Password'];  
$id=$_GET['id']; 
$query="UPDATE user SET Username='$username',Password='$password', WHERE id ='$id'";
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
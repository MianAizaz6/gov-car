<?php
$id=$_GET['id'];
include('../inc/conn.php');
$query="DELETE FROM user WHERE id='$id'";
$execution=mysqli_query($conn,$query);
 if($execution)
 {
    header('Location:../sales_list.php?msg=success');
    exit();
 }else
 {
    header('Location:../sales_list.php?msg=failed');
 }
?>
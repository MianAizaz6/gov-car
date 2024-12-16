<?php
$id=$_GET['id'];
$conn=mysqli_connect('localhost','root','','gov-car');
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
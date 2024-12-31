<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$conn = mysqli_connect('localhost', 'root', '', 'dvlabuyq_gov_car');
?>

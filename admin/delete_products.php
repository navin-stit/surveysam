<?php
include '../database.php';
$eid=$_REQUEST['eid'];
mysqli_query($conn,"delete from `products` where `id` = '$eid'");
header('Location:dashboard.php');
?>
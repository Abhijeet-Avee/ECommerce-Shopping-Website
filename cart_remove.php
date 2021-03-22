<?php
include 'includes\common.php';
$pid = filter_input(INPUT_GET,'id',FILTER_VALIDATE_INT);
$uid = $_SESSION['user_id'];
$delete_query = "delete from users_products where user_id ='$uid' and product_id='$pid'";
$delete_query_result = mysqli_query($con, $delete_query)
or die(mysqli_error($delete_query_result));
header('location:cart.php');
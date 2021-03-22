<?php
include 'includes\common.php';
$user_id = $_SESSION['user_id'];
$item_id = filter_input(INPUT_GET,'id');
$cart_add = "insert into users_products(user_id,product_id,status) values('$user_id','$item_id','added to cart')";
$cart_submit = mysqli_query($con,$cart_add)
        or die(mysqli_error($con));
header('location:product.php');

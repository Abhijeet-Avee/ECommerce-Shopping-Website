<?php
 function check_if_added_to_cart($product_id)
 {
     $con = mysqli_connect("localhost","root","","ecommerce")
        or die(mysqli_error($con));
   $user_id = $_SESSION['user_id'];
   $cart_query = "select id from users_products where product_id = '$product_id' and user_id = '$user_id'and status = 'added to cart'";
   $cart_query_result = mysqli_query($con,$cart_query);
 $number_of_products = mysqli_num_rows($cart_query_result);
    if($number_of_products>=1)
    {
        return 1;
    }
 else {
    return 0;    
    }
 }
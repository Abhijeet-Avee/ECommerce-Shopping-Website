<?php
require 'includes\common.php';
$email = mysqli_real_escape_string($con,filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL));
$password = mysqli_real_escape_string($con,filter_input(INPUT_POST,'password'));
$password2=md5($password);
$users_query = "SELECT id,email FROM users WHERE email='$email' and password='$password2'";
$users_query_result = mysqli_query($con,$users_query);
$number_of_users = mysqli_num_rows($users_query_result);
if ($number_of_users==0)
{
    echo 'there is no user with the specified email or password';
}
else
{
    $row = mysqli_fetch_array($users_query_result);
    $_SESSION['email']=$row['email'];
    $_SESSION['user_id']=$row['id'];
    header('location:product.php');
}

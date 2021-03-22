<?php
require 'includes\common.php';
$name = mysqli_real_escape_string($con,filter_input(INPUT_POST,'name'));
$email = mysqli_real_escape_string($con,filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL));
$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
if(!preg_match($regex_email,$email))
{
    header('location:signup.php ? email_error=enter coorect email');
}
$password =filter_input(INPUT_POST,'password');
if(strlen($password)<6)
{
    header('location:signup.php ? password_error = enter correct password');
}
$contact = mysqli_real_escape_string($con,filter_input(INPUT_POST,'contact',FILTER_VALIDATE_INT));
$city = mysqli_real_escape_string($con,filter_input(INPUT_POST,'city'));
$address = mysqli_real_escape_string($con,filter_input(INPUT_POST,'address'));
$users_query = "SELECT id FROM users WHERE email='$email'";
$users_query_result = mysqli_query($con,$users_query);
$number_of_rows= mysqli_num_rows($users_query_result);
$password1= md5($password);
if($number_of_rows>0)
{
    echo 'email already exists.Try another';
}
else
{
   $user_data = "insert into users(email,name,contact,password,address,city) values('$email','$name','$contact',
           '$password1','$address','$city')";
   $user_data_submit = mysqli_query($con, $user_data)
           or die(mysqli_error($con));
   $_SESSION['email'] = $email;
   $_SESSION['user_id'] = mysqli_insert_id($con);
   header('location:product.php');
}
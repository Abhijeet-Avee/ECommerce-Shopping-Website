<?Php
require 'includes\common.php';
if(!isset($_SESSION['email']))
{
    header('location:index.php');
}
$old_password = filter_input(INPUT_POST,'old_password');
$new_password = filter_input(INPUT_POST,'new_password');
$retype_password = filter_input(INPUT_POST,'retype_new_password');
$user_passid = $_SESSION['user_id'];
$password_query = "select * from users where id ='$user_passid'";
$password_query_result= mysqli_query($con,$password_query)
        or die(mysqli_error($con));
$new_password1 = md5($new_password);
$old_password1 = md5($old_password);
$password_row =mysqli_fetch_array($password_query_result);
if(strlen($new_password)!= strlen($retype_password))
{
    $_SESSION['error'] = "new password does not match with retyped password"; 
    header('location:setting.php');
   }
 else if(strlen($new_password)<6)
{
    $_SESSION['error'] = "new password length must be more than 6";
    header('location:setting.php');
}
 else if($new_password!=$retype_password)
{
    $_SESSION['error'] ="new password does not match with retyped password";
    header('location:setting.php');
}
 else if($old_password1 == $password_row['password'])
{
    $password_update = "update users set password = '$new_password1' where id = '$user_passid'";
    $password_updtae = mysqli_query($con,$password_update);
    $_SESSION['error']="PASSWORD SUCESSFULLY CHANGED";
    header('location:setting.php');
}
 else {
   $_SESSION['error']="Entered password does not match with the previous one"; 
   header('location:setting.php');
}
<?php
require 'includes\common.php';
if(!isset($_SESSION['email']))
{
    header('location:index.php');
}
?>
<html>
    <head>
        <title>Order Status</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="index.css" type="text/css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
       <?php
         include 'includes/header.php';
         $curr_id = $_SESSION['user_id'];
             $update_query = "update users_products SET status = 'confirmed' where users_products.user_id ='$curr_id'";
              $update_query_result = mysqli_query($con,$update_query)
                      or die(mysqli_error($update_query));
         ?>
        <div class="container success-img">
            <h2>Your order is confirmed.</h2>
            <div class="jumbotron">
                <center>
                    <h3>Thank you for shopping with us.<a href="product.php">Click here</a> to purchase
                        any other item.</h3>
                </center>
            </div>
        </div>
         <?php
    include 'includes\footer.php';
    ?>
    </body>
</html>

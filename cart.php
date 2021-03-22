<?php
require 'includes\common.php';
if(!isset($_SESSION['email']))
{
    header('location:index.php');
}
?>
<html>
    <head>
        <title>Cart</title>
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
         ?>
        <div class=" container cart-img">
            <div class="table-responsive col-md-6 col-md-offset-3">
                <table class="table table-striped">
                    <tbody>
                        <tr><th>Item Number</th><th>Item Name</th><th>Price</th><th>Remove</th></tr>
                        <tr><td> </td><td> </td><td> </td><td> </td></tr>
            <?php
            $user_id = $_SESSION['user_id'];
            $join = "select u.product_id,p.name,p.price from users_products u inner join products p on u.user_id = '$user_id' and u.product_id = p.id and u.status='added to cart' ";
            $join_result = mysqli_query($con,$join);
            $no_of_rows = mysqli_num_rows($join_result);
            $item_array = array(1,2,3,4,5,6,7,8,9,10,11,12);
            $sum=00.00;
            $serial=0;
            if($no_of_rows == 0)
            {
            ?>
            <div class="jumbotron">
                <h2>Add items to the cart first!!!</h2>            </div>
            <?php
            }
            else{
                
                while($rows=mysqli_fetch_array($join_result))
                {
                    $sum = $rows['price'] + $sum;
                    $id = $rows['product_id'];
                    $serial+=1;
                ?>
                    <tr><td><?php echo $serial;?></td><td><?php echo $rows['name'];?></td>
                        <td><?php echo $rows['price'];?></td>
                        <td><a href='cart_remove.php?id=<?php echo $id ?>'>Remove</a></td></tr>
               <?php
               }
            }
            ?>
              <tr><td></td><td>Total</td><td>Rs <?php echo $sum?></td>
                            <td><a href="success.php?id={$item_array}" class="btn btn-primary">Confirm Order</a></td></tr>
                    </tbody>
                </table>
            </div>
        </div>
    <?php
    include 'includes\footer.php';
    ?>
    </body>
</html>

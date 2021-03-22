<?php
require 'includes\common.php';
?>
<html>
    <head>
        <title>Products page</title>
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
         include 'includes/check-if-added.php';
         ?>
        <div class="product-img">
        <div class="container">
            <div class="jumbotron">
                <h1>Welcome to our Lifestyle Store!</h1>
                <p>We have the best cameras, watches and shirts for you.No need to hunt around, we
                have all in one place.</p>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/cannon1.jpg" alt="cannon">
                        <div class="caption capt">
                            <h3>Cannon EOS</h3>
                            <p>Price:Rs.36000.00</p>
                            <?php
                            if(!isset($_SESSION['email']))
                            {
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                            }
                            else
                            {
                                if(check_if_added_to_cart(1))
                                {
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                  }else{
                            ?>
                            <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                            <?php
                                  }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/sony1.jpg" alt="sony">
                        <div class="caption capt">
                            <h3>Sony DSLR</h3>
                            <p>Price:Rs.40000.00</p>
                             <?php
                            if(!isset($_SESSION['email']))
                            {
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                            }
                            else
                            {
                                if(check_if_added_to_cart(2))
                                {
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                  }else{
                            ?>
                            <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                            <?php
                                  }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/sony2.jpg" alt="sony">
                        <div class="caption capt">
                            <h3>Sony DSLR</h3>
                            <p>Price:Rs.50000.00</p>
                              <?php
                            if(!isset($_SESSION['email']))
                            {
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                            }
                            else
                            {
                                if(check_if_added_to_cart(3))
                                {
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                  }else{
                            ?>
                            <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                            <?php
                                  }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/olympus1.jpg" alt="olympus">
                        <div class="caption capt">
                            <h3>Olympus DSLR</h3>
                            <p>Price:Rs.80000.00</p>
                              <?php
                            if(!isset($_SESSION['email']))
                            {
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                            }
                            else
                            {
                                if(check_if_added_to_cart(4))
                                {
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                  }else{
                            ?>
                            <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                            <?php
                                  }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/titan1.jpg" alt="titan">
                        <div class="caption capt">
                            <h3>Titan Model #301</h3>
                            <p>Price:Rs.13000.00</p>
                             <?php
                            if(!isset($_SESSION['email']))
                            {
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                            }
                            else
                            {
                                if(check_if_added_to_cart(5))
                                {
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                  }else{
                            ?>
                            <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                            <?php
                                  }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/titan2.jpg" alt="titan">
                        <div class="caption capt">
                            <h3>Titan Model #201</h3>
                            <p>Price:Rs.3000.00</p>
                            <?php
                            if(!isset($_SESSION['email']))
                            {
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                            }
                            else
                            {
                                if(check_if_added_to_cart(6))
                                {
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                  }else{
                            ?>
                            <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                            <?php
                                  }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/Milan1.jpg" alt="Milan">
                        <div class="caption capt">
                            <h3>HMT Milan</h3>
                            <p>Price:Rs.8000.00</p>
                             <?php
                            if(!isset($_SESSION['email']))
                            {
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                            }
                            else
                            {
                                if(check_if_added_to_cart(7))
                                {
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                  }else{
                            ?>
                            <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                            <?php
                                  }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/luba1.jpg" alt="Luba">
                        <div class="caption capt">
                            <h3>Faber Luba #111</h3>
                            <p>Price:Rs.18000.00</p>
                            <?php
                            if(!isset($_SESSION['email']))
                            {
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                            }
                            else
                            {
                                if(check_if_added_to_cart(8))
                                {
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                  }else{
                            ?>
                            <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                            <?php
                                  }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/shirt3.jpg" alt="H & W">
                        <div class="caption capt">
                            <h3>H & W</h3>
                            <p>Price:Rs.800.00</p>
                             <?php
                            if(!isset($_SESSION['email']))
                            {
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                            }
                            else
                            {
                                if(check_if_added_to_cart(9))
                                {
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                  }else{
                            ?>
                            <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                            <?php
                                  }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/shirt1.jpg" alt="Luis Phil">
                        <div class="caption capt">
                            <h3>Luis Phil</h3>
                            <p>Price:Rs.1000.00</p>
                            <?php
                            if(!isset($_SESSION['email']))
                            {
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                            }
                            else
                            {
                                if(check_if_added_to_cart(10))
                                {
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                  }else{
                            ?>
                            <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                            <?php
                                  }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/shirt2.jpg" alt="John Zok">
                        <div class="caption capt">
                            <h3>John Zok</h3>
                            <p>Price:Rs.1500.00</p>
                            <?php
                            if(!isset($_SESSION['email']))
                            {
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                            }
                            else
                            {
                                if(check_if_added_to_cart(11))
                                {
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                  }else{
                            ?>
                            <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                            <?php
                                  }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/shirt3.jpg" alt="Jhalsan">
                        <div class="caption capt">
                            <h3>Jhalsan</h3>
                            <p>Price:Rs.1300.00</p>
                            <?php
                            if(!isset($_SESSION['email']))
                            {
                            ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                            }
                            else
                            {
                                if(check_if_added_to_cart(12))
                                {
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                  }else{
                            ?>
                            <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                            <?php
                                  }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <?php
    include 'includes\footer.php';
    ?>
    </body>
</html>

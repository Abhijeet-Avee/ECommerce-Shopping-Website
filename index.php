<?php
require 'includes\common.php';
if(isset($_SESSION['email']))
{
header('location:product.php');
}
?>
<html>
    <head>
        <title>Lifestyle Store</title>
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
       
        <div id="banner-image">
              <div class="container">
            <div id="banner-content">
                <h1>We sell lifestyle</h1>
                    <p>Flat 40% OFF on premium brands</p><br><br>
                    <a href="product.php" class="btn btn-danger btn-lg active">Shop Now</a>
            </div>
           </div>
            </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                <a href="#" class="thumbnail">
                        <img src="img/camera.jpg" alt="camera" class="img-responsive">
                        <div class="caption capt">
                            <h3>Cameras</h3>
                            <p>Choose among the best in world</p>
                        </div>
                </a>
                </div>
                <div class="col-sm-4">
                    <a href="#" class="thumbnail"> 
                        <img src="img/watch.jpg" alt="watches" class="img-responsive">
                        <div class="caption capt">
                            <h3>Watches</h3>
                            <p>Original watches from the best brand</p>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="#" class="thumbnail">
                        <img src="img/shirt.jpg" alt="shirts" class="img-responsive">
                        <div class="caption capt">
                            <h3>Shirts</h3>
                            <p>Our exquisite collection of shirts</p>
                        </div>
                </a>
            </div>
        </div>
        </div>
        <?php
    include 'includes\footer.php';
    ?>
           </body>
        </html>
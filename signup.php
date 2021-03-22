<?php
require 'includes\common.php';
if (isset($_SESSION['email']))
{
    header('location:product.php');
}
?>
<html>
    <head>
        <title>Sign Up</title>
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
        <div class="signup-img">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-lg-offset-4 col-md-offset-3 col-md-6">
                    <h2>SIGN UP</h2>
                    <form method="POST" action="signup_script.php ">
                        <div class="form-group">
                            <input class="form-control" placeholder="Name" name="name" required="true">
                        </div>  
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="E-mail" name="email"
                                   required="true" pattern="[a-z0-9._%+*-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                        </div>
                        <div><?php echo filter_input(INPUT_GET,'email_error'); ?></div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" name="password"
                                   required="true" pattern=".{6, }">
                        </div>
                        <div><?php echo filter_input(INPUT_GET,'password_error');?></div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Contact" name="contact"
                                   required="true">
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="City" name="city" required="true">
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Address" name="address" required="true">
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        </div>
       <?php
    include 'includes\footer.php';
    ?>
    </body>
</html>

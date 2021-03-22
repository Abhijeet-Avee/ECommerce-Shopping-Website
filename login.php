<?php
require 'includes/common.php';
?>
<html>
    <head>
        <title>Login Page</title>
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
        <div id="login-image">
            <div class="container">
            <div class="col-xs-4 col-xs-offset-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4>LOGIN</h4>
                    </div>
                    <div class="panel-body">
                        <p class="text-warning">Login to make a purchase</p>
                        <form method="POST" action="login_submit.php">
                            <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" class="form-control" placeholder="E-mail" name="email" 
                                   required="true">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                            <input type="password" class="form-control" placeholder="password" name="password"
                                   required="true">
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Login</button>
                            <br><br>
                        </form><br/> 
                    </div>
                    <div class="panel-footer"><p>Don't have an account?  <a href="signup.php"> "Register here"</a></p>
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

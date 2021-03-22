<?php
require 'includes\common.php';
if(!isset($_SESSION['email']))
{
    header('location:index.php');
}
?>
<html>
    <head>
        <title>Settings</title>
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
        <div class="container-fluid settings-img">
            <div class="row">
                <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-6">
                    <h3>Change Password</h3>
                    <form method="POST" action='settings_script.php'>
                        <div class="form-group">
                        <input class="form-control" type="password" placeholder="Old Password" name="old_password" required="true">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="New Password" name="new_password" required="true">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Re-type Password" name="retype_new_password" required="true">
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Change</button><br/>
                        <?php if(isset($_SESSION['error']))
                        {
                            ?> <div class ='jumbotron'><h4><?php echo $_SESSION['error']; ?></h4></div>
                         <?php
                            unset($_SESSION['error']);
                        }
                          ?>
                    </form>
                </div>
            </div>
        </div>
       <?php
    include 'includes\footer.php';
    ?>
    </body>
</html>

<?php include('server.php') ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login - Firearm Licensing</title>
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <link rel='stylesheet' href='styles.css'>
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
        
    </head>
    <body>
            <div id='logo'>
                <img src='images/logo-FLU.png' class='center'>
            <!--*************************************************
                *************************************************
                LOGIN-->
            </div>
            <form method='post' action='<?php echo $_SERVER['PHP_SELF'];?>'>
                <?php include('errors.php'); ?>
                  <div class="form-group">
                      <h3>Login form</h3>
                      <hr>
                      <!--UserN-->
                    <label>Username</label>
                    <input type="text" class="form-control" name='username'placeholder="Enter your username">
                      <!--UserN-->
                  </div>
                  <div class="form-group">
                      <!--PW-->
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Password">
                      <small id="userHelp" class="form-text text-muted">Make sure your CAPS Lock is turned off, such information is case sensitive.
                    </small>
                      <!--PW-->
                  </div>
                    <hr>
                  <button type="submit" class="btn btn-default" name='login_user'>Submit</button> 
            </form>
            <!--*************************************************
                *************************************************
                LOGIN-->
        <div id='nonreg'>
            <p>Perhaps, you're not registered? Try <a href='register.php'>here</a>!</p>
        </div>
    </body>

</html>
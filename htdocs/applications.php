<?php include('server.php') ?>
<html>
    <head>
        <title>Application - Firearm Licesning</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <link rel='stylesheet' href='styles.css'>
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    </head>
    
    <body>
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
          <a  class="navbar-brand" href="#">Navigation</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExample03">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="main.html">Home</a>
              </li>
              <li class="nav-item active">
                <a  class="nav-link" href="about.html">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="applications.php">Applications</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                <div class="dropdown-menu" aria-labelledby="dropdown03">
                  <a class="dropdown-item" href="policies.html">Policies</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
            </ul>
            <form class="form-inline my-2 my-md-0">
              <input class="form-control" type="text" placeholder="Search">
            </form>
          </div>
        </nav>
        
        <div>
            <form id='reg' method='post' action='applications.php'>
                <?php include('errors.php'); ?>
              <div class="form-group">
                <h3>Application form</h3>
                <hr>

                <label>What weaponry tier are you applying for?</label>
                <select name='tierSelect'>
                  <option value="1">Private Firearm License</option>
                  <option value="2">Concealed Carry Weaponry License</option>
                </select><br>
                  <small>Before you apply for CCW, you first require to have a PF license.</small><br><br>
  
                <label>Where do you plan to store the weapon, given if you acquire such a license?</label>
                <input type='text' class='form-control' name='storage' placeholder='Enter your responce'>
              </div>
              <div class="form-group">
                  <label>Why do you require such a license?</label>
                <input type='text' class='form-control' name='reason' placeholder='Enter your responce'>

                <hr>
                  <label>Make sure you have read our policies regarding license use. If so, check the box and submit.</label>
                  <label>You may view our policies, <a href='policy.html'>here</a>!</label>
                  <!--<input type="checkbox" id="policyCheck" name="policies" value="policies">-->
              <button type="submit" class="btn btn-default" name='app_user'>Submit</button>
                      </div>
        </form>

        </div>
        <!--<script src='js/script.js'></script>
        <script src="jquery-3.3.1.min.js"></script>-->
    </body>
    
</html>
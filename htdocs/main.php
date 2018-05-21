<?php session_start()?>
<!DOCTYPE html>
<html>
    <head>
        <title> Home - Firearm Licensing </title>
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <link rel='stylesheet' href='styles.css'>
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    </head>
    
    <body>
        <?php $username = $_SESSION['username'];
            echo $username;?>
        <!---NAVBAR
        -->
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
          <a  class="navbar-brand" href="#">Navigation</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExample03">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="main.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item active">
                <a  class="nav-link" href="about.html">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="applications.php">Application</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">More..</a>
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
        <!--NAVBAR END
        -->
        
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
      <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="images/gun1.png" class='tales' alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                    </div>
                </div>
              <div class="carousel-item">
                      <img class="d-block w-100" src="images/gun2.png" class='tales' alt="Second slide">
                  <div class="carousel-caption d-none d-md-block">

                  </div>
              </div>
              <div class="carousel-item">
                      <img class="d-block w-100" src="images/gun3.png" class='tales' alt="Third slide">
                      <div class="carousel-caption d-none d-md-block">
                      </div>
              </div>
        </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
              </a>
    </div>
    <div class="jumbotron">
        <h1 class="display-4">Welcome to Firearm Licensing website!</h1>
        <p class="lead">This is still an unofficial website and it does not represent any offical authority.</p>
        <hr class="my-4">
        <p>We advise you to  read our policies and informative pages before actually applying for one of our licences.</p>
    </div>   
    </body>
    <footer>
    Thanks for visiting.
    </footer>
</html>
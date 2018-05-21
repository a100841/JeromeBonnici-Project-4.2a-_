<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$tier = "";
$reason = "";
$storage = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'accountdb');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM account WHERE username='$username' OR email='$email'";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO account (username, password, email) 
  			  VALUES('$username', '$password', '$email')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	//$_SESSION['success'] = "You are now logged in";
  	header('location: main.php');
  }
}
// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM account WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: main.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}

//APPLICATIONS
//

if (isset($_POST['app_user'])) {
    
  $tier= mysqli_real_escape_string($db, $_POST['tierSelect']);
  $storage = mysqli_real_escape_string($db, $_POST['storage']);
  $reason = mysqli_real_escape_string($db, $_POST['reason']);
//  $targetDir = 'uploads/'; #directory in the htdocs
//  $targetfile = $targetDir.basename($_FILES['fileUpload']['tmp_name']);
//            #echo $targetfile;
//if (move_uploaded_file($_FILES['fileUpload']['tmp_name'], $targetfile))
//    {
//        echo "The file ".basename($_FILES['fileUploads']['name'])." has been uploaded.";
//    }
//else
//    {
//    echo "Error";
//    }

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($tier)) { array_push($errors, "Tier is required"); }
  if (empty($storage)) { array_push($errors, "Storage is required"); }
  if (empty($reason)) { array_push($errors, "Reaosn is required"); }
  //if ($password_1 != $password_2) {
//	array_push($errors, "The two passwords do not match");
    $Check = "SELECT userid from account where username = $username";
    $userCheck = mysqli_query($db,$Check);
  	$query = "INSERT INTO application (tier, storage, reason) 
  			  VALUES('$tier', '$storage', '$reason')";
  	mysqli_query($db, $query);
  	//$_SESSION['username'] = $username;
  	//$_SESSION['success'] = "You are now logged in";
  	//header('location: main.html');

    require($_SERVER['DOCUMENT_ROOT'].'/phpmailer/PHPMailerAutoload.php'); #load the library required for phpmailer

    $username = 'jerome.bonnici.a100841@mcast.edu.mt';
    $pwd = 'mcast246698';
    $comments = 'Test';
    $emailTo = 'jerome.bonnici.a100841@mcast.edu.mt';
    $mail = new PHPMailer(); #create a new instance
    $mail->isSMTP(); #using SMTP
    $mail->isHtml(true);
    $mail->Host = 'smtp.office365.com';
    #$mail->SMTPDebug = 2; #include client and server messges
    $mail->Port = 587;
    $mail->SMTPSecure = 'tls';
    $mail->SMTPAuth = true;
    $mail->Username = $username;
    $mail->Password = $pwd;
    $mail->Body = $comments;
    $mail->Subject = 'test';
    $mail->From = $username; #sender
    $mail->AddAddress($emailTo); #recepient
    
    if (!$mail->Send()) #sending the email
    {
        echo "<script type='text/javascript'>alert('Email faled');</script>";
        echo "<script type='text/javascript'>alert('. $mail->ErrorInfo');</script>";
    }
    else
        echo "<script type='text/javascript'>alert('Email was sent');</script>";
}
?>
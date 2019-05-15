<?php
session_start();

// initializing variables
$username = "";
$password    = "";
$data_errors = array(); 

// Check if we click the submit button
if (isset($_POST['submit'])) {
  // connect to the database
  $link = mysqli_connect('mysqlsrv.dcs.bbk.ac.uk','truzvi01','bbkmysql','truzvi01db');
  //$link = mysqli_connect('localhost', 'root','root','aldershot_hampshire');
    //include'includes/dbc.php';
  $username = mysqli_real_escape_string($link, $_POST['username']);
  $password = mysqli_real_escape_string($link, $_POST['password']);
//Error handlers to check if inputs are empty
  if (empty($username)) {
    array_push($data_errors, "Your username is missing");
  }
  if (empty($password)) {
    array_push($data_errors, "Your password is missing ");
  }
  //If user details exists in the database
  else if(count($data_errors) == 0){
    $password = ($password);
    $sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
    $results = mysqli_query($link, $sql);
    if ($row = mysqli_fetch_assoc($results)) {
    $_SESSION['status'] = $row['status'];
    $_SESSION['username'] = $row['username'];
    $_SESSION['last_name'] = $row['last_name'];
    $_SESSION['first_name'] = $row['first_name'];
    $_SESSION['gender'] = $row['gender'];
    $_SESSION['dob'] = $row['dob'];
    $_SESSION['birth_place'] = $row['birth_place'];
    $_SESSION['home_address'] = $row['home_address'];
    $_SESSION['city'] = $row['city'];
    $_SESSION['county'] = $row['county'];
    $_SESSION['postcode'] = $row['postcode'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['telephone'] = $row['telephone'];
    $_SESSION['file_1'] = $row['file_1'];
    $_SESSION['file_2'] = $row['file_2'];
    $_SESSION['uploaded_image'] = $row['upload_image'];
    $_SESSION['activate'] = $row['activate'];
    header('location: admin-panel.php');
   }
    else {
         
         array_push($data_errors, "Wrong username/password");

    }
  }
}
?> 
<?php
session_start(); 
$link = mysqli_connect('mysqlsrv.dcs.bbk.ac.uk','truzvi01','bbkmysql','truzvi01db');
 if($link === false){

        die("ERROR: Could not connect. Please contact NHS " . mysqli_connect_error());
    } 	

// Admin update panel
$password ="";
$status ="";
$last_name ="";
$first_name ="";
$gender ="";
$dob ="";
$birth_place ="";
$home_address ="";
$city ="";
$county ="";
$postcode =""; 
$email="";
$telephone ="";
$user_type=""; 
$user_id = 0;
$update = false;
// initialize variable
	if (isset($_POST['update'])) {
	$user_id = $_POST['user_id'];
	$status = $_POST['status'];
    $last_name = $_POST['last_name'];
    $first_name = $_POST['first_name'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $birth_place = $_POST['birth_place'];
    $home_address = $_POST['home_address'];
    $city = $_POST['city'];
    $county = $_POST['county'];
    $postcode = $_POST['postcode'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $user_type = $_POST['user_type'];
	mysqli_query($link, "UPDATE patients SET status='$status',last_name='$last_name',first_name='$first_name',gender='$gender',dob='$dob',birth_place='$birth_place',home_address='$home_address',city='$city',county='$county',postcode='$postcode',email='$email',telephone='$telephone',user_type='$user_type' WHERE user_id=$user_id");
	$_SESSION['message'] = "USER UPDATED!"; 
	header('location: admin-panel.php');
}

// Updating the User
if (isset($_GET['update_user'])) {
    $user_id = $_GET['update_user'];
    mysqli_query($link, "UPDATE patients SET activated='0'  WHERE user_id='$user_id'");
    $_SESSION['message'] = "USER ACTIVATED!"; 
    header('location: admin-panel.php');
}

// Block the User
if (isset($_GET['block'])) {
    $user_id = $_GET['block'];
    mysqli_query($link, "UPDATE patients SET activated='1'  WHERE user_id='$user_id'");
    $_SESSION['message'] = "USER BLOCKED!"; 
    header('location: admin-panel.php');
}

//Admin delete panel
if (isset($_GET['delete'])) {
    $user_id = $_GET['delete'];
    mysqli_query($link, "DELETE FROM patients WHERE user_id=$user_id");
    $_SESSION['message'] = "USER DELETED!"; 
    header('location: admin-panel.php');
}

//Changing Password
if (isset($_POST['submit'])){
    $old_password = mysqli_real_escape_string($link, $_POST['old_password']);
    $new_password = mysqli_real_escape_string($link, $_POST['new_password']);
    $confirm_password = mysqli_real_escape_string($link, $_POST['confirm_password']);
    $username = mysqli_real_escape_string($link, $_SESSION['username']);
    if ($new_password != $confirm_password) {
        $_SESSION['error_message'] = "PASSWORD DONT MATCH!";
         header('Location: user-panel.php'); 
    }
    if (count($_POST)>0){
        $new_password = md5($new_password);
        (mysqli_query($link, "UPDATE patients SET password='$new_password',confirm_password='$confirm_password'  WHERE username='$username'"));
        $_SESSION['message'] = "PASSWORD CHANGED!"; 
         header('Location: user-panel.php');
    }
    else
    {
          echo "ERROR IN CHANGING THE PASSWORD";
    }
    mysqli_close($link);
}


$password ="";
$status ="";
$last_name ="";
$first_name ="";
$gender ="";
$home_address ="";
$city ="";
$county ="";
$postcode =""; 
$email="";
$telephone ="";
$user_type=""; 
$username="";

if (isset($_POST['updating'])){
  // receive all input values from the form
 $status = mysqli_real_escape_string($link, $_POST['status']);
 $last_name = mysqli_real_escape_string($link, $_POST['last_name']);
 $first_name = mysqli_real_escape_string($link, $_POST['first_name']);
 $gender = mysqli_real_escape_string($link, $_POST['gender']);
 $home_address = mysqli_real_escape_string($link, $_POST['home_address']);
 $city = mysqli_real_escape_string($link, $_POST['city']);
 $county = mysqli_real_escape_string($link, $_POST['county']);
 $postcode =  mysqli_real_escape_string($link, $_POST['postcode']);
 $email = mysqli_real_escape_string($link, $_POST['email']);
 $telephone = mysqli_real_escape_string($link, $_POST['telephone']);
 $user_type = mysqli_real_escape_string($link, $_POST['user_type']);
 $file_1 = mysqli_real_escape_string($link, $_FILES['file_1']['tmp_name']);
 $file_2 = mysqli_real_escape_string($link, $_FILES['file_2']['tmp_name']);
 $upload_image= mysqli_real_escape_string($link, $_FILES['upload_image']['tmp_name']);  
 // Storing images in  template
   $uploads_dir ="uploaded_files";
   $file_1_name = $_FILES['file_1']['name'];
   $file_2_name = $_FILES['file_2']['name'];
   $uploaded_image_name = $_FILES['upload_image']['name'];

   move_uploaded_file($file_1, "uploaded_files/$file_1_name");
   move_uploaded_file($file_2, "uploaded_files/$file_2_name");
   move_uploaded_file($upload_image, "uploaded_files/$uploaded_image_name");

  // Finally, register user if there are no errors in the form
 if (count($_POST)>0) {
   (mysqli_query($link, "UPDATE patients SET status='$status',last_name='$last_name',first_name='$first_name',gender='$gender',home_address='$home_address',city='$city',county='$county',postcode='$postcode',email='$email',telephone='$telephone',user_type='$user_type' WHERE username=$username"));
    $_SESSION['message'] = "USER UPDATED!"; 
    $_SESSION['status'] = $_POST['status'];
    $_SESSION['last_name'] = $_POST['last_name'];
    $_SESSION['first_name'] = $_POST['first_name'];
    $_SESSION['gender'] = $_POST['gender'];
    $_SESSION['home_address'] = $_POST['home_address'];
    $_SESSION['city'] = $_POST['city'];
    $_SESSION['county'] = $_POST['county'];
    $_SESSION['postcode'] = $_POST['postcode'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['telephone'] = $_POST['telephone'];
    $_SESSION['file_1'] = $_POST['file_1'];
    $_SESSION['file_2'] = $_POST['file_2'];
    $_SESSION['upload_image'] = $_POST['upload_image'];
   header('Location: user-panel.php');
  }
}
?>


























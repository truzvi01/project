<?php
session_start();
//initializing variables
$username = "";
$password ="";  
$confirm_password ="";
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
$file_1 ="";
$file_2 ="";
$upload_image="";
$data_errors = array();
// connect to the database
 $link = mysqli_connect('mysqlsrv.dcs.bbk.ac.uk','truzvi01','bbkmysql','truzvi01db');

//$link = mysqli_connect('localhost', 'root','root','tottenham_hale_london');
if($link === false){

        die("ERROR: Could not connect. Please contact NHS " . mysqli_connect_error());
 } 
// REGISTER USER
if (isset($_POST['submit'])){
  // receive all input values from the form
 $username = mysqli_real_escape_string($link, $_POST['username']);
 $password = mysqli_real_escape_string($link, $_POST['password']);
 $confirm_password = mysqli_real_escape_string($link, $_POST['confirm_password']);
 $status = mysqli_real_escape_string($link, $_POST['status']);
 $last_name = mysqli_real_escape_string($link, $_POST['last_name']);
 $first_name = mysqli_real_escape_string($link, $_POST['first_name']);
 $gender = mysqli_real_escape_string($link, $_POST['gender']);
 $dob = mysqli_real_escape_string($link, $_POST['dob']);
 $birth_place = mysqli_real_escape_string($link, $_POST['birth_place']);
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
//Form validation: ensure that the form is correctly filled 
  //Username
  if (empty($username)) { array_push($data_errors, "*Username is required!"); }
  if (!preg_match('/^[a-zA-Z0-9 ]*$/',$username)) {
      array_push($data_errors, "*Invalid Username format!");
      }    
 if (empty($password)) { array_push($data_errors, "*Password is required!"); }
  if ($password != $confirm_password) {
   array_push($data_errors, "*The two passwords do not match!");
   }
  //Status
  if (empty($status)) { array_push($data_errors, "*Please fill in your status!"); }
  //Last name
  if (empty($last_name)) { array_push($data_errors, "*Last Name is required!"); }
  if (!preg_match("/^[a-zA-Z ]*$/",$last_name)) {
      array_push($data_errors, "*Invalid Last name format!");
      }
  // First name
  if (empty($first_name)) { array_push($data_errors, "*First Name is required!"); }
  elseif  ($username == $first_name) {
      array_push($data_errors, "*Name and Username can not be the same!");}
  if (!preg_match("/^[a-zA-Z ]*$/",$first_name)) {
      array_push($data_errors, "*Invalid First name format!");
      }    
   //Gender
  if (empty($gender)) { array_push($data_errors, "*Gender is required!"); }
  // DOB
  if (empty($dob)) { array_push($data_errors, "*Date of birth is required!"); }
  
  //Country of birth
  if (empty($birth_place)) { array_push($data_errors, "*Birth Place is required!"); }
  if (!preg_match("/^[a-zA-Z, ]*$/",$birth_place)) {
      array_push($data_errors, "*Invalid country birth format!");
      }
  // Home address
  if (empty($home_address)) { array_push($data_errors, "*Home address is required!"); }
  if (!preg_match("/^[a-zA-Z0-9, ]*$/",$home_address)) {
      //array_push($data_errors, "*Invalid Home address format!");
      }
  //City
  if (empty($city)) { array_push($data_errors, "*City is required"); }
  if (!preg_match("/^[a-zA-Z ]*$/",$city)) {
      array_push($data_errors, "*Invalid City format!");
      }
  //County
  if (empty($county)) { array_push($data_errors, "*County is required!"); }
  if (!preg_match("/^[a-zA-Z ]*$/",$county)) {
      array_push($data_errors, "*Invalid County format!");
      }
  //Postcode
  if (empty($postcode)) { array_push($data_errors, "*Postcode is required!"); }
  if (!preg_match("/^[a-zA-Z0-9 ]*$/",$postcode)) {
      array_push($data_errors, "*Invalid Postcode format!");
      }
  //Email
  if (empty($email)) { array_push($data_errors, "*Email is required!"); }
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  array_push($data_errors, "*Invalid email format");
      }

  // Telephone
  if (empty($telephone)) { array_push($data_errors, "*Telephone is required!"); }
   if (!preg_match('/^[0-9]*$/',$telephone)){
      array_push($data_errors, "*Invalid telephone format");
   }
  //Files
  if (empty($file_1)) { array_push($data_errors, "*File required!"); }
  if (empty($file_2)) { array_push($data_errors, "*File is required!"); }
  if (empty($upload_image)) { array_push($data_errors, "*Image is required!"); }

  //Check the database to make sure if user's email or username already exists
  $check_query = "SELECT * FROM patients WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($link, $check_query);
  $user = mysqli_fetch_assoc($result);
  // if user exists
  if ($user){
    if ($user['username'] === $username) {
      array_push($data_errors, "*Username already exists");  
    }
    // if user email
    if ($user['email'] === $email) {
      array_push($data_errors, "*Email already exists");   
    }
  }
  // Finally, register user if there are no errors in the form
 if (count($data_errors) == 0) {
    $password = md5($password);
    $query = "INSERT into patients (username,password,confirm_password,status,last_name,first_name,gender,dob,birth_place,home_address,city,county,postcode,email,telephone,user_type,file_1,file_2,upload_image)values('$username','$password','$confirm_password','$status','$last_name','$first_name','$gender','$dob','$birth_place','$home_address','$city','$county','$postcode','$email','$telephone','$user_type','$file_1_name','$file_2_name','$uploaded_image_name')";
   mysqli_query($link, $query); 
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['status'] = $_POST['status'];
    $_SESSION['last_name'] = $_POST['last_name'];
    $_SESSION['first_name'] = $_POST['first_name'];
    $_SESSION['gender'] = $_POST['gender'];
    $_SESSION['dob'] = $_POST['dob'];
    $_SESSION['birth_place'] = $_POST['birth_place'];
    $_SESSION['home_address'] = $_POST['home_address'];
    $_SESSION['city'] = $_POST['city'];
    $_SESSION['county'] = $_POST['county'];
    $_SESSION['postcode'] = $_POST['postcode'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['telephone'] = $_POST['telephone'];
    $_SESSION['file_1'] = $_POST['file_1'];
    $_SESSION['file_2'] = $_POST['file_2'];
    $_SESSION['upload_image'] = $_POST['upload_image'];
   header('Location: success.php');
  }
}
?>


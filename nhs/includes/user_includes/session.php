<?php 
  session_start(); 
  $old_password=$_POST['old_password'];
    $new_password=$_POST['new_password'];
    $confirm_password=$_POST['confirm_password'];
    $data_errors = array();
    $link = mysqli_connect('mysqlsrv.dcs.bbk.ac.uk','truzvi01','bbkmysql','truzvi01db');
    //$link = mysqli_connect('localhost', 'root','root','tottenham_hale_london');
      if($link === false){

        die("ERROR: Could not connect. Please contact NHS " . mysqli_connect_error());
    } 
    $check_query = "SELECT * FROM patients WHERE username='$username'";
    $results = mysqli_query($link, $check_query);
    $row = mysqli_fetch_assoc($results);
    $old_password_db = $row['password'];
    if ($old_password==$old_password_db){
    if ($new_password==$confirm_password){
      $change_query = "UPDATE patients SET password='$new_password' WHERE username='$username'";
      $change_results = mysqli_query($link, $change_query);
       header('Location: success.php');
    }
    if ($old_password!=$old_password_db){
                array_push($data_errors, "*Password doesn't match with old password");}
                if ($password != $confirm_password) {
                array_push($data_errors, "*The two passwords do not match!");
              }
        }
?>
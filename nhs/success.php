<?php 
  session_start();
  if (!isset($_SESSION['username'])){
  	header('location: index.php');
  }
 ?>
 <?php include'views/user_views/header.php';?>
 <div class="success-msg">
 	<p><i class="fa fa-check"></i>YOU HAVE SUCCSSEFULLY REGISTERED! PLEASE WAIT FOR 24HRS TO ACTIVATE YOUR ACCOUNT </p>
 </div>
 <?php include_once'views/user_views/footer.php';?>
 <?php include_once'views/user_views/script.php';?>  

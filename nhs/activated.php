<?php 
  session_start();
  if (!isset($_SESSION['username'])){
  	header('location: index.php');
  }
 ?>
 <?php include'views/user_views/header.php';?>
 <div class="error-msg">
  <p><i class="fa fa-times-circle fa_custom fa-2x"></i>YOUR  ACCOUNT IS NOT YET APPROVED! PLEASE WAIT FOR AN ADMIN TO UPDATE YOUR ACCOUNT OR CONTACT NHS FOR ANY QUERIES. THANK YOU!</p>
</div>
 <?php include_once'views/user_views/footer.php';?>
 <?php include_once'views/user_views/script.php';?>  

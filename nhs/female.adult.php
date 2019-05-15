<?php  
     include'views/gp_views/gp.nav.php';
     session_start();
     $link = mysqli_connect('mysqlsrv.dcs.bbk.ac.uk','truzvi01','bbkmysql','truzvi01db');
   $sql = "SELECT * from patients where gender='Female' AND user_type='Adult' AND activated='0'";
    $result = mysqli_query($link,$sql);   
?>
<!-- Middle Side Nav Bar -->
<div id="header">
    <h1><strong>Female Adult Panel</strong></h1>
</div>
<?php  include'views/gp_views/gp.female.links.php';?>
<?php  include'views/gp_views/gp.table.php';?>
<?php include'views/gp_views/gp.male.pages.php';?>
<!-- End of Side Nav Bar -->
<?php include_once'views/admin_views/admin.footer.php';?>  

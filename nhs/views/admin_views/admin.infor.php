<div id=image>
<img src="uploaded_files/<?php echo $_SESSION['uploaded_image']; ?>" class="img-circle" width="200px"  height="200px" alt="user-image" />
</div>
<!-- Middle Side Nav Bar -->
<div class="admin_header">
      <h1><strong>Welcome <?php echo $_SESSION["first_name"]."  ".$_SESSION["last_name"]; ?></strong></h1>
</div>
<?php  include'views/admin_views/female_links.php';?> 
                <!-- Middle Content -->
                <div class="col-sm-8 text-center" style="background-color: #e6e6e6; height:450px;">
                    <div class="admin_header"><h2><strong>Admin's Note!</strong></h2>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                        officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed
                        do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                        minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                        ea commodo consequat.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                        officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed
                        do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                        minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                        ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>

                </div>
                 <?php include'views/admin_views/male_pages.php';?>
                <!-- End of Side Nav Bar -->
                <?php include_once'views/admin_views/admin.footer.php';?>            
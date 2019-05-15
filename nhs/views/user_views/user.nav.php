<div class="container-fluid">
            <div class="row content">
                <div class="well">
                    <h1>Welcome <?php echo $_SESSION["status"]."  ".$_SESSION["first_name"]."  ".$_SESSION["last_name"]; ?></h1><br>
                </div>
                <?php if (isset($_SESSION['message'])): ?>
                    <div class="update_msg">
                        <?php 
                        echo $_SESSION['message'];
                        unset($_SESSION['message']);
                        ?>   
                        </div>
                    <?php endif ?>
                    <?php if (isset($_SESSION['error_message'])): ?>
                     <div class="error-msg">
                        <i class="fa fa-times-circle"></i>
                        <?php 
                        echo $_SESSION['error_message']; 
                        unset($_SESSION['error_message']);
                        ?>
                        </div>
                    <?php endif ?>
                    <div class="col-sm-3 sidenav">
                    <ul class="nav nav-pills nav-stacked">
                        <li><a href="user-panel.php">My Profile</a><hr /></li>
                        <button onclick="document.getElementById('update_details').style.display='block'">Update Details</button>
                        <button onclick="document.getElementById('different_gp').style.display='block'">Register with a different Practitioner</button>
                        <button onclick="document.getElementById('change_password').style.display='block'">Change Password</button> 
                    </ul>
                </div>
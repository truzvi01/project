 <!-- Login header  -->
        <div class="header-two">
            <h2>General Practitioner Page!</h2>
        </div>
        <!-- Login wrapper  -->
        <div id="login-wrapper">
            <h3>NHS General Practitioner Login</h3>
            <div id="login">
                <img src="images/gp-image.jpg" alt="admin-icon" />
                <!-- Login form -->
                <form id="login-form" action="gp-login.php" method="post">
                    <?php include('errors.php'); ?>
                    <!-- Username -->
                    <label for="uname"><br /><br /><span class="glyphicon glyphicon-user"
                        ></span> General Practitioner ID </label>
                    <input type="text" placeholder="Enter Username" id="uname" name="username"
                         />
                    <!-- Password -->
                    <label for="psw"><br /><span class="glyphicon glyphicon-lock"
                        ></span> Password </label>
                    <input type="password" placeholder="Enter Password" id="psw" name="password"
                        />
                    <!-- Login -->
                    <input type="submit" value="Login" name="submit" />
                </form>
            </div>
        </div>
<div class="header-two">
            <h2>Welcome to Patient Login Access!</h2>
        </div>
         <?php include('errors.php'); ?>
        <!-- Login wrapper  -->
        <div id="login-wrapper">
            <div id="nhs-logo">
                <h3><img src="images/nhs-logo.jpg" alt="Nhs-Logo" />Patient Login</h3>
            </div>
            <div id="login">
                <img src="images/user.jpeg" alt="login-image" />
                <p>This system can only be accessed by authorised users. If you can't log in please
                    contact us on this link <a href="contact.php">contact us </a> or you can
                    register by clicking this link <a href="register.php">register!</a></p>
                <!-- Login form -->
                <form id="login-form" action="login.php" method="post">
                    <!-- Username -->
                    <label for="uname"><span class="glyphicon glyphicon-user"></span> Username </label>
                    <input type="text" id="uname" name="username" placeholder="Enter Username"
                         />
                    <!-- Password -->
                    <label for="psw"><br /><span class="glyphicon glyphicon-lock"></span>
                        Password</label>
                    <input type="password" id="psw" name="password" placeholder="Enter Password"
                         />
                    <!-- Login -->
                    <button type="submit" name="submit">Login</button>
                    <!-- Remember me -->
                    <label><input type="checkbox" name="remember" /> Remember me</label>
                    <!-- Forgot username and password -->
                    <span class="psw">Forgot <a href="forgot.password.php">password?</a></span>
                    <span class="username">Forgot <a href="forgot.username.php">username?</a></span>
                </form>
            </div>
        </div>
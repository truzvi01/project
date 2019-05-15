<?php  include('php_code.php'); ?>
<!-- Forgot Password -->
        <div id="change_password" class="modal">
            <form method="POST" action="php_code.php">
                <!-- Username -->
                <label for="Username"><br />Username:</label>
                <input type="text" name="username" 
                  placeholder="Enter username"   /><br />
                <!-- Old Password -->
                <label for="password"><br />Old Password:</label>
                <input type="password" name="old_password" 
                  placeholder="Old Password"   /><br />
               <!-- New Password -->
               <label for="new_password"><br/>New Password:</label>
                <input type="password"  name="new_password" placeholder="New Password"/><br />
                <!-- Confirm Password -->
                <label for="confirm_password"><br/>Confirm Password:</label>
                <input type="password"  name="confirm_password" placeholder="Confirm Password"/><br /> 
                <!-- Submit -->
                <input type="submit" value="Change password" name="change_password"/>
            </form>     
        </div>

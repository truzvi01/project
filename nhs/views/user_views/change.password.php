<!-- Forgot Password -->
 <div id="change_password" class="modal">   
            <form class="modal-content animate" method="post" action="php_code.php">
                <div class="user_image">
                    <span onclick="document.getElementById('change_password').style.display='none'" class="close" title="Close Modal">&times;</span>
                </div>
                <!-- Old Password -->
                <label for="password"><br />Old Password:</label>
                <input type="password" name="old_password" 
                  placeholder="Old Password" required /><br />
               <!-- New Password -->
               <label for="new_password"><br/>New Password:</label>
                <input type="password"  name="new_password" placeholder="New Password" required /><br />
                <!-- Confirm Password -->
                <label for="confirm_password"><br/>Confirm Password:</label>
                <input type="password"  name="confirm_password" placeholder="Confirm Password" required /><br /> 
                <!-- Submit -->
                <input type="submit" value="Change password" name="submit"/>
            </form>     
        </div>
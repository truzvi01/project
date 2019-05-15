<!-- Forgot Password -->
        <div id="change_password" class="modal">
            <form class="modal-content animate" action="success.php">
                <div class="user_image">
                    <span onclick="document.getElementById('change_password').style.display='none'" class="close" title="Close Modal">&times;</span>
                </div>
                 <?php include('errors.php'); ?>
                <!-- Password -->
                <label for="password"><br />Old Password:</label>
                <input type="password" name="old_password" 
                  placeholder="Old Password"   /><br />
                <label for="confirm_password"><br/>New Password:</label>
                <input type="password"  name="new_password" placeholder="New Password"/><br />
                <label for="confirm_password"><br/>Confirm Password:</label>
                <input type="password"  name="confirm_password" placeholder="Confirm Password"/><br /> 
                <input type="submit" value="Change password" name="change_password"/>
            </form>     
        </div>
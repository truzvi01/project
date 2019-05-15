<div id="login_form">
<form method="post" action="php_code.php" >
        <h1> Patient Updating Details </h1>
        <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
            <!--Status -->
            <label>Status</label>
            <input type="text" name="status" value="<?php echo $status; ?>" ><br>
            <!--Last Name-->
            <label><br/>Last Name</label>
            <input type="text" name="last_name" value="<?php echo $last_name; ?>"><br/>
            <!--First Name-->
            <label><br/>First Name</label>
            <input type="text" name="first_name" value="<?php echo $first_name; ?>" ><br/>
            <!--Gender-->
            <label><br/>Gender</label>
            <input type="text" name="gender" value="<?php echo $gender; ?>"><br/>
            <!--DOB-->
            <label><br/>Date of Birth</label>
            <input type="text" name="dob" value="<?php echo $dob; ?>"><br/>
            <!--Birth Place-->
            <label>Birth Place</label>
            <input type="text" name="birth_place" value="<?php echo $birth_place; ?>"><br>
            <!--Home Address-->
            <label><br/>Home Address</label>
            <input type="text" name="home_address" value="<?php echo $home_address; ?>"><br/>
            <!--City-->
            <label><br/>City</label>
            <input type="text" name="city" value="<?php echo $city; ?>"><br/>
            <!--County-->
            <label><br/>County</label>
            <input type="text" name="county" value="<?php echo $county; ?>"><br/>
            <!--Postcode-->
            <label><br/>Postcode</label>
            <input type="text" name="postcode" value="<?php echo $postcode; ?>"><br/>
            <!--Email-->
            <label><br/>Email</label>
            <input type="text" name="email" value="<?php echo $email; ?>"><br/>
            <!--Telephone-->
            <label><br/>Telephone</label>
            <input type="text" name="telephone" value="<?php echo $telephone; ?>"><br/>
            <!--User Type-->
            <label><br/>User Type</label>
            <input type="text" name="user_type" value="<?php echo $user_type; ?>"><br/>
            <!--Update-->
            <div class="input-group">
            <?php if ($update == true): ?>
                <button class="btn" type="submit" name="update" >Update</button>
            <!--Save-->
            <?php endif ?>
        </div>
    </form>
</div>
</body>
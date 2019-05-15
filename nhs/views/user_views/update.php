<div id="update_details" class="modal">
            <form class="modal-content animate" method="post" action="php_code.php">
                <div class="user_image">
                    <span onclick="document.getElementById('update_details').style.display='none'" class="close" title="Close Modal">&times;</span>
                    <img src="uploaded_files/<?php echo $_SESSION['uploaded_image']; ?>" class="img-circle" width="200px"; height="200px"; alt="User-image" />
                </div>
                <!-- Username -->
               <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
            <!-- Status -->
                <label for="mr"><br />Mr</label>
                <input type="radio" id="mr" name="status" value="Mr"  />
                <label for="mrs">Mrs</label>
                <input type="radio" id="mrs" name="status" value="Mrs"  />
                <label for="miss">Miss</label>
                <input type="radio" id="miss" name="status" value="Miss" />
                <label for="ms">Ms</label>
                <input type="radio" id="ms" name="status" value="Ms" /><br />
               
            <!--Last Name-->
            <label><br/>Last Name</label>
            <input type="text" name="last_name" value="<?php echo $last_name; ?>"><br/>
            <!--First Name-->
            <label><br/>First Name</label>
            <input type="text" name="first_name" value="<?php echo $first_name; ?>" ><br/>
            <!--Gender-->
             <p class="info"><br />Gender: <label for="male">Male</label>
                    <input type="radio"  name="gender" value="Male" />
                    <label for="male">Female</label>
                    <input type="radio" name="gender" value="Female" 
                     /></p>
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
           <!--Registration Owner -->
                <p class="info"><br />Are you registering as an adult or on behalf of your child?</p>
                   <select name="user_type">
                    <option value="adult">Adult</option>
                    <option value="child">Child</option>
                </select><br /> 
                <!-- Upload files -->
                <p class="info"><br />Upload files:</p>
                <input type="file" id="upload_1" name="file_1" />
                <input type="file" id="upload_2" name="file_2"/>
                <p class="info"><br />Upload your Image:</p>
                <input type="file" id="upload_3" name="upload_image"/><br/>
                <input type="submit" value="Update" name="updating"/>

        </div>
    </form>
</div>
              

<!-- Reg- Welcome-Header-->
        <div class="header-two">
            <h2>Welcome to the Patient Registration Page!</h2>
        </div>
        <!-- End of Reg-header -->
        <?php  include'errors.php';?>
        <!-- Registration Information -->
        <div id="registration-info">
            <h3>What is Online Registration</h3>
            <p>Many GPs offer online services to their patients. All GPs should provide their
                patients with online registration at a local General Practioner.</p>
            <p>Online services do not replace traditional ways of contacting your GP practice, over
                the phone or in person. They simply offer additional ways to interact with your GP,
                making it easier and more convenient. For example, you can register your details
                with a GP online and your details get to the local Practice faster without the need
                of registering at the local Practice. You can also update your information in your
                registered account.</p>
            <h4>How do I register with a GP?</h4>
            <p>If you wish to access to the NHS, you'll need to register first. Register by just
                filling in your details online on the registration form and submit to us or
                alternatively, you can choose to register at your local practice. If you choose to
                register online, you will need to create your own account first that you will be
                using for updating your information in future. You can either register as an adult
                or on behalf of your child. You will recieve a confirmation email of your submission
                and after atleast 24hrs and you will also recieve an email if your registration has
                been accepted.</p>
        </div>
        <!-- Registration Form -->        
        <div id="registration-form">
            <!-- Registration-Logo,Information and Header -->
            <h5><img src="images/nhs-logo.jpg" alt="Nhs-Logo" />Patient Online Registration Form</h5>
            <div id="reg-requirements">
                <p>If you are already registered please access your account by clicking this link  <a href="login.php">login</a><br/>To complete the registration you will need to upload the following:</p>
                <ol>
                    <li><strong>Photo ID:</strong><br />Like passport or driver's license</li>
                    <li><strong>Proof of an address:</strong><br />A bill with less than 3 months (
                        gas, electricty or council tax)</li>
                </ol>
            </div>
            <h6>Patient Details</h6>
            <form method="POST" action="register.php" onsubmit="return Validate()" name="register" enctype="multipart/form-data">
                
                <!-- Username -->    
                <p><br />(Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters)</p>
                <div id="username_div">
                    <label>Username</label> <br>
                    <input type="text" name="username" class="textInput" placeholder="Create Username...."
                    value="<?php if (isset($_POST['username'])){echo $_POST['username'];}?>">
                    <div id="username_error"></div>
                </div>
                <p><br />(Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters)</p>
                <!-- Password -->  
                <div id="password_div">
                    <label>Password</label> <br>
                    <input type="password" name="password" class="textInput" id="password" placeholder="Create Password..." value="<?php if (isset($_POST['password'])){echo $_POST['password'];}?>">
                </div>
                <div id="message">
                    <h3>Password must contain the following:</h3><p id="letter" class="invalid">A <b>lowercase</b> letter</p><p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p><p id="number" class="invalid">A <b>number</b></p><p id="length" class="invalid">Minimum <b>8 characters</b></p></div>
                <!-- Confirm Password --> 
                <p><br />(Confirm your password with the one you entered)</p>
                <div id="confirm_password_div">
                    <label>Password confirm</label> <br>
                    <input type="password" name="confirm_password" class="textInput" id="confirm_password" placeholder="Confirm your password..." value="<?php if (isset($_POST['confirm_password'])){echo $_POST['confirm_password'];}?>">
                    <div id="password_error"></div>
                </div>

                <!-- Status --> 
                <div id="status">
                    <p><br />Status:</p>
                    <select name="status"  value="<?php if (isset($_POST['status'])){echo $_POST['status'];}?>"><?php echo $data_errors ?>
                        <option value="Mr">Mr</option>
                        <option value="Mrs">Mrs</option>
                        <option value="Miss">Miss</option>
                        <option value="Ms">Ms</option>
                    </select>
                </div>
                <!-- Last Name --> 
                <p><br />(Your last name must contain only letters)</p>
                <div id="lastname_div">
                    <label>Last Name</label><br />
                    <input type="text" name="last_name" class="textInput" placeholder="Enter your last name...." value="<?php if (isset($_POST['last_name'])){echo $_POST['last_name'];}?>">
                    <div id="lastname_error"></div>
                </div>
                <!-- First Name --> 
                <p><br />(Your first name must contain only letters)</p>
                <div id="firstname_div">
                 <label>First name</label><br />
                 <input type="text" name="first_name" class="textInput" placeholder="Enter your name...." value="<?php if (isset($_POST['first_name'])){echo $_POST['first_name'];}?>"><br />
                 <div id="firstname_error"></div>
             </div>
             <!-- Gender --> 
                <div id="gender">
                    <p><br />Gender:</p>
                    <select name="gender" value="<?php if (isset($_POST['gender'])){echo $_POST['gender'];}?>"><?php echo $data_errors ?>
                        <option value="Female">Female</option>
                        <option value="Male">Male</option>
                    </select><br /><br>
                </div>
                <!-- Date of Birth --> 
                <p><br />(Please enter a valid date of birth)</p>
                <div id="dob_div">
                 <label>Date of Birth</label><br />
                 <input type="date" name="dob" class="textInput" value="<?php if (isset($_POST['dob'])){echo $_POST['dob'];}?>"><br><br>
                 <div id="dob_error"></div>
             </div>
             <!-- Country of Birth --> 
                 <p><br />(Enter your town you were born in and the country you were born at)</p>
                <div id="birthplace_div">
                 <label>Town and Country of birth:</label><br />
                 <input type="text" name="birth_place" class="textInput" placeholder="Enter your birth place...." value="<?php if (isset($_POST['birth_place'])){echo $_POST['birth_place'];}?>"><br><br>
                 <div id="birthplace_error"></div>
             </div> 
             <!-- Home Address --> 
                 <p><br />(Enter your UK home address exclude the city, county and postcode)</p>
                <div id="homeaddress_div">
                 <label>Home Address:</label><br />
                 <input type="text" name="home_address" class="textInput" placeholder="Enter your home address...." value="<?php if (isset($_POST['home_address'])){echo $_POST['home_address'];}?>"><br><br>
                 <div id="homeaddress_error"></div>
             </div>
             <!-- City -->
             <div id="city_div">
                 <label>City:</label><br />
                 <input type="text" name="city" class="textInput" placeholder="Enter your city..." value="<?php if (isset($_POST['city'])){echo $_POST['city'];}?>"><br><br>
                 <div id="city_error"></div>
             </div>
             <!-- County -->
             <div id="county_div">
                 <label>County:</label><br />
                 <input type="text" name="county" class="textInput" placeholder="Enter your county..." value="<?php if (isset($_POST['county'])){echo $_POST['county'];}?>"><br><br>
                 <div id="county_error"></div>
             </div>
             <!-- Postcode-->
             <div id="postcode_div">
                 <label>Postcode:</label><br />
                 <input type="text" name="postcode" class="textInput" placeholder="Enter your postcode..."
                 value="<?php if (isset($_POST['postcode'])){echo $_POST['postcode'];}?>"><br><br>
                 <div id="postcode_error"></div>
             </div>
             <!-- Email-->
             <div id="email_div">
                <label>Email:</label> <br>
                <input type="email" name="email" class="textInput" placeholder="Enter your email..." value="<?php if (isset($_POST['email'])){echo $_POST['email'];}?>"><br><br>
                <div id="email_error"></div>
            </div>
            <!-- Telephone-->
             <div id="telephone_div">
                <label>Telephone:</label><br>
                <input type="tel" name="telephone" class="textInput"  placeholder="Enter your telephone..." value="<?php if (isset($_POST['telephone'])){echo $_POST['telephone'];}?>"><br><br>
                <div id="telephone_error"></div>
            </div>
            <!--Registration Owner -->
            <div id="user_type">
                <p>Are you registering as an adult or on behalf of your child?</p>
                <select name="user_type"  value="<?php if (isset($_POST['user_type'])){echo $_POST['user_type'];}?>">
                    <option value="Toddler">Toddler</option>
                    <option value="Child">Child</option>
                    <option value="Teenager">Teenager</option>
                    <option value="Adult">Adult</option>
                </select><br /><br>
            </div>
            <!--Upload Files -->
            <p><br />(In order to be fully registered you need to provide evidences. On this section you need to upload three files. One file that contains your proof of ID, One file that contains your proof of Address and Your Image)</p><br />
            <div id="file1_div">
                <label>Upload proof of ID:</label> <br>
                <input type="file" id="upload_1" name="file_1" class="textInput" value="<?php if (isset($_POST['file_1'])){echo $_POST['file_1'];}?>">
                <div id="file1_error"></div>
            </div> 
            <div id="file2_div">
                <label><br />Upload proof of an Address:</label> <br>
                <input type="file" id="upload_2" name="file_2" class="textInput" value="<?php if (isset($_POST['file_2'])){echo $_POST['file_2'];}?>">
                <div id="file2_error"></div>
            </div> 
            <div id="uploadimage_div">
                <label><br />Upload proof of an Address:</label> <br>
                <input type="file" id="upload_3" name="upload_image" class="textInput" value="<?php if (isset($_POST['upload_image'])){echo $_POST['upload_image'];}?>">
                <div id="uploadimage_error"></div>
            </div><br/><br />
            <p>By creating an account you agree to our <a href="#" style="color:dodgerblue"
                        >Terms and Privacy</a>.</p>
                <div>
                    <input type="submit" name="submit" value="Register" class="btn">
                </div>
            </form>
        </div>
         
 
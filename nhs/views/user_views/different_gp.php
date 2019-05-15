<!-- Different GP -->        
        <div id="different_gp" class="modal">
           <form class="modal-content animate" action="/action_page.php">
                <div class="user_image">
                    <span onclick="document.getElementById('different_gp').style.display='none'" class="close" title="Close Modal">&times;</span>
                    <div id="registration-form">
                    <h5>Patient Online Registration Form</h5>
                    <div id="reg-requirements">
                      <p>To complete the registration you will need to upload the following:</p>
                      <ol>
                        <li><strong>Photo ID:</strong><br />Like passport or driver's license</li>
                        <li><strong>Proof of an address:</strong><br />A bill with less than 3 months (gas, electricty or council tax)</li>
                      </ol>
                    </div>
                  </div>
                </div>
                <!-- Username -->
                <label for="uname"><br />User Name:</label>
                <input type="text" id="uname" name="username" placeholder="Create Username"
                     />
                 <br />
                <!-- Password -->
                <label for="password"><br />Password:</label>
                <input type="password" name="password" placeholder="Create Password"
                     /><br />
                <label for="confirm_password"><br />Confirm Password:</label>
                <input type="password"  name="confirm_password" placeholder="Confirm Password"
                   /><br />
                <!-- Status -->
                <label for="mr"><br />Mr</label>
                <input type="radio" id="mr" name="status" value="Mr"  />
                <label for="mrs">Mrs</label>
                <input type="radio" id="mrs" name="status" value="Mrs"  />
                <label for="miss">Miss</label>
                <input type="radio" id="miss" name="status" value="Miss" />
                <label for="ms">Ms</label>
                <input type="radio" id="ms" name="status" value="Ms" /><br />
                <!-- Last name -->
                <label for="lname"><br />Last Name:</label>
                <input type="text"  name="last_name" placeholder="Enter your last name..."
                    /><br />
                <!-- Fist name -->
                <label for="fname"><br />First Name:</label>
                <input type="text"  name="first_name" placeholder="Enter your name..."
                     /><br />
                <!-- Gender -->
                <p class="info"><br />Gender: <label for="male">Male</label>
                    <input type="radio"  name="gender" value="male" />
                    <label for="male">Female</label>
                    <input type="radio" name="gender" value="female" 
                     /></p>
                <!-- Date of birth -->
                <label for="dirth"><br />Date of birth:</label>
                <input type="date" data-polyfill="all" id="dbirth" name="dob"  /><br />
                <!-- Country of Birth -->
                <label for="cbirth"><br />Town and Country of birth:</label>
                <input type="text" name="country_birth"
                    placeholder="Enter your country of birth..." /><br />
                <!--Home Adress -->
                <label for="haddress"><br />UK Home Address:</label>
                <input type="text"  name="home_address"
                    placeholder="Enter your home address..."  /><br />
                <!--City -->
                <label for="city"><br />City:</label>
                <input type="text" name="city" placeholder="Enter your city..."
                   /><br />
                <!--County -->
                <label for="county"><br />County:</label>
                <input type="text" name="county" placeholder="Your county..."
                     /><br />
                <!--Postcode -->
                <label for="pcode"><br />Postcode:</label>
                <input type="text" name="postcode" placeholder="Enter your postcode...."
                     /><br />
                <!-- Email -->
                <label for="e-mail"><br />Email:</label><br />
                <input type="email" name="email_address"
                    placeholder="Enter your email..." /><br />
                <!--Telephone -->
                <label for="telphone"><br />Telephone Contact:</label>
                <input type="tel"  name="user_telephone" placeholder="Enter your telephone..."
                   /><br />
                <!--Registration Owner -->
                <p class="info"><br />Are you registering as an adult or on behalf of your child?</p>
                   <select name="user_type">
                    <option value="adult">Adult</option>
                    <option value="child">Child</option>
                </select><br />
                <!-- Upload files -->
                <p class="info"><br />Upload files:</p>
                <input type="file" id="upload_1" name="file_1" />
                <input type="file" id="upload_2" name="file_2"/><br/>
                 <p class="info"><br />Upload your Image:</p>
                <input type="file" id="upload_3" name="upload_image"/><br/>
                <input type="submit" value="Register" name="submit"/>
            </form>
        </div>

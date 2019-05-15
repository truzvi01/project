<!-- Middle Content -->
                <div class="col-sm-8">
                  <div id="image">
                  <img src="uploaded_files/<?php echo $_SESSION['uploaded_image']; ?>" class="img-circle" class="img-responsive"  width="200px" height="200px" alt="user-image"  />
                 </div>
                   <h2>Your registered details</h2>
                   <div id="user_details">
                    <br><strong style="color:#660000;" >Gender:</strong> <?php echo $_SESSION["gender"];?>
                        <br><strong style="color:#660000;">Date of birth:</strong style="color:#660000;"> <?php echo $_SESSION["dob"];?>
                        <br><strong style="color:#660000;">Birth country:</strong> <?php echo $_SESSION["birth_place"];?>
                        <br><strong style="color:#660000;">Home address:</strong> <?php echo $_SESSION["home_address"];?>
                        <br><strong style="color:#660000;">City:</strong> <?php echo $_SESSION["city"];?>
                        <br><strong style="color:#660000;">County:</strong> <?php echo $_SESSION["county"];?>
                        <br><strong style="color:#660000;">Postcode:</strong> <?php echo $_SESSION["postcode"];?>
                        <br><strong style="color:#660000;">Email address:</strong> <?php echo $_SESSION["email"];?>
                        <br><strong style="color:#660000;">Contact details:</strong> <?php echo $_SESSION["telephone"];?>
                    </div>
                </div>
            </div>
        </div>
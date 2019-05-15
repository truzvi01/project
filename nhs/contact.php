<?php  
    include'views/user_views/header.php';
?>
        <div class="header-two">
            <h2>Do you have any questions for us? </h2>
        </div>
        <div id="section">
            <p><strong>Send us an email, contact us or use the form
                    below and we will get back to you as soon as as possible!</strong></p>
        </div>
        <!-- Contact information -->
        <div id="contact-info">
            <p><strong>NHS email contact &#9993; </strong></p>
            <a href="mailto:helpdesk@nhs.net">Click to email us<i class="fa fa-envelope-square"
                ></i>helpdesk@nhs.net</a>
            <!-- Contact number -->
            <p><strong>NHS Phone Number &#9742;</strong></p>
            <a href="tel:03003112233">Click for Contact details<i class="fa fa-volume-control-phone"
                ></i>0300 311 22 33</a>
        </div>
        <!-- Contact-form-wrapper-->
        <div id="contact-wrapper">
            <h2>Please the form to send us a message</h2>
            <form action="contact.php" method="post" enctype="text/plain">
                <label for="fname"><br />First Name</label>
                <input type="text" id="fname" name="firstname" placeholder="Enter your name..."
                    required="required" /><br />
                <label for="e-mail"><br />Email</label>
                <input type="email" id="e-mail" name="email" placeholder="Enter your email..."
                    required="required" /><br />
                <div id="sub">
                    <label>Leave us a message</label>
                    <textarea class="form-control" rows="5" placeholder="Write your message"
                    ></textarea>
                </div>
                <input type="submit" value="Send" />
            </form>
        </div>
<?php  
    include_once'views/user_views/footer.php';
?>
 <?php  
    include_once'views/user_views/script.php';
?>        
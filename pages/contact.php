<?php 
    const TITLE = "Contact | Page 3 Book Club";

    include("../includes/header.php"); 
?>
        <hr>
        <div class="container">
            <h4>Get in touch with Admin if you have any problems, questions or requests.</h4>
            
            <?php

            //check for header injections
            function has_header_injection($str) {
                return preg_match( "/[\r\n]/", $str);
            }
                // checks to see if submit button was pressed
                if (isset ($_POST['contact_submit'])) {

                    $name    = trim($_POST['username']);
                    $email   = trim($_POST['email']);
                    $msg     = $_POST['message'];

                    //Check to see if $name or $email have header injections
                    if(has_header_injection($name) || has_header_injection($email)) {
                        die(); // If true, kill the script
                    }

                    // Validate the inputs are not empty
                    if( !$name || !$email || !$msg) {
                        echo '<h4 class="error">All fields required.</h4><a href="contact.php" class="button block">Go back and try again</a>';
                    }

                    //Add the recipient email to a variable -- change to admin email
                    $to = "jessica0greene@gmail.com";

                    $subject = "$name sent you a message via your contact form";

                    // Construct the message
                    $message = "Name: $name \r\n";
                    $message .= "Email: $email\r\n";
                    $message .= "Message: \r\n$msg";

                    $message = wordwrap($message, 72);

                    // Set the mail headers into a variable
                    $headers  = "MIME-Version: 1.0\r\n";
                    $headers .= "Contect-type: text/plain; charset=iso-8859-1\r\n";
                    $headers .= "From: $name <$email> \r\n";
                    $headers .= "X-Priority: 1\r\n";
                    $headers .= "X-MSMail-Priority: High\r\n\r\n";

                    // Send the email!
                    mail( $to, $subject, $message, $headers );


            ?>

                   <!-- show success message after email is sent -->
                    <h4> Thanks for contacting us!</h4>
                    <p><em>~ We're a small team but do our best to reply within 3-4 days. ~</em></p>
                    <p><a href="../index.php" class="button block">&laquo; Go to Home Page</a></p>

            <?php        
                } else {

            ?>


            <form method="post" action="" id="contact-form">

                <label for="uname">Name</label>
                <input type="text" id="uname" name="username" placeholder="Your Name..">

                <label for="email">Email</label>
                <input type="text" id="email" name="email" placeholder="Your Email..">

                <label for="message">Your message</label>
                <textarea id="name" name="message" style="height: 12rem;"></textarea>

                <input type="submit" class="" name="contact_submit" value="Send Message">

            </form>

            <?php

                }
            ?>
        </div>   

        <hr>
        <p class="Diplomata">'Diplomata'</p>
        <p class="Astloch">'Astloch'</p>
        <p class="MetalMania">'Metal Mania'</p>
        <p class="Barrio">'Barrio'</p>
        <p class="JollyLodger">'Jolly Lodger'</p>
        <p class="AutourOne">'Autour One'</p>
        <p class="Griffy">'Griffy'</p>
        <p class="Trade Winds">'Trade Winds'</p>
        <p class="HennyPenny">'Henny Penny'</p>
        <p class="Nosifer">'Nosifer'</p>
        <p class="UnifrakturCook">'UnifrakturCook'</p>
        <p class="BungeeShade">'Bungee Shade'</p>
        <p class="FingerPaint">'Finger Paint'</p>
        <p class="FasterOne">'Faster One'</p>
        <p class="Sofia">'Sofia'</p>
        <p class="IMFellEnglishSC">'IM Fell English SC'</p>
        <p class="Monofett">'Monofett'</p>
        <p class="GravitasOne">'Gravitas One'</p>
        <p class="Codystar">'Codystar'</p>
        <hr>

<?php 
    include("./includes/footer.php"); 
?>
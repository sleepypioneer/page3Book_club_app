<?php 
    session_start();
    // Check if user is logged in using the session variable
    if ( $_SESSION['logged_in'] != 1 ) {
      $_SESSION['message'] = "You must log in before viewing your profile page!";
      header("location: ../loginPages/error.php");    
    }
    const TITLE = "Add Books to Book List | Page 3 Book Club";

    include("../includes/header.php"); 
?>

  <div id="addBook">
            <hr>
    <?php

    //check for header injections
    function has_header_injection($str) {
        return preg_match( "/[\r\n]/", $str);
    }
        // checks to see if submit button was pressed
        if (isset ($_POST['addNotice_submit'])) {
            $headline      = trim($_POST['headline']);
            $content     = $_POST['content'];
            
            //Check to see if $name or $email have header injections
            if(has_header_injection($headline) || has_header_injection($content)) {
                die(); // If true, kill the script
            }

            //Need to make separate rules for coverImageUrl and length

            // Validate the inputs are not empty
            if( !$headline || !$content ) {
                echo '<h4 class="error">Starred fields are required.</h4><a href="addBook.php" class="button block">Go back and try again</a>';
            }

            $publisher = 1;
            $date      = "2018-02-13";
            
            include('./scripts/php/dbconnection.php');

            $query = "INSERT INTO notices(id, publisher, headline,content) VALUES('NULL', '".$publisher."', '".$headline."', '".$content."')";

            try{
                $run_query = mysqli_query($mysqli, $query);

                if($run_query){



    ?>

           <!-- show success message after book added is sent -->
            <p><strong> Thanks for adding to the notice board. </strong></p>
            <!-- Button to go back to notice board -->
            <a href="./noticeboard.php"><button class="btn outline">Back to Notice Board</button></a>
                   <hr>
                    

    <?php
                } else {
                    throw new Exception ("Notice not added");
                }

            }catch (Excpetion $e) {


    ?>  
            <!-- show error message if book not added to database -->
    <p><strong> Error - <?php echo $e-> getMessage(); ?> please try again or contact developer. </strong></p> <a href="addBook.php" class="button block">Go back and try again</a>   



    <?php    
        mysqli_close($mysqli);
            }

        } else {
    ?>

    <form method="post" action="" id="contactForm">

        <label for="headline">Headline<span class="required">*</span></label>
        <input type="text" id="headline" name="headline">

        <label for="content">Content<span class="required">*</span></label>
        <input type="text" id="content" name="content">

        <input type="submit" class="btn outline" name="addNotice_submit" value="Add Notice">

    </form>


    <?php
        
        }


    ?>

    <hr>

</div><!-- addBook -->



<?php 
    include("../includes/footer.php"); 
?>
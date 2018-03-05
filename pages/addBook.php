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
        if (isset ($_POST['addBook_submit'])) {
            $title      = trim($_POST['title']);
            $author     = trim($_POST['author']);
            $coverImage = trim($_POST['coverImageUrl']);
            $bookLength = trim($_POST['bookLength']);
            $amazonLink = trim($_POST['amazonLink']); 
            $synopsis   = $_POST['synopsis'];

            //Check to see if $name or $email have header injections
            if(has_header_injection($title) || has_header_injection($author)) {
                die(); // If true, kill the script
            }

            //Need to make separate rules for coverImageUrl and length

            // Validate the inputs are not empty
            if( !$title || !$author ) {
                echo '<h4 class="error">Starred fields are required.</h4><a href="addBook.php" class="button block">Go back and try again</a>';
            }

            $shelf      = $_POST['shelf'];
            $table      = "books";
            $rating     = 5;
            $dateAdded  = "2018-02-13";
            $dateRead   = "0000-00-00";

            include('../scripts/php/dbconnection.php');

            $query = "INSERT INTO books(id, cover_image, title,author, rating, length,shelf,amazon_link, date_added, date_read, synopsis) VALUES('NULL', '".$coverImage."', '".$title."', '".$author."', '".$rating."', '".$bookLength."', '".$shelf."', '".$amazonLink."', '".$dateAdded."', '".$dateRead."', '".$synopsis."')";

            try{
                $run_query = mysqli_query($mysqli, $query);

                if($run_query){



    ?>

           <!-- show success message after book added is sent -->
            <p><strong> Thanks for adding </strong><?php echo $title." by ".$author." to ".$shelf; ?></p>
                   <hr>
                    <p><a href="./addBook.php" >&laquo; Add another Book</a> <a href="./booklist.php" >&laquo; Go to Book List</a></p>

    <?php
                } else {
                    throw new Exception ("Book not added");
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
            
    <h2> Find Book on goodreads.com </h2>
    <p>will automaticall fill in the form below form good reads</p>
    
    <div id="search">
        <input type="text" name="search-input" id="search-input" placeholder="Geben Sie einen Namen ein">
        <button type="button" id="search-btn" name="search-btn"><span class="fas fa-search">?</span></button>
    </div>
    
    <hr>
            
    <form method="post" action="" id="contactForm">

        <label for="title">Book Title<span class="required">*</span></label>
        <input type="text" id="title" name="title">

        <label for="author">Author<span class="required">*</span></label>
        <input type="text" id="author" name="author">

        <label for="coverImageUrl">Cover Image Url</label>
        <input type="text" id="coverImageUrl" name="coverImageUrl">

        <label for="amazonLink">Amazon link... leave blank for none.</label>
        <input type="text" id="amazonLink" name="amazonLink">

        <label for="bookLength">Length of book (no. of pages)</label>
        <input type="text" id="bookLength" name="bookLength">

        <label for="synopsis">Synopsis of book.</label>
        <textarea id="synopsis" name="synopsis"></textarea>

        <input type="radio" id="shelf1" name="shelf" value="To Read" checked="checked">
        <label class="radio" for="shelf1"><em>To Read</em></label>

        <input type="radio" id="shelf2" name="shelf" value="Currently Reading">
        <label class="radio" for="shelf2"><em>Currently Reading</em></label>

        <input type="radio" id="shelf3" name="shelf" value="Read">
        <label class="radio" for="shelf3"><em>Read</em></label>

        <input type="submit" class="btn outline" name="addBook_submit" value="Add Book">

    </form>


    <?php
        
        }


    ?>

    <hr>

</div><!-- addBook -->



<?php 
    include("../includes/footer.php"); 
?>
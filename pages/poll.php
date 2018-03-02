<?php 
    session_start();
    // Check if user is logged in using the session variable
    if ( $_SESSION['logged_in'] != 1 ) {
      $_SESSION['message'] = "You must log in before viewing your profile page!";
      header("location: ../loginPages/error.php");    
    }
    const TITLE = "Meet up | Page 3 Book Club";

    include("../includes/header.php"); 
    include('../scripts/php/dbconnection.php');
    $booklist = array();
    $query = "SELECT `title`, `author`, `voters`, `synopsis` FROM books WHERE shelf='poll'";
    $run = mysqli_query($mysqli, $query);

    while($result = mysqli_fetch_assoc($run)){
        array_push($booklist, $result);
    }
    
?>
    <div class="content">
        <div id="poll">
        <hr>
        <h2>*** FEBRUARY BOOK POLL***</h2>
        <p> Hello Readers!<br><br>
            I hope January has given you enough cold evenings to curl up and finish 'Do Not Say We Have Nothing'. It's a chunker and I'm certainly not finished. <br>
            Below are the book choices for February. I just want to flag that Baise Moi includes some explicit and violent rape scenes. If anyone who wants to read this month is uncomfortable reading and then as a group discussing that, then please send me or Rachel a message, and no questions asked we will replace it with another choice. <br>
            We think sensitive topics are important to address and discuss but would rather everyone felt welcome and comfortable...there are enough other books on our list!
        </p>
        
        <ul>
            <?php for($i=0; $i <count($booklist); $i++){ ?>
            <li>
                <input type="checkbox" id="choice<?php echo $i; ?>" name="choice" value="<?php echo $booklist[$i]['title']; ?>">
                <span><?php echo strlen($booklist[$i]['voters']); ?></span>
                
                <label for="choice1">
                    <em><?php echo $booklist[$i]['title']; ?></em> 
                    - <?php echo $booklist[$i]['author']; ?>
                    , <?php echo $booklist[$i]['synopsis']; ?>
                </label>
            </li>

             <?php 
                } /* end of php while loop */
            ?>
        </ul>

        <hr>
    </div>
    </div><!-- content -->

<?php 
    include("../includes/footer.php"); 
?>

<?php
/* Displays all error messages */
session_start();

const TITLE = "Home | Page 3 Bookclub";
include("../includes/headerWithoutNav.php"); 
?>

<div class="form">
    <h2>Error</h2>
    <p>
    <?php 
    if( isset($_SESSION['message']) AND !empty($_SESSION['message']) ): 
        echo $_SESSION['message'];    
    else:
        header( "location: ../index.php" );
    endif;
    ?>
    </p> 
    <div class="formBtn">
        <a href="/page3Book_club_app/index.php"><button class="btn outline">Go Back</button></a>
    </div>
    
</div>
<?php
    
    include('../includes/footer.php');
?>
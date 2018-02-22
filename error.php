<?php
/* Displays all error messages */
session_start();

const TITLE = "Home | Page 3 Bookclub";
include("./includes/headerWithoutNav.php"); 
?>

<div class="form">
    <h1>Error</h1>
    <p>
    <?php 
    if( isset($_SESSION['message']) AND !empty($_SESSION['message']) ): 
        echo $_SESSION['message'];    
    else:
        header( "location: ./includes/index.php" );
    endif;
    ?>
    </p>     
    <a href="index.php"><button class="button button-block">Home</button></a>
</div>
<?php
    
    include('./includes/footer.php');
?>
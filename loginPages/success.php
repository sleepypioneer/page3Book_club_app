<?php
/* Displays all successful messages */
session_start();


const TITLE = "Success for Reset | Page 3 Bookclub";
include("../includes/headerWithoutNav.php"); 
?>

<div class="form">
    <h1><?= 'Success'; ?></h1>
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
        <a href="../index.php"><button class="btn outline">Home</button></a>
    </div>
</div>


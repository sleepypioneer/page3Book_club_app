<?php
/* Log out process, unsets and destroys session variables */
session_start();
session_unset();
session_destroy(); 
const TITLE = "Logout | Page 3 Bookclub";
include("../includes/headerWithoutNav.php"); 
?>

    <div class="form">
          <h1>Thanks for stopping by</h1>
              
          <p><?= 'You have been logged out!'; ?></p>
          
          <a href="../index.php"><button class="button button-block">Home</button></a>

    </div>
<?php 
    include("../includes/footer.php"); 
?>

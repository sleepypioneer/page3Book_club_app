<?php
/* Log out process, unsets and destroys session variables */
session_start();
session_unset();
session_destroy(); 
const TITLE = "Logout | Page 3 Bookclub";
include("../includes/headerWithoutNav.php"); 
?>

    <div class="form">
          <h2>Thanks for stopping by</h2>
              
          <p><?= 'You have been logged out!'; ?></p>
           <div class="formBtn">
                <a href="../index.php"><button class="button button-block">Log back in</button></a>
            </div>
    </div>
<?php 
    include("../includes/footer.php"); 
?>

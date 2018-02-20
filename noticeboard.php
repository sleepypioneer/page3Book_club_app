<?php 
    const TITLE = "Notice Board | Page 3 Book Club";

    include("./includes/header.php"); 

    include('./scripts/php/dbconnection.php');

    $noticeslist = array();
    $query = "SELECT * FROM notices";
    $run = mysqli_query($connection, $query);

    while($result = mysqli_fetch_assoc($run)){
        array_push($noticeslist, $result);
    }
?>
    <div id="noticeboard">  
        <hr>
        <!-- Button to open the modal new notice form -->
        <a href="./addNotice.php"><button class="btn outline">Add Notice</button></a>
        <hr>
            
            <?php
                // latest notice displayed first
                for ($i = count($noticeslist)-1; $i >= 0 ; $i--){
                    $noticeIndex = $i;
                    include("./includes/notice.php");
                }
            ?>
    </div>
    <script type="text/javascript">
        // Get the modal
        var modal = document.getElementById('id02');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>

    
<?php 
    include("./includes/footer.php"); 
?>
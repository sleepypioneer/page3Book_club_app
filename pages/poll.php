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

    $userName = $_SESSION['first_name'];
    $voted = mysqli_query($mysqli, "SELECT `voted` FROM users WHERE first_name='$userName'"); 
    $userVoted = mysqli_fetch_assoc($voted);
    
    function submitVote(){
        echo $userVoted['voted'];
        if($userVoted['voted'] == 1){
            $query = "UPDATE users SET `voted`=0 WHERE first_name='$userName'";
            $userVoted['voted'] = 0;
        } else {
            $query = "UPDATE users SET `voted`=1 WHERE first_name='$userName'";
            $userVoted['voted'] = 1;
        }
        $run = mysqli_query($mysqli, $query);
       
    }
    
    if (isset($_GET['voted'])) {
        submitVote();
    }


?>
    <div >
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
                <a href='poll.php?voted=true'><input type="checkbox" class="pollVote" id="choice<?php echo $i; ?>" name="choice" value="<?php echo $booklist[$i]['title']; ?>" ></a>
                <span><?php 
                      if (strlen($booklist[$i]['voters'])> 0){
                        echo count(explode(",", $booklist[$i]['voters']));
                      } else {
                        echo 0;
                      } ?></span>
                <label for="choice1">
                    <em><?php echo $booklist[$i]['title']; ?></em> 
                    - <?php echo $booklist[$i]['author']; ?>
                    , <?php echo $booklist[$i]['synopsis']; ?>
                </label>
            </li>

             <?php 
                                                        
                } /* end of php while loop */
            
                echo $userVoted['voted'];
            ?>
        </ul>

        <hr>
    </div>
    </div><!-- content -->
<script type="text/javascript">
    function ckChange(e){
        ckType = e.target;
        var ckName = document.getElementsByName(ckType.name);
        var checked = document.getElementById(ckType.id);

        if (checked.checked) {
          for(var i=0; i < ckName.length; i++){

              if(!ckName[i].checked){
                  ckName[i].disabled = true;
              }else{
                  ckName[i].disabled = false;
              }
          } 
        }
        else {
          for(var i=0; i < ckName.length; i++){
            ckName[i].disabled = false;
          } 
        }    
    }
    
    let pollSelections = document.querySelectorAll('.pollVote');
    pollSelections.forEach(selection =>{
        selection.addEventListener('click', ckChange);
    });
    
</script>

<?php 
    include("../includes/footer.php"); 
?>

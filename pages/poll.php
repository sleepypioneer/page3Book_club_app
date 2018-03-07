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

    function submitVote($userVoted, $userName, $choice){
        include('../scripts/php/dbconnection.php');
        if($userVoted['voted'] == 1){
            $query = "UPDATE users SET `voted`=0 WHERE first_name='$userName'";
            $userVoted['voted'] = 0;
        } else {
            $query = "UPDATE users SET `voted`=1 WHERE first_name='$userName'";
            $userVoted['voted'] = 1;
        }
        $run = mysqli_query($mysqli, $query);
        echo "you voted";
    }
    
    if (isset($_GET['vote'])) {
        submitVote($userVoted, $userName, $_GET['vote']);
    }

    if($userVoted['voted'] == 0){
        include("../includes/reminder.php"); 
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
                <input type="checkbox" class="checkbox" id="choice<?php echo $i; ?>" name="choice" value="<?php echo $booklist[$i]['title']; ?>">
                <span>
<?php 
  if (strlen($booklist[$i]['voters'])> 0){
    echo count(explode(",", $booklist[$i]['voters']));
  } else {
    echo 0;
  } 
?>
                </span>
                <label for="choice<?php echo $i; ?>">
                    <em><?php echo $booklist[$i]['title']; ?></em> 
                    - <?php echo $booklist[$i]['author']; ?>
                    , <?php echo $booklist[$i]['synopsis']; ?>
                </label>
            </li>

             <?php 
                                                        
                } /* end of php while loop */
            
                echo $userVoted['voted'];
            ?>
            <li id="response"></li>
        </ul>

        <hr>
    </div>
    </div><!-- content -->
<script type="text/javascript" src="../scripts/javaScript/checkboxLogic.js"></script>
<script type="text/javascript" >   
    function requestVote(e){
        let vote = e.target.value;
        let req = new XMLHttpRequest();
        req.open("get", "./poll.php?vote=" + vote, true);
        req.setRequestHeader("Conten-Type", "application/x-www-form-urlencoded");
        req.onreadystatechange = evaluateVote;
        req.send();
    }
    
    function evaluateVote(e) {
        if(e.target.readyState == 4 && e.target.status == 200)
            document.getElementById("response").innerHTML = e.target.responseText;
    }
    
    let selections = document.querySelectorAll('.checkbox');
    selections.forEach(selection =>{
        selection.addEventListener('click', requestVote);
    });
    

</script>

<?php 
    include("../includes/footer.php"); 
?>

<?php 
    session_start();
    // Check if user is logged in using the session variable
    if ( $_SESSION['logged_in'] != 1 ) {
      $_SESSION['message'] = "You must log in before viewing your profile page!";
      header("location: ../loginPages/error.php");    
    }
    const TITLE = "Meet up | Page 3 Book Club";
    $user = $_SESSION['first_name'];

    function attendance($rsvp){
        include('../scripts/php/dbconnection.php');
        if ($rsvp){
            $setAttendanceQuery = "UPDATE `users` SET `attending`= '1' WHERE `first_name`='$user'";
        } else if (!$rsvp){
            $setAttendanceQuery = "UPDATE `users` SET `attending`= '-1' WHERE `first_name`='$user'";
        }
        $setAttendanceRun = mysqli_query($mysqli, $setAttendanceQuery);
    }

    if (isset($rsvp)){
        echo $rsvp;
        attendance();
    }
    
    include("../includes/header.php"); 
    // include data base
    include('../scripts/php/dbconnection.php');

    //query for getting current user details
    $currentUserQuery = "SELECT `avatar`, `first_name` FROM `users` WHERE `first_name`='$user'";
    $currentUserRun = mysqli_query($mysqli, $currentUserQuery);
    $userInfo = mysqli_fetch_array($currentUserRun);

    //query for getting attending users for the next meetup
    $attendingUsersQuery = "SELECT `avatar`, `first_name` FROM `users` WHERE `attending`='1'"; 
    $attendingUsersRun = mysqli_query($mysqli, $attendingUsersQuery);
    $attendingUsers = mysqli_fetch_assoc($attendingUsersRun);

    //query to get booklist cont below to get the currently reading book
    $currentlyReadingQuery = "SELECT `title`, `author`, `synopsis` FROM `books` WHERE `shelf`='Currently-Reading'";
    $currentlyReadingRun = mysqli_query($mysqli, $currentlyReadingQuery);
    $currentlyReading = mysqli_fetch_array($currentlyReadingRun);
?>

    <div id="meetup">
        <hr>
        <h2>BOOK CLUB 2018 #2</h2><h4>(the steamy edition)</h4>

        <!--close php here to input data from while loop lower down-->
        <div  style="text-align: center;">
            <img src="/page3Book_club_app/assets/imgs/do_not_say_we_have_nothing.jpg" alt="do_not_say_we_have_nothing" class="bookCover" />
        </div>

        <p>We will be reading 
            
'<?php echo $currentlyReading['title']; ?>' by 
<?php echo $currentlyReading['author']; ?>
            
        , a collection of erotic short stories written in the 1940s.           <br><br>
        We'll be discussing it at the meeting on February 27. Don't be shy - hope to see you then!</p>
        <hr>
        <p><img src="<?php echo $userInfo['avatar']; ?>" class="avatar small"/></p>
        <p>Hi <?php echo $userInfo['first_name']; ?> will you be attending the next meetup? </p>
        
        <div id="attendance">
            <a href="./meetup.php?rsvp=True"><input type="checkbox" id="attending" name="attendance" value="Y">
            <label for="attending"> &#10004;</label></a>
            
            <a href="./meetup.php?rsvp=False"><input type="checkbox" id="notAttending" name="attendance" value ="N">
            <label for="notAttending"> X </label></a>
        </div>
        
        <h3>Attending:</h3>
        <div id="attendees" class="centerFlex">
<?php
      for($i=0; $i <count($attendingUsers); $i++){ ?> 
        <span title="<?php echo $attendingUsers['first_name']; ?>"><img src="<?php echo $attendingUsers['avatar']; ?>" class="avatar small"/></span>
<?php
      } /* end of php for loop */
?>
        </div>

        <h3>Where:</h3>
        <p>Home Cafe, Jonnasstrasse 23, 12053</p>

        <div id="map"></div>
        
    </div>

    <script type="text/javascript">
      function initMap() {
        var uluru = {lat: 52.47147762686464, lng: 13.433457536492938};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 14,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>

    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA24YTIiDMYVVx7uF0QisNDCAwLKtD4wco&callback=initMap"
    async defer></script>


<?php 
        
    mysqli_close($mysqli);
            
    include("../includes/footer.php"); 
?>
<?php 
    const TITLE = "Meet up | Page 3 Book Club";

    include("../includes/header.php"); 
?>

    <div id="meetup">
        <hr>
        <h2>BOOK CLUB 2018 #2</h2><h4>(the steamy edition)</h4>
        <p>We will be reading 'Delta of Venus' by Anais Nin, a collection of erotic short stories written in the 1940s. <br>
        We'll be discussing it at the meeting on February 27. Don't be shy - hope to see you then!</p>
        <hr>
        <div id="attendance">
            <input type="radio" id="attending" name="attendance" value="Y">
            <label for="attending"> &#10004;</label>
            
            <input type="radio" id="notAttending" name="attendance" value ="N">
            <label for="notAttending"> X </label>
        </div>
    </div>
    <?php
        include('../scripts/php/dbconnection.php');

        $query = "SELECT * FROM books";
        $run = mysqli_query($mysqli, $query);
    ?>
    <!--close php here to input data from while loop lower down-->
    <div  style="text-align: center;">
        <h4>currently reading:
            <?php 
                        if(mysqli_fetch_assoc($run)['shelf'] === "Curently Reading"){
                            echo $result['title']; 
                } ?>
        </h4>
        <img src="/page3Book_club_app/assets/imgs/do_not_say_we_have_nothing.jpg" alt="do_not_say_we_have_nothing" class="bookCover" />
    </div>
    <?php
        mysqli_close($mysqli);
    ?>
    <h3>Where:</h3>
<p>Home Cafe, Jonnasstrasse 23, 12053</p>

    <div id="map"></div>

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
    include("../includes/footer.php"); 
?>
<?php 
    const TITLE = "Home | Page 3 Bookclub";
    include("./includes/header.php"); 
?>
    <div class="manifest">
        <!-- Button to open the modal login form -->
        <button onclick="document.getElementById('id01').style.display='block'">Login</button>

        <!-- The Modal -->
        <div id="id01" class="modal">
          <span onclick="document.getElementById('id01').style.display='none'" 
        class="close" title="Close Modal">&times;</span>

          <!-- Modal Content -->
          <form class="modal-content animate" action="./scripts/php/logincheck.php">
            <div class="imgcontainer">
              <img src="./assets/imgs/avatar.JPG" alt="Avatar" class="avatar">
            </div>

            <div class="container">
              <label for="uname"><b>Username</b></label>
              <input type="text" placeholder="Enter Username" name="uname" required>

              <label for="psw"><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="psw" required>

              <button type="submit">Login</button>
              <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
              </label>
            </div>

            <div class="container" style="background-color:#f1f1f1">
              <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
              <span class="psw">Forgot <a href="#">password?</a></span>
            </div>
          </form>
        </div>
        
        <h2>Hello and welcome! Here's how it works:</h4>
        <h4>PLANNING YOUR MONTHLIES</h4>
        <p>We want to meet on the last Tuesday of every month, unless otherwise planned.</p>
        <hr>
        <h4>DEMOCRACY IN ACTION</h4>
        <p>To decide which book is up the following month, we'll post a FB poll one week before each meeting. The shortlist for that poll will be selected from an ever-growing list of recommendations. If you have a book you'd like considered, just add it to the group document.</p>
        <hr>
        <h4>DREAMING BIG</h4>
        <p>Once we establish a group of regulars, we'd like to contact bookshops to see if one will host us. Perhaps it could offer discounts in return for monthly orders. We're still nailing down the specifics, so any other ideas, just let us know.</p>
        <hr>
        <h4>PAGE WHO?</h4>
        <p>Our current name is a kind of working title. As a cultural reference to boobs in UK tabloids, it's very British-specific. We'd be happy to change it to something more universal. Again, suggestions welcome!</p>
        <hr>
        <h4>WORDS AND ACTIONS</h4>
        <p>We're all into feminism, fairness and equality. So as well as a book club, this can also be a platform for spreading causes and organizing activism. Please feel free to post events or articles that you think might interest or galvanise your fellow members!</p>
        <hr>
        <h4>SAFE SPACE OR FREE-FOR-ALL?</h4>
        <p>Our only requirements for new members are: 1) an open mind and 2) an interest in women's rights. We don't care whether you have a vagina or not, whether you loathe Germaine Greer, or what your political stance is on waxing. We're just looking for titillating and respectful discussion!</p>
        <hr>

    </div><!-- manifest -->

    <script type="text/javascript">
        // Get the modal
        var modal = document.getElementById('id01');

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


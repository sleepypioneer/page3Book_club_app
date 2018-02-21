
<nav id="login-nav">
    <ul id="login-menu">
        <li>
            <!-- Button to open the modal login form -->
            <a onclick="document.getElementById('login').style.display='block'">Login</a>
        </li>
        <li>
            <!-- Button to open the modal login form -->
            <a onclick="document.getElementById('signUp').style.display='block'">Join Us</a>
        </li>
    </ul>
</nav><!-- end of login navi -->

<!-- The Modal -->
<div id="login" class="modal">
    <span onclick="document.getElementById('login').style.display='none'" class="close" title="Close Modal">&times;</span>

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
            <button type="button" onclick="document.getElementById('login').style.display='none'" class="cancelbtn">Cancel</button>
            <!--<span class="psw">Forgot <a href="#">password?</a></span>-->
        </div>
    </form>
</div><!-- login -->




<!-- The Modal -->
<div id="signUp" class="modal">
    <span onclick="document.getElementById('signUp').style.display='none'" class="close" title="Close Modal">&times;</span>

    <!-- Modal Content -->
    <form class="modal-content animate" action="./scripts/php/logincheck.php">
        <div class="imgcontainer">
            <img src="./assets/imgs/avatar.JPG" alt="Avatar" class="avatar">
        </div>

        <div class="container">
            <label for="avatar"><b>Upload a picture (optional)</b></label>
            <input name="upfile" type="file" size="25">
            
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>
            
            <label for="fname"><b>Full name</b></label>
            <input type="text" placeholder="Enter your full name - we only use this to identify you a member of our group" name="fname" required>
            
            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter your Email ~ we don't spam" name="email" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>
            
            <button type="submit">Sign Up</button>
            <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
              </label>
        </div>

        <div class="container" style="background-color:#f1f1f1">
            <button type="button" onclick="document.getElementById('signUp').style.display='none'" class="cancelbtn">Cancel</button>
        </div>
    </form>
</div> <!-- sign up -->


<script type="text/javascript">
    // Get the modal
    var modal1 = document.getElementById('login');
    var modal2 = document.getElementById('signUp');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal1 | event.target == modal2) {
            modal1.style.display = "none";
            modal2.style.display = "none";
        }
    }
</script>



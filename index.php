<!--to load the arrays php-->

<?php
    $companyName = "Page 3";
    include('./scripts/php/arrays.php');
    const TITLE = "Login | Page 3 Bookclub";
    require './scripts/php/dbconnection.php';
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo TITLE; ?></title>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    
    <!-- Link style sheet -->
    <link href="./css/appStyles.css" rel="stylesheet">
    
    <!-- Add Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Astloch|Autour+One|Barrio|Bungee+Shade|Codystar|Diplomata|Faster+One|Finger+Paint|Gravitas+One|Griffy|Henny+Penny|IM+Fell+English+SC|Jolly+Lodger|Metal+Mania|Monofett|Mountains+of+Christmas|Nosifer|Sofia|Trade+Winds|UnifrakturCook:700" rel="stylesheet">

</head>
    <?php 
        if ($_SERVER['REQUEST_METHOD'] == 'POST') 
        {
            if (isset($_POST['login'])) { //user logging in

                require './loginPages/login.php';

            }

            elseif (isset($_POST['register'])) { //user registering

                require './loginPages/register.php';

            }
        }
    ?>
<body id="final-example">
    
    <div class="wrapper">
        <div id="banner">
            <div>
                <a href="./index.php" title="Return to Home">
                    <!--<img src="./assets/imgs/readingWomanInBathWithBooks.jpg">-->
                    <h1>Page 3</h1>
                </a>
            </div>
        </div><!-- banner -->
        <div class="form">

            <ul class="tab-group">
                <li class="tab"><a href="#signup">Sign Up</a></li>
                <li class="tab active"><a href="#login">Log In</a></li>
            </ul>

            <div class="tab-content">

                <div id="login">
                    <h3>Welcome Back</h3>

                    <form action="index.php" method="post" autocomplete="off">

                        <div class="field-wrap">
                            <label>
                      Email Address<span class="req">*</span>
                    </label>
                            <input type="email" required autocomplete="off" name="email" />
                        </div>

                        <div class="field-wrap">
                            <label>
                      Password<span class="req">*</span>
                    </label>
                            <input type="password" required autocomplete="off" name="password" />
                            <p class="forgot"><a href="./loginPages/forgot.php">Forgot Password?</a></p>
                        </div>
                        
                        <div class="formBtn">
                            <button class="btn outline" name="login">Log In</button>
                        </div>

                    </form>

                </div>

                <div id="signup" >
                    <h3>Sign Up for Free</h3>

                    <form action="index.php" method="post" autocomplete="off">

                        <div class="top-row">
                            <div class="field-wrap">
                                <label>
                        First Name<span class="req">*</span>
                      </label>
                                <input type="text" required autocomplete="off" name='firstname' />
                            </div>

                            <div class="field-wrap">
                                <label>
                        Last Name<span class="req">*</span>
                      </label>
                                <input type="text" required autocomplete="off" name='lastname' />
                            </div>
                        </div>

                        <div class="field-wrap">
                            <label>
                      Email Address<span class="req">*</span>
                    </label>
                            <input type="email" required autocomplete="off" name='email' />
                        </div>

                        <div class="field-wrap">
                            <label>
                      Set A Password<span class="req">*</span>
                    </label>
                            <input type="password" required autocomplete="off" name='password' />
                        </div>
                        <div class="formBtn">
                            <button type="submit" class="btn outline" name="register">Register</button>
                        </div>        
                    </form>

                </div>

            </div><!-- tab-content -->

        </div><!-- /form -->
    
        <script type="text/javascript" src="scripts/javaScript/inputs.js"></script>

            
<?php
    
    include('./includes/footer.php');
?>
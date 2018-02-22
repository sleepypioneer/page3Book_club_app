<!--to load the arrays php-->

<?php
    $companyName = "Page 3";
    include('./includes/arrays.php');
    const TITLE = "Login | Page 3 Bookclub";
    require './includes/dbconnection.php';
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo TITLE; ?></title>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    
    <!-- Link style sheet -->
    <link href="./styleSheets/appStyles.css" rel="stylesheet">
    
    <!-- Add Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Astloch|Autour+One|Barrio|Bungee+Shade|Codystar|Diplomata|Faster+One|Finger+Paint|Gravitas+One|Griffy|Henny+Penny|IM+Fell+English+SC|Jolly+Lodger|Metal+Mania|Monofett|Mountains+of+Christmas|Nosifer|Sofia|Trade+Winds|UnifrakturCook:700" rel="stylesheet">

</head>
    <?php 
        if ($_SERVER['REQUEST_METHOD'] == 'POST') 
        {
            if (isset($_POST['login'])) { //user logging in

                require './includes/login.php';

            }

            elseif (isset($_POST['register'])) { //user registering

                require './includes/register.php';

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
                    <h2>Welcome Back!</h2>

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
                        </div>

                        <p class="forgot"><a href="forgot.php">Forgot Password?</a></p>

                        <button class="button button-block" name="login" />Log In</button>

                    </form>

                </div>

                <div id="signup" >
                    <h2>Sign Up for Free</h2>

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

                        <button type="submit" class="button button-block" name="register" />Register</button>

                    </form>

                </div>

            </div><!-- tab-content -->

        </div><!-- /form -->
    
        <script type="text/javascript">
                
            let form = document.querySelector('.form');
            let textInputs = form.querySelectorAll('input, textarea')
            let tabs = document.querySelectorAll('.tab a');
            
            function highlight(e){
                let selected = e.srcElement;
                let label = selected.previousElementSibling;
                
                if (e.type === 'keyup') {
                        if (selected.value === '') {
                            label.classList.remove('active');
                            label.classList.remove('hightlight'); 
                    } else {
                      label.classList.add('active');
                        label.classList.add('highlight');
                    }
                } else if (e.type === 'blur') {
                    if( selected.value === '' ) {
                        label.classList.remove('active');
                        label.classList.remove('hightlight'); 
                        } else {
                        label.classList.remove('highlight');   
                        }   
                } else if (e.type === 'focus') {

                  if( selected.value === '' ) {
                        label.classList.remove('highlight'); 
                        } 
                  else if( selected.value !== '' ) {
                        label.classList.add('highlight');
                        }
                }
            }
            
            
            
            tabs.forEach(tab => {
                tab.addEventListener('click', function(e){
                    e.preventDefault();
                    let selected = e.target;
                    let children = selected.parentElement.parentElement.children;
                    let target = selected.hash;
                    
                    
                    children[0].classList.remove('active');
                    children[1].classList.remove('active');
                    selected.parentElement.classList.add('active');
                    
                    if (target === "#signup"){
                        document.querySelector('#login').style.opacity = 0;
                        document.querySelector('#login').style.zIndex = 0;
                        setTimeout(function(){
                            document.querySelector(target).style.opacity = 1;
                            document.querySelector(target).style.zIndex = 1;
                        }, 500);
                    } else if (target === "#login"){
                        document.querySelector('#signup').style.opacity = 0;
                        document.querySelector('#signup').style.zIndex = 0;
                        setTimeout(function(){
                            document.querySelector(target).style.opacity = 1;
                            document.querySelector(target).style.zIndex = 1;
                        }, 500);
                    }
                    
                    console.log(target);
                    
                })
            })
            
            
            textInputs.forEach(input => {
                input.addEventListener('keyup', highlight);
                input.addEventListener('blur', highlight);
                input.addEventListener('focus', highlight);
            })
            
    </script>

            
<?php
    
    include('./includes/footer.php');
?>
<!--to load the arrays php-->

<?php
    $companyName = "Page 3";
    include('../scripts/php/arrays.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo TITLE; ?></title>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    
    <!-- Link style sheet -->
    <link href="/page3Book_club_app/css/appStyles.css" rel="stylesheet">
    
    <!-- Add Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Astloch|Autour+One|Barrio|Bungee+Shade|Codystar|Diplomata|Faster+One|Finger+Paint|Gravitas+One|Griffy|Henny+Penny|IM+Fell+English+SC|Jolly+Lodger|Metal+Mania|Monofett|Mountains+of+Christmas|Nosifer|Varela+Round|Sofia|Trade+Winds|UnifrakturCook:700" rel="stylesheet">

</head>
<body id="final-example">
    <div class="wrapper">
        <div id="banner">
            <div>
                <a href="/page3Book_club_app/pages/home.php" title="Return to Home">
                    <h1>Page 3</h1>
                </a>
            </div>
        </div><!-- banner -->
        <div id="exitSign">
            <a href="../loginPages/logout.php">
              <div class="neon signOuter pink">
                <div class="signInner">
                  <span class="stroke-double stroke-single"></span>
                </div>
              </div>
                <div id="exitIcon"><img src="../assets/imgs/icons/Signout_font_awesome.svg"/></div>
            </a>
        </div>
        <div id="nav">
            <?php include('../includes/nav.php'); ?>
        </div><!-- nav -->
        
        <div class="content"> 
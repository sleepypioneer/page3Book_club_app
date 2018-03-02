<?php
    $notice = $noticeslist[$noticeIndex];

    include('../scripts/php/dbconnection.php');
    $publisher = $notice['publisher'];
    $query = "SELECT `avatar`, `first_name` FROM `users` WHERE `id`='$publisher'";
    $run = mysqli_query($mysqli, $query);
    $userInfo = mysqli_fetch_assoc($run);
?>

<div class="notice">
    <h6 class="noticePublisher"><?php echo $userInfo['first_name']; ?><img src=" <?php echo $userInfo['avatar']; ?> " class="avatar small"></h6>
    <h3 class="noticeHeader"><?php echo $notice['headline']; ?></h3>
    <p class="noticeContent">
    <?php echo $notice['content']; ?>
    </p>

</div><!-- notice -->
<hr>
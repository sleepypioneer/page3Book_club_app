<?php
    $notice = $noticeslist[$noticeIndex];
?>

<div class="notice">
    <h6 class="noticePublisher"><?php echo $notice['publisher']; ?><img src="./assets/imgs/avatar.JPG" class="avatar small"></h6>
    <h3 class="noticeHeader"><?php echo $notice['headline']; ?></h3>
    <p class="noticeContent">
    <?php echo $notice['content']; ?>
    </p>

</div><!-- notice -->
<hr>
<div id="developerDetails">
    <small>&copy;<?php echo date('Y'); ?> <?php echo $developer["name"]; ?> </small>
    <ul>
        <?php
            foreach($developer["developerLinks"] as $link) {
                echo "<li><a href=\"$link[link]\" target\"blank\"> <img src=\"$link[icon]\"></a></li>";
            }
        ?>
    </ul>
</div><!-- developerDetails -->
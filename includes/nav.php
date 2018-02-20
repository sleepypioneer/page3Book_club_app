
<nav id="main-nav">
    <ul id="main-menu">
       <?php
            foreach($navItems as $item) {
                echo "<li><a href=\"$item[slug]\">$item[title]</a></li>";
            }
        ?>
    </ul>
    <div id="menu-icon">
        <div class="icon-bar"></div>
        <div class="icon-bar"></div>
        <div class="icon-bar"></div>
    </div>
</nav><!-- end of main navi -->

 <script type="text/javascript" src="scripts/javaScript/nav.js"></script>
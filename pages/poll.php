<?php 
    const TITLE = "Meet up | Page 3 Book Club";

    include("../includes/header.php"); 
?>
    <div class="content">
        <div id="poll">
        <hr>
        <h2>*** FEBRUARY BOOK POLL***</h2>
        <p> Hello Readers!<br><br>
            I hope January has given you enough cold evenings to curl up and finish 'Do Not Say We Have Nothing'. It's a chunker and I'm certainly not finished. <br>
            Below are the book choices for February. I just want to flag that Baise Moi includes some explicit and violent rape scenes. If anyone who wants to read this month is uncomfortable reading and then as a group discussing that, then please send me or Rachel a message, and no questions asked we will replace it with another choice. <br>
            We think sensitive topics are important to address and discuss but would rather everyone felt welcome and comfortable...there are enough other books on our list!
        </p>
        
        <ul>
            <li>
                <input type="radio" id="choice1" name="choice" value="Delta of Venus">
                <label for="choice1"><em>Delta of Venus </em>- Anais Nin, collection of short stories by one of the first prominent female erotica authors.</label>
            </li>

            <li>
                <input type="radio" id="choice2" name="choice" value="Sister Outsider">
                <label for="choice2"><em>Sister Outsider </em>- Audrey Lorde, collection of essays and poems on intersectional feminism.</label>
            </li>

            <li>
                <input type="radio" id="choice3" name="choice" value="Baise Moi">
                <label for="choice3"><em>Baise Moi </em>- Virginie Despentes, a controversial novel following two girls on a road trip / killing spree after suffering a gang rape.</label>
            </li>
        </ul>

        <hr>
    </div>
    </div><!-- content -->

<?php 
    include("../includes/footer.php"); 
?>

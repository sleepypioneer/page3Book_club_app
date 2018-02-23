<?php 
    const TITLE = "Book List | Page 3 Book Club";

    include("../includes/header.php"); 
    
    include('../scripts/php/dbconnection.php');

    $booklist = array();
    $query = "SELECT * FROM books";
    $run = mysqli_query($mysqli, $query);

    while($result = mysqli_fetch_assoc($run)){
        array_push($booklist, $result);
    }

?>

<script type="text/javascript">
    let booklistArray = <?php echo json_encode($booklist); ?>;
</script>
        <div id="booklist">
            <hr>
            <p>
                Please feel free to add suggestions! We’ll use this list to create the monthly poll, trying to give a spread of biography, fiction and other genres each time.<br><br>
                Also, please do think outside the box; it needn’t be overtly feminist each time. We can also consider stories simply about women’s lives, perhaps shedding light on some badass women that history might have otherwise forgotten, as well as their LGBTQIA allies.
                <br><br><br>
            </p>
            <hr>
            <div id="searchAndAdd">
                <div>
                    <a href="./addBook.php"><button class="btn outline">Add a book</button></a>
                </div>
                
                <div id="searchWithClear">
                    <form id="searchBox">
                        <input type="text" placeholder="Search Title or Author" class="search">
                    </form>
                    <div class="clear">X</div>
                </div>                      

            </div>

            <?php
                
            ?>
                <!--close php here to input data from while loop lower down-->
                <table class="table">
                    <thead>
                        <tr>
                            <th data-column="0">Title<button><div class="triangle-down"></div></button></th>
                            <th data-column="1">Author<button><div class="triangle-down"></div></button></th>
                            <th data-column="2">Rating<button><div class="triangle-down"></div></button></th>
                            <th data-column="3">Shelf<button><div class="triangle-down"></div></button></th>
                        </tr>
                    </thead>
                    <tbody class="suggestions">
                        <?php for($i=0; $i <count($booklist); $i++){ ?>

                        <tr>
                            <td class="books" onclick="document.getElementById('bookInfo').style.display='block'">
                                <?php echo $booklist[$i]['title'] ?>
                            </td>
                            <td>
                                <?php echo $booklist[$i]['author'] ?>
                            </td>
                            <td>
                                <?php echo $booklist[$i]['rating'] ?>
                            </td>
                            <td>
                                <?php echo $booklist[$i]['shelf'] ?>
                            </td>
                        </tr>
                        <?php 
                                    } /* end of php while loop */
                                ?>

                    </tbody>
                </table>
                
                <?php
                    mysqli_close($mysqli);
                ?>
                <!-- //load bar circular
                <div class="loader">
                    <svg viewBox="0 0 32 32" width="32" height="32">
                    <circle id="ud811Spinner" cx="16" cy="16" r="14" fill="none"></circle>
                </svg>
                </div>*/ -->

        </div>
        <!-- Insert link to app.js here -->
        <script type="text/javascript" src="scripts/javaScript/bookList.js"></script>


<?php 
    include("../includes/footer.php"); 
?>
//(function () {
    
    'use strict';

    /* ****** Coming from Db *****
    book = {
        id                  : 0,
        cover_image         : "",
        title               : "",
        author              : "",
        rating              : 5,
        length              : 5060,
        voters              : [],
        shelf               : "",
        amazon_link         : "",
        date_added          : Date,
        date_read           : Date,
        synopsis            : ""
    }

    notice = {
        id                  :2,
        publisher           :11, /* id from user who posted the notice 
        headline            :"",
        content             :""
    }*/

    /* ****** Coming from PHP login ***** 
    $_SESSION['id']
    $_SESSION['first_name']
    $_SESSION['last_name']
    $_SESSION['email']
    $_SESSION['avatar']
    $_SESSION['voted']
    $_SESSION['attending']
    $_SESSION['active']
    $_SESSION['logged_in']

*/
    /* ************************************** 
        All items above are temporary 
    *************************************** */

    const   search          = document.getElementById('search'),        // Search field for searching books
            books           = document.getElementById('books'),         // Book List HTML node
            addBookBtn      = document.getElementById('addBookBtn'),    // Button to go to Add Book Form
            addBookForm     = document.getElementById('addBookForm'),   // Button to submit Book Form    
            notices         = document.getElementById('noticeList'),    // Notice list HTML node  
            addNoticeBtn    = document.getElementById('addNotice'),     // Button to go to Add Notice Form
            addNoticeForm   = document.getElementById('addNoticeForm'); // Button to submit Notice Form    

    let     php             = 'scripts/php/main.php',                           // PHP file
            req             = new XMLHttpRequest(),                     // AJAX Request
            formData        = new FormData(),                           // FormData for Ajax Request
            bookCards = [],                                             // Book Cards  
            noticeCards = [],                                           // Notice Cards  
            bookForm,                                                   // Book Form
            noticeForm,                                                 // Notice Form
            listName,                                                   // Stores name of list in clearList()
            b,                                                          // Book
            i,                                                          // Variable for loop ()
            j,                                                          // Variable for loop ()

            currentUserDetails = {},                                    // Current User information from DB

            bookList,                                                   // Book List from DB
            noticesList,                                                // Notices List from DB    

            Book = function(id){
                let id,                                                 // Id of Book
                open = false,                                           // If detailed view is open
                bookCard,                                               // HTML node for Book Card
                summary,                                                // Summary View of Book Card
                details,                                                // Detailed View of Book Card
                detailsContent,                                         // Content of detailed View of Book Card
                                                                        // HTML structure of book card
                html = '<div class="summary clearfix\"> <img src=\"assets/imgs/defaultBook.jpg\" width=\"100\" height=\"100\" alt=\"Standard-Book-Image\"> <span class=\"short-data\"> <span class=\"title\"></span> <span class=\"author\"></span> <span class=\"rating\"></span> <span class=\"shelf\"></span> </span> <span class=\"actions\"> <button type=\"button\" class=\"open-details\"><span class=\"fas fa-info\"></span></button> <!-- Admin only <button type=\"button\" class=\"edit-datas\"><span class=\"fas fa-edit\"></span></button> <button type=\"button\" class=\"delete-entry\"><span class=\"fas fa-trash\"></span></button> --> </span> </div> <div class=\"details clearfix\"> <div class=\"details-content\"> <figure class=\"details-header\"> <div class=\"cover-img\"> <img src=\"assets/imgs/defaultBook.jpg\" width=\"200\" height=\"200\\" alt=\"Book cover Image\"> </div> <figcaption class=\"details-name\"> <span class=\"details title\"></span> <span class=\"details author\"></span> <span class=\"details rating\"></span> <span class=\"details shelf\"></span> <span class=\"details length\"></span> </figcaption> </figure> <table class=\"details-data\"> <tr class=\"space-bottom\"> <th>Synopsis</th> <td></td> </tr><tr> </tr> <tr class=\"space-bottom\"> <th>Date added</th> <td></td> <th>Date Read</th> <!-- only shows if it has been read --> <td></td> </tr> <tr> <th>Amazon Link</th> <td></td> </tr> </table> <div class=\"details-actions\"> <button type=\"button\" class=\"details-close\"><span class=\"fas fa-times\"></span></button> <button type=\"button\" class=\"edit-datas\"><span class=\"fas fa-edit\"></span></button> <button type=\"button\" class=\"delete-entry\"><span class=\"fas fa-trash\"></span></button> </div> </div> </div>',                                   

                openBtn,                                                // Button to open the detailed view of BookCard
                closeBtn,                                               // Button to close the detailed view of BookCard
                editBtns,                                               // Buttons to edit a BookCard
                deleteBtns;                                             // Buttons to delete a BookCard

                // Function for opening and closing of detailed view from a Book Card
                function toggleBookCard(evt) {

                    var sh,                                             // Height of summary view
                        dh,                                             // Height of detailed view
                        so,                                             // opacity of summary view
                        dop;                                            // Opacity of detailed view

                    //  Shut all other Book Cards if open 
                    for (i = 0; i < bookCards.length; i += 1) {
                        if (bookCards[i].getID() !== ID) {
                            bookCards[i].close();
                        }
                    }

                    //  When a Books Detailed view not open is ("Gopen"-Status = false)
                    if (!open) {
                        sh = so = '0';                                  // Height and Opacity of summary view  to 0
                        dh = detailsContent.clientHeight + 'px';        // Height of the detailed view to the height of it's contents
                        dop = '1';                                      // Opacity of detailed view to 1 (Blend effect)
                        open = true;                                    // Set "open"-Status to true
                    } else {
                        // otherwise ( when a Book Cards detailed view is open)
                        sh = '100px';                                   // Height of the summary view to 100px
                        so = '1';                                       // Opacity of the summary view to 1 (blend effect)
                        dh = dop = '0';                                 // Opacity and Height of detailed view to 0
                        open = false;                                   // Set "open"-Status auf to false
                    }

                    // The values for the summary and detailed view
                    summary.style.height = summary.style.minHeight = sh;
                    summary.style.opacity = so;
                    details.style.height = dh;
                    details.style.opacity = dop;


                }

                // Function to call the Form for editing a Book Card
                function editBookCard(b) {
                    form.start(false, ID);
                }

                // Function to delete a Book Card /*** ADMIN ONLY ***/
                function deleteBook(b) {
                    sendRequest('6', ID);
                }
                
                // Function to create HTML element for Book Card
                function createHTMLEntry() {
  
                    bookCard = document.createElement('LI');            // Create a new LI element
                    bookCard.className = 'bookCard';                    // Assign class
                    bookCard.innerHTML = html;                          // Fill with html structure saved in variable 'html'   

                    // Local variables needed for function
                    let bookInfo = bookList[ID],
                        i,                                              // Variable for loop ()
                        td;                                             // TD element

                    
                    // Set variables assigned to parts of the newly created element.
                    summary         = bookCard.getElementsByClassName('summary')[0];
                    details         = bookCard.getElementsByClassName('details')[0];
                    detailsContent  = details.getElementsByClassName('details-content')[0];
                    title           = bookCard.getElementsByClassName('title');
                    author          = bookCard.getElementsByClassName('author');
                    rating          = bookCard.getElementsByClassName('rating');
                    shelf           = bookCard.getElementsByClassName('shelf');
                    openBtn         = bookCard.getElementsByClassName('open-details')[0];
                    closeBtn        = bookCard.getElementsByClassName('details-close')[0];
                    editBtns        = bookCard.getElementsByClassName('edit-datas');
                    /* deleteBtns = bookCard.getElementsByClassName('delete-entry'); */ /*** ADMIN ONLY ***/
                    
                    // Function to automatically fill fields such as Title and Author for both Sumamry and detailed view
                    function fillFields(field){
                        for (i = 0; i < field.length; i++){
                            field.innerHTML = bookInfo[field];
                        }
                    }    
                    
                    //  Set index of the Book
                    /*summary.getElementsByClassName('number')[0].innerHTML = ID + 1;*/

                    //  Set Cover Image for Book Card, if non given set to default image
                    if (bookInfo.image !== '') {

                        //  For thumbnail view
                        summary.getElementsByTagName('img')[0].src = bookInfo.image;
                        summary.getElementsByTagName('img')[0].alt = 'Foto ' + bookInfo.name + ' ' + bookInfo.surname;

                        //  For detailed view
                        details.getElementsByTagName('img')[0].src = bookInfo.image;
                        details.getElementsByTagName('img')[0].alt = 'Foto ' + bookInfo.name + ' ' + bookInfo.surname;
                    }
                    
                    // Fill fields title, author, rating, shelf for both summary and detailed view
                    fillFields(title);
                    fillFields(author);
                    fillFields(rating);
                    fillFields(shelf);


                    // Book length in detailed view
                    details.getElementsByClassName('length')[0].innerHTML = bookInfo.length;

                    // Set extra details in detailed view table
                    td = details.getElementsByTagName('td');
                    // Synopsis
                    td[0].innerHTML = bookInfo.synopsis;
                    // Date Added
                    td[1].innerHTML = bookInfo.date_added
                    // Date Read
                    td[2].innerHTML = bookInfo.shelf === 'read' ? '<span> Read on: ' + bookInfo['date_read'] + '</span>'  : 'Not yet read';
                    //  Amazon Link
                    td[3].innerHTML = bookInfo['amazon_link'] !== '' ? '<a href="' + bookInfo['amazon_link'] + '" target="_blank">' + bookInfo['amazon_link'] + '</a>' : '';

                    // add open and close functionality
                    openBtn.addEventListener('click', toggleEntry);
                    closeBtn.addEventListener('click', toggleEntry);

                    //  Add the 'click' event listeners to the edit and delete buttons
                    for (i = 0; i < editBtns.length; i += 1) {
                        editBtns[i].addEventListener('click', editBookCard);
                        /* deleteBtns[i].addEventListener('click', deleteBook); */ // /*** ADMIN ONLY ***/
                    }

                    //  Add the completed Book card to the Book List
                    books.appendChild(bookCard);
                }

            };

            /*poll = {
                books               :[{},{},{}],
                userVoted           :1,
                message             :"",
                reminder            : function()       
            },
            meetup = {
                date                :"",
                tagline             :"",
                location            :"",
                coords              :"",
                message             :"",
                attendees           :[],
                userAttendance      :1,
                currentlyReading    : {}
            };

    function setMeetup(){}
    function setPoll(){}*/

    // Function to clear Lists when refreshing from DB
    function clearList(listName) {
            var listToClear = listName;
            // Find list HTML nodes
            var list = listToClear.getElementsByClassName('entry');
            // Remove all given list items from list
            for (i = list.length - 1; i >= 0; i -= 1) {
                listToClear.removeChild(list[i]);
            }
            // Empyt JS List for items 
            listToClear = listName + "Cards";
            listToClear = [];
    }

    // AJAX - Request to send and recieve Data from the DB
    //      * 0    - GET User information from the DB
    //      * 1    - GET Book information from the DB
    //      * 2    - GET Notices information from the DB
    //      * 3    - GET Meetup information from the DB
    //      * 4    - UPDATE book card /*** ADMIN ONLY ***/
    //      * 5    - NEW book card
    //      * 6    - DELETE book card /*** ADMIN ONLY ***/
    //      * 7    - UPDATE notice
    //      * 8    - NEW notice
    //      * 9    - DELETE notice /*** ADMIN ONLY ***/
    //      * 10   - UPDATE current user vote
    //      * 11   - DELETE current user attendance 
    //      * 12   - UPDATE Meetup Information /*** ADMIN ONLY ***/
    // Data in JSON-Format

    function sendRequest(type, data) {
        // Set up Request Form:
        //  - Request Type
        formData.set('request', type);
        //  - Data Type
        formData.set('data', data);
        //  Connection to PHP open
        req.open('POST', php, true);
        //  Send Request
        req.send(formData);
    }

    //  Function to start a Ajax Request
    function RequestState(evt) {
        var n;
        //  Checks that a request is completed (readystate = 4) and loaded (status = 200)
        if (evt.target.readyState === 4 && evt.target.status === 200) {
            // Checks the type of Request:
            switch (formData.get("request")){
            //  - Type 0 - GET user information from the DB
                case "0":
                    //  Closes a form if it is open
                    if (form.getOpen()) {
                        form.toggleForm();
                    }
                    //  clear current User details
                    currentUserDetails = {};
                    //  parse the return from the request as a JSON and save it in "userDetails"
                    currentUserDetails = JSON.parse(this.responseText);
                    break;
            //  - Type 1 - GET books information from the DB
                case "1":
                    //  Closes a form if it is open
                    /*if (form.getOpen()) {
                        form.toggleForm();
                    }*/
                    //  clear current Book List
                    clearList(books);
                    //  parse the return from the request as a JSON and save it in "bookList"
                    bookList = JSON.parse(this.responseText);
                    //  pushes data to the booklist array
                    for (i = 0; i < bookList.length; i += 1) {
                        e = new Book(i);
                        bookCards.push(e);
                    }
                    break;
            //  - Type 2 - GET notices information from the DB
                case "2":
                    //  Closes a form if it is open
                    if (form.getOpen()) {
                        form.toggleForm();
                    }
                    //  clear current notices List
                    clearList(notices);
                    //  parse the return from the request as a JSON and save it in "noticesList"
                    nopticesList = JSON.parse(this.responseText);
                    //  pushes data to the noticeslist array
                    for (i = 0; i < noticesList.length; i += 1) {
                        e = new Notice(i);
                        noticeCards.push(e);
                    }
                    break;
            //  - Type 3 - GET Meetup information from the DB
                case "3":
                    //  Closes a form if it is open
                    if (form.getOpen()) {
                        form.toggleForm();
                    }
                    //  clear current Meetup info
                    nextMeetupDetails = {};
                    //  parse the return from the request as a JSON and save it in "noticesList"
                    nopticesList = JSON.parse(this.responseText);
                    //  pushes data to the noticeslist array
                    for (i = 0; i < noticesList.length; i += 1) {
                        e = new Notice(i);
                        entries.push(e);
                    }
                    break;
            //  otherwise refresh data from DB
                default:
                    if (this.responseText !== '') {
                        //  Send a call to the get the current User details from DB
                        sendRequest('0', '');
                        //  Send a call to the get the Book List from DB
                        sendRequest('1', '');
                        //  Send a call to the get the Notices List from DB
                        sendRequest('2', '');
                        //  Send a call to the get the Meetup Info from DB
                        sendRequest('3', '');
                    }
            }
        }
    }

    //  RequestObject calls the RequestState function when the readystate is changed
    req.addEventListener('readystatechange', RequestState);
    //  Send a call to the get the current User details from DB
    /*sendRequest('0', '');*/
    //  Send a call to the get the Book List from DB
    sendRequest('1', '');
    //  Send a call to the get the Notices List from DB
    /*sendRequest('2', '');*/
    //  Send a call to the get the Meetup Info from DB
    /*sendRequest('3', '');*/


    try {
        window.console.log(currentUserDetails);
        window.console.log(bookCards);
        window.console.log(noticeCards);
    } catch (error){
        window.console.log(error);
    }
//}());
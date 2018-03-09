/* ****** Coming from Db ***** */
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

user = {
    id                  : 0,
    fist_Name           : "",
    last_name           : "",
    email               : "",
    avatar              : "path/to/file",
    password            : "",
    hash                : "",
    active              : 1,
    voted               : 1,
    attending           : 1
}

notice = {
    id                  :2,
    publisher           :11, /* id from user who posted the notice */
    headline            :"",
    content             :""
}

/* ****** Coming from PHP login ***** */
$_SESSION['email'] = $user['email'];
$_SESSION['first_name'] = $user['first_name'];
$_SESSION['last_name'] = $user['last_name'];
$_SESSION['active'] = $user['active'];
$_SESSION['logged_in'] = true;


/* ************************************** 
    All items above are temporary 
*************************************** */

const   search          = document.getElementById(''),  // Search field for searching books
        books           = document.getElementById(''),  // Book List HTML node
        addBookBtn      = document.getElementById(''),  // Button to go to Add Book Form
        editBookBtn     = document.getElementById(''),  // Button to delete Book*** ADMIN ONLY ***
        deleteBookBtn   = document.getElementById(''),  // Button to delete Book *** ADMIN ONLY ***
        subBookForm     = document.getElementById(''),  // Button to submit Book Form    
        notices         = document.getElementById(''),  // Notice list HTML node  
        addNoticeBtn    = document.getElementById(''),  // Button to go to Add Notice Form
        editNoticeBtn   = document.getElementById(''),  // Button to edit Notice *** USER===Publisher ***
        deleteNoticeBtn = document.getElementById(''),  // Button to delete Notice *** ADMIN ONLY ***
        subNoticeForm   = document.getElementById('');  // Button to submit Notice Form    

let     php             = 'php/main.php',               // PHP file
        req             = new XMLHttpRequest(),         // AJAX Request
        formData        = new FormData(),               // FormData for Ajax Request
        bookCards = [],                                 //  Book Cards  
        noticeCards = [],                               //  Notice Cards  
        bookForm,                                       //  Book Form
        noticeForm,                                     //  Notice Form
        listName,                                       // Stores name of list in clearList()
        b,                                              //  Book
        i,                                              //  Variable for loop ()
        j,                                              //  Variable for loop ()
    
        currentUserDetails = {},    

        bookList,                                       // Book List from DB
        noticesList,                                    // Notices List from DB    
        currentUserDetails,                             // Current User information from DB

        book = function(id){
            let id,                                      // Id of Book
            open = false,                                // If detailed view is open
            bookCard,                                    // HTML node for Book Card
            summary,                                     // Summary View of Book Card
            details,                                     // Detailed View of Book Card
            detailsContent,                              // Content of detailed View of Book Card
                
            html = '',                                   // HTML structure of book card
            
            openBtn,                                     // Button to open the detailed view of BookCard
            closeBtn,                                    // Button to close the detailed view of BookCard
            editBtns,                                    // Buttons to edit a BookCard
            deleteBtns;                                  // Buttons to delete a BookCard
            
            // Function for opening and closing of detailed view from a Book Card
            function toggleBookCard(evt) {
                
                var sh,                                  //  Height of summary view
                    dh,                                  //  Height of detailed view
                    so,                                  //  opacity of summary view
                    dop;                                 //  Opacity of detailed view
                
                //  Shut all other Book Cards if open 
                for (i = 0; i < entries.length; i += 1) {
                    if (entries[i].getID() !== ID) {
                        entries[i].close();
                    }
                }
                
                //  When a Books Detailed view not open is ("Gopen"-Status = false)
                if (!open) {
                    sh = so = '0';                              // Height and Opacity of summary view  to 0
                    dh = detailsContent.clientHeight + 'px';    // Height of the detailed view to the height of it's contents
                    dop = '1';                                  // Opacity of detailed view to 1 (Blend effect)
                    open = true;                                // Set "open"-Status to true
                } else {
                    // otherwise ( when a Book Cards detailed view is open)
                    sh = '100px';                               // Height of the summary view to 100px
                    so = '1';                                   // Opacity of the summary view to 1 (blend effect)
                    dh = dop = '0';                             // Opacity and Height of detailed view to 0
                    open = false;                               // Set "open"-Status auf to false
                }
                
                //  The values for the summary and detailed view
                summary.style.height = summary.style.minHeight = sh;
                summary.style.opacity = so;
                details.style.height = dh;
                details.style.opacity = dop;
                
                
            }
            
            //  Function to call the Form for editing a Book Card
            function editEntry(e) {
                form.start(false, ID);
            }
            
            //  Function to delete a Book Card *** ADMIN ONLY ***
            function killEntry(e) {
                sendRequest('4', ID);
            }
            
            
        
        },

        poll = {
            books               :[{},{},{}],
            userVoted           :1,
            message             :"",
            reminder            : function(),       
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
function setPoll(){}

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
//      * 3    - UPDATE book card
//      * 4    - NEW book card
//      * 5    - DELETE book card 
//      * 6    - UPDATE notice
//      * 7    - NEW notice
//      * 8    - DELETE notice 
//      * 9    - UPDATE current user vote
//      * 10   - DELETE current user attendance 
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
            //  - Type 0 - GET user information from the DB
            if (formData.get("request") === "0" |) {
                //  Closes a form if it is open
                if (form.getOpen()) {
                    form.toggleForm();
                }
                //  clear current User details
                currentUserDetails = {};
                //  parse the return from the request as a JSON and save it in "userDetails"
                currentUserDetails = JSON.parse(this.responseText);
                
            //  - Type 1 - GET books information from the DB
            if (formData.get("request") === "1" |) {
                //  Closes a form if it is open
                if (form.getOpen()) {
                    form.toggleForm();
                }
                //  clear current Book List
                clearList(books);
                //  parse the return from the request as a JSON and save it in "bookList"
                bookList = JSON.parse(this.responseText);
                //  pushes data to the booklist array
                for (i = 0; i < bookList.length; i += 1) {
                    e = new Entry(i);
                    entries.push(e);
                }
            } 
            //  - Type 2 - GET notices information from the DB
            if (formData.get("request") === "2" |) {
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
                    e = new Entry(i);
                    entries.push(e);
                }
            } 
            //  otherwise refresh data from DB
            else {
                if (this.responseText !== '') {
                    //  Send a call to the get the current User details from DB
                    sendRequest('0', '');
                    //  Send a call to the get the Book List from DB
                    sendRequest('1', '');
                    //  Send a call to the get the Notices List from DB
                    sendRequest('2', '');
                }
            }
        }
    }
    //  RequestObject calls the RequestState function when the readystate is changed
    req.addEventListener('readystatechange', RequestState);
    //  Send a call to the get the current User details from DB
    sendRequest('0', '');
    //  Send a call to the get the Book List from DB
    sendRequest('1', '');
    //  Send a call to the get the Notices List from DB
    sendRequest('2', '');

    try {
        window.console.log(currentUserDetails);
        window.console.log(bookCards);
        window.console.log(noticeCards);
    } catch (error){
        window.console.log(error);
    }
}());
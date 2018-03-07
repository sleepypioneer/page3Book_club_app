let bookList = [];

let user = function(){
}

let book = function(){
    thumbnail DataView
    fullSize DataView
    push info to bookList
}

$_SESSION['email'] = $user['email'];
$_SESSION['first_name'] = $user['first_name'];
$_SESSION['last_name'] = $user['last_name'];
$_SESSION['active'] = $user['active'];
$_SESSION['logged_in'] = true;

user = {
    id          : 0,
    fist_Name   : "",
    last_name   : "",
    email       : "",
    avatar      : "path/to/file",
    password    : "",
    hash        : "",
    active      : 1,
    voted       : 1,
    attending   : 1
}

book = {
    id          : 0,
    cover_image : "",
    title       : "",
    author      : "",
    rating      : 5,
    length      : 5060,
    voters      : [],
    shelf       : "",
    amazon_link : "",
    date_added  : Date,
    date_read  : Date,
    synopsis   : ""
}

poll = {
    books       :[{},{},{}],
}

meetup = {
    attendees   :[],
    userAttendance:1
}
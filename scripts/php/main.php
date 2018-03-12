<?php

# Include the database
include('dbconnection.php');

#check if a 'request' has been sent
if(isset($_POST["request"])) {
    switch ($_POST["request"]){
        # Request 0 - GET User information from the DB
        case "0":
            break;

        # Request 1 - GET Book information from the DB
        case "1":
            # MySQL request from the "USERS"-Tabel - selects all fields for the current user (*)
            $pointer = mysqli_query($mysqli, "SELECT * FROM books");
            # Set up array to save the data to
            $data = array();

            while ($dataset = mysqli_fetch_assoc($pointer)) {
                #save the properties and their value out of the DB to the a Object
                $set = array(
                    "id"            => $dataset["id"],
                    "cover_image"   => $dataset["cover_image"],
                    "title"         => $dataset["title"],
                    "author"        => $dataset["author"],
                    "rating"        => $dataset["rating"],
                    "length"        => $dataset["length"],
                    "voters"        => $dataset["voters"],
                    "shelf"         => $dataset["shelf"],
                    "amazon_link"   => $dataset["amazon_link"],
                    "date_added"    => $dataset["date_added"],
                    "date_read"     => $dataset["date_read"],
                    "synopsis"      => $dataset["synopsis"]
                );
                # push this set of data to the data array
                array_push($data, $set);
            }

            # close the DB connection
            mysqli_close($mysqli);
            # return the array with the data as a JSON encoded Object
            echo json_encode($data);
            break;

        # Request 2 - GET Notices information from the DB
        case "2":
            
            break;
    
        # Request 3 - GET Meetup information from the DB
        case "3":
            
            break;

        # Request 4 - UPDATE book card ** ADMIN ONLY **
        case "4":
            break;
            
        # Request 5 - NEW book card
        case "5":
            break;
            
        # Request 6 - DELETE book card ** ADMIN ONLY **
        case "6":
            break;
            
        # Request 7 - UPDATE notice
        case "7":
            break;
            
        # Request 8 - NEW notice
        case "8":
            break;
            
        # Request 9 - DELETE notice ** ADMIN ONLY **
        case "9":
            break;
            
        # Request 10 - UPDATE current user vote
        case "10":
            break;
            
        # Request 11 - DELETE current user attendance
        case "11":
            break;
            
        # Request 12 - UPDATE Meetup Information ** ADMIN ONLY **
        case "12":
            break;
            
        default:
            echo "Error!";
    }
} else {
    echo "Fehler!";
}

?>
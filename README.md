# Page 3 Book Club App

I have built this App as a tool for my local Book Club to arrange our reading list, monthly poll & meetings and to be able to post notices for one another. It is built with HTML, CSS, JavaScript and PHP. It is connected to a SQL Database, please see below for downloading the database data file.

##### *Please note this App is currently still in progress*

#### User Stories:

  * Users will be required to sign in to view and add to content, new candidates can see our manifest and apply to join, this must however been signed off by an Admin before they gain access.
    
  * Reading list of current and past books, this list is searchable and users can add to it.
  
  * Each book in the list has the Title, Author, Length (in pages), Synopsis, Rating, Date added, Date read, Shelf (To-Read, Curently-Reading, In-Poll, Read) and a link to Amazon.de for purchasing.
  
  * Additionally the information from the book should be able to be found through the GoodReads API. Editing or deleting of books is to only be accessible from the admin account. (however this back end content management should be built up for the Admin User)
  
  * The monthly poll with the three books assigned to In-Poll shelf will collect users votes. Once a user has voted they will be able to see the current vote totals. If they have not voted and it is close to month end they should be reminded to vote on sign in.
  
  * The notice board will allow for users to put up events or poi for other users, Admin can also use this for group messages. Only admin can remove notices. Only 5 notices will be displayed per page, with the most recent first.
  
  * The meet up page will allow users to see where and when the next meet up will take place and also the current book being read.
  
  * A contact page allows users to be able to contact the admins with ease through the site.


# Server

This App connects to SQL Data base using PHP, you can download the App and import the included SQL Data Base file (book_app.sql) to view the App with it's full capability.

*Please note you will need to be able to run a Server and PHP for Windows I can reccomend XAMPP*
##### https://www.apachefriends.org/download.html

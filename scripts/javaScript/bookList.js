(function () {
    
    'use strict';
    // Variables 
    const tableHeaders = document.querySelectorAll('th'); 
    const searchInput = document.querySelector('.search');
    const suggestions = document.querySelector('.suggestions');
    const searchBox = document.querySelector('#searchBox');
    const clear = document.querySelector('.clear');
    
    
    //Function to search books and display result
    function findMatches(titleToMatch, booklistArray) {
      return booklistArray.filter(book => {
        //find if title or author matches the search
        const regex = new RegExp(titleToMatch, 'gi'); //makes expression from the variable with 'g' global flag and 'i' insentitive to disregard if letters are upper or lowercase
        return book.title.match(regex) || book.author.match(regex); // check if title or author matches
      });
    }

    function displayMatches () {
        let value = searchInput.value;
      const matchArray = findMatches(value, booklistArray);
      let html = matchArray.map(book => {
        const regex = new RegExp(value, 'gi');
        //changes colour of searched for term in title / author
        const bookTitle = book.title.replace(regex, `<span class="hl">${value}</span>`);
        const bookAuthor = book.author.replace(regex, `<span class="hl">${value}</span>`);

        return `
                <tr>
                    <td class="books">
                        ${book.title}
                    </td>
                    <td>
                        ${book.author}
                    </td>
                    <td>
                        ${book.rating}
                    </td>
                    <td>
                        ${book.shelf}
                    </td>
                </tr>
        `;
      }).join(''); //.join('') converts this to a string because map returns an array.
      if(html.length == 0) {
          html = "No books with that Title or Author ~ why not add it"
      }  
      suggestions.innerHTML = html;
    }
    
    function clearInput() {
        // reset serach input to empty
        searchInput.value = "";
        //reset the bookList
        displayMatches();
    }

    
    // Function to sort the table of listed books.
    function sortTable(n, triangle=document.querySelector('.triangle-down')){
      var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
      table = document.querySelector("table");
      switching = true;
      // Set the sorting direction to ascending:
      dir = "asc"; 
      /* Make a loop that will continue until
      no switching has been done: */
      while (switching) {
        // Start by saying: no switching is done:
        switching = false;
        rows = table.getElementsByTagName("TR");
        /* Loop through all table rows (except the
        first, which contains table headers): */
        for (i = 1; i < (rows.length - 1); i++) {
          // Start by saying there should be no switching:
          shouldSwitch = false;
          /* Get the two elements you want to compare,
          one from current row and one from the next: */
          x = rows[i].getElementsByTagName("TD")[n];
          y = rows[i + 1].getElementsByTagName("TD")[n];
          /* Check if the two rows should switch place,
          based on the direction, asc or desc: */
          if (dir == "asc") {
            if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
              // If so, mark as a switch and break the loop:
              shouldSwitch= true;
              break;
            }
          } else if (dir == "desc") {
            if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
              // If so, mark as a switch and break the loop:
              shouldSwitch= true;
              break;
            }
          }
            if(dir !="asc"){
                //if list descending set only this one's triangle to point up
                triangle.removeAttribute('class', 'triangle-down');
                triangle.setAttribute('class', 'triangle-up');
            } else {
                triangle.removeAttribute('class', 'triangle-up');
                triangle.setAttribute('class', 'triangle-down');
            }
        }
        if (shouldSwitch) {
          /* If a switch has been marked, make the switch
          and mark that a switch has been done: */
          rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
          switching = true;
          // Each time a switch is done, increase this count by 1:
          switchcount ++; 
        } else {
          /* If no switching has been done AND the direction is "asc",
          set the direction to "desc" and run the while loop again. */
          if (switchcount == 0 && dir == "asc") {
            dir = "desc";
            switching = true;
          }   
        }
      }
    }
    
    // Get the modal
    var modal = document.getElementById('bookInfo');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

    // Event Listener for when the window loads to do initial sort of Books.
    window.addEventListener('load', function(){sortTable(0)});    

    //Add event listeners to each column head.
    tableHeaders.forEach(tableHeader => tableHeader.addEventListener('click', function(e){
        //change all the triangles from up to down
        document.querySelectorAll('.triangle-up').forEach(arrow => {
            arrow.removeAttribute('class', 'triangle-up');
            arrow.setAttribute('class', 'triangle-down');
        });
        // Run sort table function with clicked column data.
        sortTable(this.dataset.column, this.childNodes[1].childNodes[0]);     
    }));
    
    // Event listener for Book Info Modal
    let books = document.querySelectorAll('.books');
    books.forEach(book => addEventListener('click', function(e){
        let chosenBook = e.target.innerText;
        <?php $book = chosenBook; ?>
        <?php include('./includes/bookInfo.php'); ?>
        document.getElementById('bookInfo').style.display='block';
    }));
    
    // Event listeners for search funtion
    searchInput.addEventListener('change', displayMatches);
    searchInput.addEventListener('keyup', displayMatches); //runs whenever a key is released
    clear.addEventListener('click', clearInput); // clear form and rest Book List
    
    
}());
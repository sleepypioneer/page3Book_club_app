<!-- The Modal -->
<div id="bookInfo" class="modal">
  <span onclick="document.getElementById('bookInfo').style.display='none'" 
class="close" title="Close Modal">&times;</span>
  <!-- Modal Content -->
  <form class="modal-content animate" action="/action_page.php">
      <label for="header"><b>Headline</b></label>
      <input type="text" placeholder="Notice Headline..." name="header" required>

      <label for="content"><b>Content</b></label>
      <input type="textarea" placeholder="Notice content..." name="content" required>

      <input type="submit"/>
  </form>
</div>
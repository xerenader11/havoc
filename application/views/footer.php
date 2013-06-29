  <footer id='footer'>
    <div class='pull-right' style='text-align: right;'>
      <div class='footer-copyright'>&copy; 2011-2013 Mineski, Inc.</div>
    </div>

    <nav>
      <ul>
        <li>
          <a href="/about">About Mineski</a>
        </li>
        <li>
          <a href="mailto:support@mineski.net">Contact</a>
        </li>
        <li>
          <a href="/privacy">Privacy</a>
        </li>
        <li>
          <a href="/terms">Terms</a>
        </li>
        <li>
          <a href='http://infinity.mineski.net' target='_blank'>Mineski Infinity</a>
        </li>
      </ul>
    </nav>
  </footer>

<div id="addContent" style="display: none; width: 600px;">
  <div>Image URL: <textarea id="imgC"></textarea></div>
  <div>Title: <textarea id="titleC"></textarea></div>
  <div>Content: <textarea id="contentC"></textarea></div>
  <div><input type="button" id="addArticle" value="Save" onclick="addArticle();"></div>
</div>

    <script>
        <?php if($this->session->userdata('type') == "admin"){ ?>
            $(".edit-link").html("<img src='/public/img/edit.png'>")
                           .click(function(){

                           })

            $(".delete-link").html("<img src='/public/img/delete.jpg' title='Delete Article'>")
                           .click(function(){
                              $(this).attr("class", "retrieve-link")
                                     .html("<img src='/public/img/retrieve.png'>")

                              activeArticle($(this).attr("id"), "n")
                           }) 

            $(".retrieve-link").html("<img src='/public/img/retrieve.png' title='Retrieve Article'>")
                           .click(function(){
                              $(this).attr("class", "delete-link")
                                     .html("<img src='/public/img/delete.jpg'>")

                              activeArticle($(this).attr("id"), "y")
                           })

            function saveArticle(cid){
              $.ajax({
                type: "POST",
                url: "/index.php/content/updateContent",
                data: { "img": $("#imgC" + cid).val(), "title": $("#titleC" + cid).val(), "content": $("#contentC" + cid).val(), "content_id": cid},
                success: function(){
                  window.location.reload();
                }
              });
            }

            function activeArticle(cid, activate){
              $.ajax({
                type: "POST",
                url: "/index.php/content/updateIsActive",
                data: { "content_id": cid, "act": activate },
                success: function(){
                  window.location.reload();
                }
              });
            }

            function addArticle(){
              $.ajax({
                type: "POST",
                url: "/index.php/content/addContent",
                data: { "img": $("#imgC").val(), "title": $("#titleC").val(), "content": $("#contentC").val(), "page_id": <?php echo $page_id; ?>},
                success: function(){
                  window.location.reload();
                }
              });
            }              
        <?php } ?>
    </script>
  </body>
</html>
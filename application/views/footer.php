
<div id="addContent" style="display: none;">
  <table width="600">
    <tr>
      <td width="100">Image URL:</td>
      <td><textarea id="imgC" style="width: 500px;"></textarea></td>
    </tr>
    <tr>
      <td width="100">Title:</td>
      <td><textarea id="titleC" style="width: 500px;"></textarea></td>
    </tr>
    <tr>
      <td width="100">Snippet:</td>
      <td><textarea id="snippetC" style="width: 500px; height: 150px;"></textarea></td>
    </tr>
    <tr>
      <td width="100">Content:</td>
      <td><textarea id="contentC" style="width: 500px; height: 250px;"></textarea></td>
    </tr>
    <tr>
      <td colspan="2"><center><input type="button" id="addArticle" value="Save" onclick="addArticle();"></center></td>
    </tr>
  </table>
</br></br></br></br></br></br>
</div>

    <script>
        <?php if($this->session->userdata('type') == "admin"){ ?>

            $(".edit-link").html("<img src='/public/img/edit.png'>")


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
                data: { "img": $("#imgC" + cid).val(), "title": $("#titleC" + cid).val(), "content": $("#contentC" + cid).val(), "content_id": cid, "full_content": $("#fcontentC" + cid).val()},
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
                data: { "img": $("#imgC").val(), "title": $("#titleC").val(), "content": $("#contentC").val(), "page_id": <?php echo (!empty($page_id)) ? $page_id : 0; ?>},
                success: function(){
                  window.location.reload();
                }
              });
            }

            function promote(bln, member_id){
              $.ajax({
                type: "POST",
                url: "/index.php/members/promote",
                data: { "bln": bln, "member_id": member_id},
                success: function(){
                  window.location.reload();
                }
              });
            }

            function activateMember(member_id){
              $.ajax({
                type: "POST",
                url: "/index.php/members/activate",
                data: { "member_id": member_id},
                success: function(){
                  window.location.reload();
                }
              });
            }

            function savePhotoVideo(obj){
              $.ajax({
                type: "POST",
                url: "/index.php/gallery/saveObj",
                data: { "type": obj, "url": $('#save' + obj).val(), "caption" :  $('#caption' + obj).val()},
                success: function(){
                  window.location.reload();
                }
              });
            }

        <?php } ?>
    </script>

  <div id="footer">
    <p>Copyright 2006 Truly Simple. Design by <a href="http://www.colorlightstudio.com">Igor Penjivrag</a></p>
  </div>
</div>
</body>
</html>

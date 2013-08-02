<?php include("header.php"); ?>
  <div id="content">
      <h1>Plans and Programs</h1>
      <hr noshade>
      </br>
      <?php for($ctr=0; $ctr<count($contents); $ctr++){ ?>
          <img class="article-image" src="<?php echo $contents[$ctr]['img']; ?>">
          <h2><a href="/index.php/news?id=<?php echo $contents[$ctr]['content_id']; ?>"><?php echo $contents[$ctr]['title']; ?></a></h2>
          <p> By <?php echo $contents[$ctr]['fname']. " " . $contents[$ctr]['lname']; ?> posted
    <time datetime="2013-05-15 13:59:22 +0800" pubdate=""><?php echo $contents[$ctr]['date_created']; ?></time>
    </p>
           <p>
                <a href="#content<?php echo $ctr;?>" class="edit-link"></a>&nbsp;<a href="#" id="<?php echo $contents[$ctr]['content_id']; ?>" class="<?php echo ($contents[$ctr]['is_active'] == 'y') ? 'delete-link' : 'retrieve-link';?>"></a>
            </p>
          <p class="article-excerpt"><?php echo stripslashes($contents[$ctr]['content']); ?></p>
          <hr noshade>
          <br/>

          <div id="content<?php echo $ctr; ?>" style="display: none; width: 600px;">
            <div>Image URL: <textarea id="imgC<?php echo $contents[$ctr]['content_id']; ?>"><?php echo $contents[$ctr]['img']; ?></textarea></div>
            <div>Title: <textarea id="titleC<?php echo $contents[$ctr]['content_id']; ?>"><?php echo $contents[$ctr]['title']; ?></textarea></div>
            <div>Snippet: <textarea id="contentC<?php echo $contents[$ctr]['content_id']; ?>"><?php echo $contents[$ctr]['content']; ?></textarea></div>
            <div>Full Content: <textarea id="fcontentC<?php echo $contents[$ctr]['content_id']; ?>"><?php echo $contents[$ctr]['full_content']; ?></textarea></div>
            <div><input type="button" id="saveArticle" value="Save" onclick="saveArticle(<?php echo $contents[$ctr]['content_id']; ?>);"></div>
          </div>


      <?php } ?>
      <?php if($this->session->userdata('type') == "admin"){ ?>
        </br>
        </br>
        <a href="#addContent" class="add-link btn btn-large pull-left">Add Articles</a>
      <?php } ?>
    <div id="clear"></div>
  </div>
  </br>
<?php include("footer.php"); ?>

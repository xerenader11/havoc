<?php include("header.php"); ?>

<div id="content">
    <div id="left">
      <h1>Welcome to Havoc</h1>
      <?php for($ctr=0; $ctr<count($contents); $ctr++){ ?>
          <img class="article-image" src="<?php echo $contents[$ctr]['img']; ?>">
          <h2><?php echo $contents[$ctr]['title']; ?></h2>
          <p> By <?php echo $contents[$ctr]['fname']. " " . $contents[$ctr]['lname']; ?> posted
    <time datetime="2013-05-15 13:59:22 +0800" pubdate=""><?php echo $contents[$ctr]['date_created']; ?></time>
    </p>
           <p>
                <a href="#content<?php echo $ctr;?>" class="edit-link"></a>&nbsp;<a href="#" id="<?php echo $contents[$ctr]['content_id']; ?>" class="<?php echo ($contents[$ctr]['is_active'] == 'y') ? 'delete-link' : 'retrieve-link';?>"></a>
            </p>
          <p class="article-excerpt"><?php echo stripslashes($contents[$ctr]['content']); ?></p>
          <hr noshade>
          <br/>
      <?php } ?>
      <?php if($this->session->userdata('type') == "admin"){ ?>
        <a href="#addContent" class="add-link btn btn-large pull-left">Add Articles</a>
      <?php } ?>
    </div>
    <div id="right">
      <div class="box">
        <h2>EVENTS</h2>
        <p>The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non characteristic words generators on the Internet. </p>
        <p> <a href="http://www.free-css.com/">Read more about us</a></p>
        <h2>Recent Entries</h2>
        <ul>
          <li><a href="http://www.free-css.com/">Randomised words</a> <i>10 nov 06</i></li>
          <li><a href="http://www.free-css.com/">Look even slightly believable</a> <i>8 nov 06</i></li>
          <li><a href="http://www.free-css.com/">Suffered alteration in form</a> <i>7 nov 06</i></li>
          <li><a href="http://www.free-css.com/">Embarrassing hidden</a> <i>5 nov 06</i></li>
          <li><a href="http://www.free-css.com/">Passages of lorem ipsum</a> <i>3 nov 06</i></li>
        </ul>
        <h2>Write to us</h2>
        <p>There are many variations of passages of Lorem Ipsum available, <a href="http://www.free-css.com/">but the majority</a> have suffered alteration in some form, by injected humour.</p>
   </div>

    <div class="box">
    INSERT SOMETHING HERE.
    </div>
    </div>

    <div id="clear"></div>
  </div>
<?php include("footer.php"); ?>

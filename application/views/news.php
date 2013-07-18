<?php include("header.php"); ?>
<div id="content">
    <div id="left">
          <img class="article-image" src="<?php echo $contents['img']; ?>">
          <h2><a href="/index.php/news?id=<?php echo $contents['content_id']; ?>"><?php echo $contents['title']; ?></a></h2>
          <p> By <?php echo $contents['fname']. " " . $contents['lname']; ?> posted
    <time datetime="2013-05-15 13:59:22 +0800" pubdate=""><?php echo $contents['date_created']; ?></time>
    </p>
          <p class="article-excerpt"><?php echo stripslashes($contents['full_content']); ?></p>
          <hr noshade>
          <br/>

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

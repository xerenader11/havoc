<?php include("header.php"); ?>
  <div id="content">
    <div id="left">
      <h1>Photo Gallery</h1>
        <?php foreach($img as $key => $value) { ?>

          <a href="<?php echo $img[$key]['url']; ?>" data-lightbox="image-gal" title="<?php echo $img[$key]['caption']; ?>">
            <img src="<?php echo $img[$key]['url']; ?>" class="gallery-photo">
          </a>

        <?php } ?>

      <br/><br/>
      <h1>Video Gallery</h1>
        <?php foreach($vid as $key => $value) { ?>

          <a href="<?php echo $vid[$key]['url']; ?>" rel="prettyPhoto" title="">
            <img src="/public/upload/img/forest-light-900.jpg" alt="YouTube" width="60" class="gallery-photo"/>
          </a>

        <?php } ?>
    </div>
    <div id="clear"></div>
  </div>
<?php include("footer.php"); ?>

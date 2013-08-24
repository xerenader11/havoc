<?php include("header.php"); ?>
  <div id="content">
    <div id="left">
      <h1>Photo Gallery</h1>
        <?php foreach($img as $key => $value) { ?>

          <a href="<?php echo $img[$key]['url']; ?>" data-lightbox="image-gal" title="<?php echo $img[$key]['caption']; ?>">
            <img src="<?php echo $img[$key]['url']; ?>" class="gallery-photo">
          </a>

        <?php } ?>
      <?php if($this->session->userdata('type') == "admin"){ ?>
      <br/><br/>
      <h2>Upload File</h2>
      <div class="upload-form">
        <!--<form enctype="multipart/form-data" method="POST">
          <input type="hidden" name="MAX_FILE_SIZE" value="100000" />
          Choose a file to upload: <input name="file" type="file" /><br />
          <input class="upload-button" type="submit" value="Upload File" />
        </form>-->
        <input name="file_upload" id="file_upload" type="file" multiple="false">
      </div>

      <p>----------  or ----------</p>
      <br/>

      <h2>Save Link</h2>
      <div>
        <h3>Link: </h3><textarea id="savephoto"></textarea>
        <h3>Caption: </h3><textarea id="captionphoto"></textarea>
        <input type="button" id="savePhoto" onclick="savePhotoVideo('photo');" value="Submit">
      </div>
      <?php } ?>
      <br/><br/>
      <h1>Video Gallery</h1>
        <?php foreach($vid as $key => $value) { ?>

          <a href="<?php echo $vid[$key]['url']; ?>" rel="prettyPhoto" title="">
            <img src="/havoc/public/upload/img/forest-light-900.jpg" alt="YouTube" width="60" class="gallery-photo"/>
          </a>

        <?php } ?>

        <?php if($this->session->userdata('type') == "admin"){ ?>
        <br/>
        <h2>Save Link</h2>
      <div>
        <h3>Link: </h3><textarea id="savevideo"></textarea>
        <h3>Caption: </h3><textarea id="captionvideo"></textarea>
        <input type="button" id="saveVideo" onclick="savePhotoVideo('video');" value="Submit">
      </div>
      <?php } ?>
    </div>



    <div id="clear"></div>
  </div>
<?php include("footer.php"); ?>

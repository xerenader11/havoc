<head>
<title>HAVOC - Auto Group</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<link rel="stylesheet" type="text/css" href="/public/css/style.css" media="screen" />
<link href="/public/jquery-ui/nyroModal/styles/nyroModal.css" media="all" rel="stylesheet" type="text/css" />
<script src="/public/jquery-ui/nyroModal/js/jquery.nyroModal.custom.min.js" type="text/javascript"></script>
<script type="text/javascript" language="javascript" src="/public/DataTables-1.9.4/media/js/jquery.dataTables.min.js"></script>
<script src="/public/lightbox/js/lightbox-2.6.min.js"></script>
<script src="/public/js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>

<script type="text/javascript">
		$(function() {
		  $('.edit-link').nyroModal();
		  $('.add-link').nyroModal();
		  $('.active-member').nyroModal();
		  $('.inactive-member').nyroModal();
		  $('.add-members').nyroModal();
		});

		$(document).ready(function() {
		    $('#example').dataTable();
		    $("a[rel^='prettyPhoto']").prettyPhoto();		} );
</script>

<style type="text/css" title="currentStyle">
			@import "/public/DataTables-1.9.4/media/css/demo_page.css";
			@import "/public/DataTables-1.9.4/media/css/demo_table.css";
			@import "/public/lightbox/css/lightbox.css";
			@import "/public/css/prettyPhoto.css";
</style>

</head>
<body>
<div id="wrap">
  <div id="top">
    <h2> <a href="/">HAVOC</a></h2>
	 <div id="signin">

  		<?php if(!$this->session->userdata('email')){ ?>
					<td>
						<a href="/index.php/signIn" class="">Sign In</a>
					</td>

			<?php }else{ ?>

					<td>
						<a href="/index.php/settings">Welcome, <font color="red"><?php echo $this->session->userdata('fname') . " " . $this->session->userdata('lname'); ?></font></a>
					</td>
					<td>
						<a href="/index.php/signOut" class="">Sign Out</a>
					</td>

		<?php } ?>
  </div>
    <div id="menu">
      <ul>
        <li><a href="/" class="current">HOME</a></li>
        <li><a href="/index.php/plans">PLANS AND PROGRAMS</a></li>
        <?php if($this->session->userdata('email')){ ?>
        <li><a href="/index.php/financial">FINANCIAL STATEMENT</a></li>
        <li><a href="/index.php/members">MEMBERS</a></li>
        <?php } ?>
        <li><a href="/index.php/coreValues">CORE VALUES</a></li>
		<li><a href="/index.php/gallery">GALLERY</a></li>
		<li><a href="/index.php/about">ABOUT</a></li>
      </ul>
    </div>


</div>

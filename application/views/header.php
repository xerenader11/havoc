<head>
<title>Truly Simple</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<link rel="stylesheet" type="text/css" href="/havoc/public/css/style.css" media="screen" />
<link href="/havoc/public/jquery-ui/nyroModal/styles/nyroModal.css" media="all" rel="stylesheet" type="text/css" />
<script src="/havoc/public/jquery-ui/nyroModal/js/jquery.nyroModal.custom.min.js" type="text/javascript"></script>
<script type="text/javascript" language="javascript" src="/havoc/public/DataTables-1.9.4/media/js/jquery.dataTables.min.js"></script>
<script src="/havoc/public/lightbox/js/lightbox-2.6.min.js"></script>
<script src="/havoc/public/js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>

<script type="text/javascript">
		$(function() {
		  $('.edit-link').nyroModal();
		  $('.add-link').nyroModal();
		  $('.active-member').nyroModal();
		  $('.inactive-member').nyroModal();
		});

		$(document).ready(function() {
		    $('#example').dataTable();
		    $("a[rel^='prettyPhoto']").prettyPhoto();		} );
</script>

<style type="text/css" title="currentStyle">
			@import "/havoc/public/DataTables-1.9.4/media/css/demo_page.css";
			@import "/havoc/public/DataTables-1.9.4/media/css/demo_table.css";
			@import "/havoc/public/lightbox/css/lightbox.css";
			@import "/havoc/public/css/prettyPhoto.css";
</style>

</head>
<body>
<div id="wrap">
  <div id="top">
    <h2> <a href="http://localhost/trulysimple/">HAVOC</a></h2>
	 <div id="signin">
	 
  		<?php if(!$this->session->userdata('email')){ ?>
		
							
								<td>
									<a href="/havoc/index.php/signIn" class="">Sign In</a>
								</td>
								<td>
									<a href="/havoc/index.php/signUp" class="">Register</a>
								</td>
							
						<?php }else{ ?>
							
								<td>
									<a href="/havoc/index.php/settings">Welcome, <font color="red"><?php echo $this->session->userdata('fname') . " " . $this->session->userdata('lname'); ?></font></a>
								</td>
								<td>
									<a href="/havoc/index.php/signOut" class="">Sign Out</a>
								</td>
						
					<?php } ?>
  </div>
    <div id="menu">
      <ul>
        <li><a href="/" class="current">HOME</a></li>
        <li><a href="/index.php/plans">PLANS AND PROGRAMS</a></li>
        <?php if($this->session->userdata('email')){ ?>
        <li><a href="/index.php/financial">FINANCIAL STATEMENT</a></li>
        <li><a href="/index.php/members">MEMBER ACTIVATION</a></li>
        <?php } ?>
        <li><a href="/index.php/coreValues">CORE VALUES</a></li>
		<li><a href="/index.php/gallery">GALLERY</a></li>
		<li><a href="/index.php/about">ABOUT</a></li>
      </ul>
    </div>
  
 
</div>

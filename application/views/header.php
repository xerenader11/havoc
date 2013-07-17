<head>
<title>Truly Simple</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<link rel="stylesheet" type="text/css" href="/public/css/style.css" media="screen" />
<link href="/public/jquery-ui/nyroModal/styles/nyroModal.css" media="all" rel="stylesheet" type="text/css" />
<script src="/public/jquery-ui/nyroModal/js/jquery.nyroModal.custom.min.js" type="text/javascript"></script>
<script type="text/javascript" language="javascript" src="/public/DataTables-1.9.4/media/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
		$(function() {
		  $('.edit-link').nyroModal();
		  $('.add-link').nyroModal();
		});

		$(document).ready(function() {
		    $('#example').dataTable();
		} );
</script>
<style type="text/css" title="currentStyle">
			@import "/public/DataTables-1.9.4/media/css/demo_page.css"; @import "/public/DataTables-1.9.4/media/css/header.ccss";
			@import "/public/DataTables-1.9.4/media/css/demo_table.css";
</style>
</head>
<body>
<div id="wrap">
  <div id="top">
    <h2> <a href="http://localhost/trulysimple/">HAVOC</a></h2>
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
  <div id="salutation">
  		<?php if(!$this->session->userdata('email')){ ?>
							<ul>
								<li>
									<a href="/index.php/signIn" class="">Sign In</a>
								</li>
								<li>
									<a href="/index.php/signUp" class="">Register</a>
								</li>
							</ul>
						<?php }else{ ?>
							<ul>
								<li>
									<a href="/index.php/settings">Welcome, <font color="red"><?php echo $this->session->userdata('fname') . " " . $this->session->userdata('lname'); ?></font></a>
								</li>
								<li>
									<a href="/index.php/signOut" class="">Sign Out</a>
								</li>
							</ul>
						<?php } ?>
  </div>
<!--<!DOCTYPE html>
<html xmlns:og='http://ogp.me/ns#'>
	<head>
		<script type="text/javascript">var NREUMQ=NREUMQ||[];NREUMQ.push(["mark","firstbyte",new Date().getTime()]);
		</script>
		<style>
			.sign-in { width: 100%; text-align: center; }
			.main-sign-in { width: 98% !important;}
			.div-Email { padding-top: 50px; padding-bottom: 10px; }
			.div-Pass { padding-bottom: 20px; }
			.about { background: url('') !important; background-color: black!important; }
			#register { width: 110px; height: 45px; }
			.edit-link img{ width:25px;}
			.delete-link img{ width:28px;}
			.retrieve-link img{ width:28px;}
		</style>
		<title>About - Havoc</title>
		<link href="//cdn.mineski.s3.amazonaws.com/assets/application-0c4b232e7ed08ed38843d55fa92febf6.css" media="all" rel="stylesheet" type="text/css" />
		<script src="//cdn.mineski.s3.amazonaws.com/assets/application-63020e4f3536a6f1b2020ecd1b6b06d2.js" type="text/javascript"></script>
		<link href="//cdn.mineski.s3.amazonaws.com/assets/favicon-3805169ccb7c3e64ed2da1ceb9b66443.png" rel="shortcut icon" type="image/vnd.microsoft.icon" />

		<link href="/public/jquery-ui/nyroModal/styles/nyroModal.css" media="all" rel="stylesheet" type="text/css" />
		<script src="/public/jquery-ui/nyroModal/js/jquery.nyroModal.custom.min.js" type="text/javascript"></script>
	</head>

	<body class='about' id='home'>
		<div id='fb-root'>
			<script>
			    (function(d, s, id) {
			      var js, fjs = d.getElementsByTagName(s)[0];
			      if (d.getElementById(id)) return;
			      js = d.createElement(s); js.id = id;
			      js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=123052287777145";
			      fjs.parentNode.insertBefore(js, fjs);
			    }(document, 'script', 'facebook-jssdk'));
			</script>

			<script type="text/javascript">
				$(function() {
				  $('.edit-link').nyroModal();
				  $('.add-link').nyroModal();
				});
			</script>
		</div>

		<header id='header'>
			<div class='right-half'>
				<div id='top-banner'>
					<a href='http://www.facebook.com/pages/GIGABYTE-Philippines/119382288144521' onClick="_gaq.push(['_trackEvent', 'Advertisements', 'Ad Click', 'Gigabyte Header Banner']);" rel='nofollow' style='margin:0;height:60px;display:block;' target='_blank'>
						<img alt='ASUS' src='http://cdn.mineski.net/images/vendor/gigabyte-468x60.gif'>
					</a>
				</div>
			</div>

			<h1 id='logo'><a href="/">Mineski.net</a></h1>
		</header>

<div id='wrapper'>
	<div id='inner-wrap'>
		<div id='zenith'>
			<div class='inner'>
				<div class='clearfix'>
					<div id='site-stats'>
						<span class='divider'>&#124;</span>
						<span class='emphasis'>Sat, 18 May 08:18 PHT</span>
					</div>

					<nav id='core-nav'>
						<?php if(!$this->session->userdata('email')){ ?>
							<ul>
								<li>
									<a href="/index.php/signIn" class="">Sign In</a>
								</li>
								<li>
									<a href="/index.php/signUp" class="">Register</a>
								</li>
							</ul>
						<?php }else{ ?>
							<ul>
								<li>
									<a href="/index.php/settings">Welcome, <font color="red"><?php echo $this->session->userdata('fname') . " " . $this->session->userdata('lname'); ?></font></a>
								</li>
								<li>
									<a href="/index.php/signOut" class="">Sign Out</a>
								</li>
							</ul>
						<?php } ?>
					</nav>

				</div>
			</div>
		</div>

	<aside id='directory'>
		<div class='directory-inner'>
			<ul class='pull-left' id='tags-nav'>
				<li>
					<a href="/">Home</a>
				</li>
				<li>
					<a href="/index.php/plans">Plans and Programs</a>
				</li>
				<?php if($this->session->userdata('email')){ ?>
					<li>
						<a href="/index.php/financial">Financial Statement</a>
					</li>
					<li>
						<a href="/index.php/members">Member Activation</a>
					</li>
				<?php } ?>
				<li>
					<a href="/index.php/coreValues">Core Values</a>
				</li>
				<li>
					<a href="/index.php/gallery">Gallery</a>
				</li>
				<li class="active">
					<a href="/index.php/about">About</a>
				</li>
			</ul>

			<div class='social-media'>
				<a href="http://www.facebook.com/mineskidotnet" class="facebook" rel="nofollow" target="_blank" title="Like us on Facebook!"></a>
				<a href="http://twitter.com/mineski" class="twitter" rel="nofollow" target="_blank" title="Follow us on Twitter!"></a>
			</div>

			<div id='cse-search-box'>
				<form action='/search' class='pull-left'>
					<div>
						<input name='cx' type='hidden' value='001171155721843178657:refk_nrtxoy'>
						<input name='cof' type='hidden' value='FORID:11'>
						<input name='ie' type='hidden' value='UTF-8'>
						<input class='search-query' name='q' placeholder='Search Havoc...' size='25' type='text'>
						<script src='http://www.google.com/cse/brand?form=cse-search-box&amp;lang=en' type='text/javascript'></script>
						</input>
						</input>
						</input>
						</input>
					</div>
				</form>
			</div>
		</div>
	</aside>-->

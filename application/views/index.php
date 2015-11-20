<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <!-- DNS prefetch -->
  <link rel=dns-prefetch href="//fonts.googleapis.com">

  <!-- Use the .htaccess and remove these lines to avoid edge case issues.
       More info: h5bp.com/b/378 -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>Inventory And Point of Sales</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile viewport optimized: j.mp/bplateviewport -->
  <meta name="viewport" content="width=device-width,initial-scale=1">

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->

  <!-- CSS: implied media=all -->
  <!-- CSS concatenated and minified via ant build script-->
  <link rel="stylesheet" href="<?=base_url();?>/asset/css/style.css"> <!-- Generic style (Boilerplate) -->
  <link rel="stylesheet" href="<?=base_url();?>/asset/css/960.fluid.css"> <!-- 960.gs Grid System -->
  <link rel="stylesheet" href="<?=base_url();?>/asset/css/main.css"> <!-- Complete Layout and main styles -->
  <link rel="stylesheet" href="<?=base_url();?>/asset/css/buttons.css"> <!-- Buttons, optional -->
  <link rel="stylesheet" href="<?=base_url();?>/asset/css/lists.css"> <!-- Lists, optional -->
  <link rel="stylesheet" href="<?=base_url();?>/asset/css/icons.css"> <!-- Icons, optional -->
  <link rel="stylesheet" href="<?=base_url();?>/asset/css/notifications.css"> <!-- Notifications, optional -->
  <link rel="stylesheet" href="<?=base_url();?>/asset/css/typography.css"> <!-- Typography -->
  <link rel="stylesheet" href="<?=base_url();?>/asset/css/forms.css"> <!-- Forms, optional -->
  <link rel="stylesheet" href="<?=base_url();?>/asset/css/tables.css"> <!-- Tables, optional -->
  <link rel="stylesheet" href="<?=base_url();?>/asset/css/charts.css"> <!-- Charts, optional -->
  <link rel="stylesheet" href="<?=base_url();?>/asset/css/jquery-ui-1.8.15.custom.css"> <!-- jQuery UI, optional -->
  <!-- end CSS-->

  <!-- Fonts -->
  <link href="//fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet" type="text/css">
  <!-- end Fonts-->

  <!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->

  <!-- All JavaScript at the bottom, except for Modernizr / Respond.
       Modernizr enables HTML5 elements & feature detects; Respond is a polyfill for min/max-width CSS3 Media Queries
       For optimal performance, use a custom Modernizr build: www.modernizr.com/download/ -->
  <script src="<?=base_url();?>/asset/js/libs/modernizr-2.0.6.min.js"></script>
</head>

<body id="top">

  <!-- Begin of #container -->
  <div id="container">
  	<!-- Begin of #header -->
    <div id="header-surround"><header id="header">

    	<!-- Place your logo here -->
		<h1 class="logo">Kerendi Developers</h1>

		<!-- Divider between info-button and the toolbar-icons -->
		<div class="divider-header divider-vertical"></div>

		<!-- Info-Button -->
		<a href="javascript:void(0);" onclick="$('#info-dialog').dialog({ modal: true });"><span class="btn-info"></span></a>

			<!-- Modal Box Content -->
			<div id="info-dialog" title="About" style="display: none;">
				<p>
				      SOme Content
				</p>

			</div> <!--! end of #info-dialog -->

		<!-- Begin from Toolbox -->
		<ul class="toolbox-header">
			<!-- First entry -->

		</ul>

		<!-- Begin of #user-info -->
		<div id="user-info">
			<p>
				<span class="messages">Hello <b><?=$name;?></b> </span>
				<a href="<?=site_url("awal/logout");?>" class="button red">Logout</a>
			</p>
		</div> <!--! end of #user-info -->

    </header></div> <!--! end of #header -->

    <div class="fix-shadow-bottom-height"></div>

	<!-- Begin of Sidebar -->
    <aside id="sidebar">

    	<!-- Search -->
    	<div id="search-bar">
			<form id="search-form" name="search-form" action="searchs.php" method="GET">
				<input type="text" id="query" name="product" autocomplete="off" placeholder="Search">
			</form>
		</div> <!--! end of #search-bar -->

		<!-- Begin of #login-details -->
		<section id="login-details">
			<?php if (!empty($photo_ses) AND $photo_ses != ''){?>
    			<img class="img-left framed" src="<?=base_url();?>/asset/img/photo/<?=$photo_ses;?>" alt="Hello Admin" width="80">
    		<?php } else{?>
    			<img class="img-left framed" src="<?=base_url();?>/asset/img/misc/avatar_small.png" alt="Hello Admin">
    		<?php } ?>

    		<h3>Logged in as</h3>
    		<h2><a class="user-button" href="javascript:void(0);">
    			<?php if (!empty($level) AND $level == 'Administrator'){?>
    			Administrator
    			<?php } else{ ?>
    			Sales
    			<?php }?>
    			&nbsp;<span class="arrow-link-down"></span></a></h2>
    		<ul class="dropdown-username-menu">
    			<li><a href="users.php?module=profile">Profile</a></li>
    			<li><a href="login.php?module=logout">Logout</a></li>
    		</ul>

    		<div class="clearfix"></div>
  		</section> <!--! end of #login-details -->
    	<!-- Begin of Navigation -->
    	<nav id="nav">
	    	<ul class="menu collapsible shadow-bottom">
	    		<li><a href="index.php"><img src="<?=base_url();?>/asset/img/icons/packs/fugue/16x16/dashboard.png">Home<span class="badge"></span></a></li>

	    		<li><a href="#" class="current"><img src="<?=base_url();?>/asset/img/icons/packs/fugue/16x16/application-form.png">Management Public</a>
					<ul class="sub">
	    				<li><a href="<?=site_url();?>/users">Users</a></li>
	    				<li><a href="<?=site_url();?>/suppliers">Supplier</a></li>
	    			</ul>
				</li>
				<li><a href="#" class="current"><img src="<?=base_url();?>/asset/img/icons/packs/fugue/16x16/application-form.png">Management Products</a>
					<ul class="sub">
	    				<li><a href="<?=site_url();?>/Categories">Categories</a></li>
	    				<!-- <li><a href="merks.php">Merks</a></li> -->
	    				<li><a href="<?=site_url();?>/Products">Products</a></li>
	    			</ul>
				</li>
	    		<li><a href="#"><img src="<?=base_url();?>/asset/img/icons/packs/fugue/16x16/table.png">Transaction</a>
					<ul class="sub">
	    				<li><a href="<?=site_url();?>/Sales">Sales</a></li>
	    				<li><a href="<?=site_url();?>/Buys">Buys</a></li>
	    			</ul>
				</li>
	    		<li><a href="<?=site_url();?>/Reports"><img src="<?=base_url();?>/asset/img/icons/packs/fugue/16x16/chart.png">Report</a></li>
	    		<li><a href="<?=site_url();?>/Awal/logout"><img src="<?=base_url();?>/asset/img/icons/packs/fugue/16x16/dashboard.png">Logout</a></li>
	    	</ul>
    	</nav> <!--! end of #nav -->

    </aside> <!--! end of #sidebar -->

    <!-- Begin of #main -->
    <div id="main" role="main">

    	<!-- Begin of titlebar/breadcrumbs -->
		<div id="title-bar">
			<ul id="breadcrumbs">
				<li><a href="index.php" title="Home"><span id="bc-home"></span></a></li>
				<li class="no-hover">Forms</li>
			</ul>
		</div> <!--! end of #title-bar -->

		<div class="shadow-bottom shadow-titlebar"></div>

		<!-- Begin of #main-content -->
		<div id="main-content">
			<div class="container_12">

			<?php include "content.php";?>


			<div class="clear"></div>


			<div class="clear height-fix"></div>

		</div></div> <!--! end of #main-content -->
  </div> <!--! end of #main -->


    <footer id="footer"><div class="container_12">
		<div class="grid_12">
    		<div class="footer-icon align-center"><a class="top" href="#top"></a></div>
		</div>
    </div></footer>
  </div> <!--! end of #container -->


  <!-- JavaScript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="<?=base_url();?>/asset/js/libs/jquery-1.6.2.min.js"><\/script>')</script>


  <!-- scripts concatenated and minified via ant build script-->
  <script defer src="<?=base_url();?>/asset/js/plugins.js"></script> <!-- lightweight wrapper for consolelog, optional -->
  <script defer src="<?=base_url();?>/asset/js/mylibs/jquery-ui-1.8.15.custom.min.js"></script> <!-- jQuery UI -->
  <script defer src="<?=base_url();?>/asset/js/mylibs/jquery.notifications.js"></script> <!-- Notifications  -->
  <script defer src="<?=base_url();?>/asset/js/mylibs/jquery.uniform.min.js"></script> <!-- Uniform (Look & Feel from forms) -->
  <script defer src="<?=base_url();?>/asset/js/mylibs/jquery.validate.min.js"></script> <!-- Validation from forms -->
  <script defer src="<?=base_url();?>/asset/js/mylibs/jquery.dataTables.min.js"></script> <!-- Tables -->
  <script defer src="<?=base_url();?>/asset/js/mylibs/jquery.tipsy.js"></script> <!-- Tooltips -->
  <script defer src="<?=base_url();?>/asset/js/mylibs/excanvas.js"></script> <!-- Charts -->
  <script defer src="<?=base_url();?>/asset/js/mylibs/jquery.visualize.js"></script> <!-- Charts -->
  <script defer src="<?=base_url();?>/asset/js/mylibs/jquery.slidernav.min.js"></script> <!-- Contact List -->
  <script defer src="<?=base_url();?>/asset/js/common.js"></script> <!-- Generic functions -->
  <script defer src="<?=base_url();?>/asset/js/script.js"></script> <!-- Generic scripts -->
  <script type="text/javascript">
	$().ready(function() {

		/*
		 * Form Validation
		 */
		$.validator.setDefaults({
			submitHandler: function(e) {
				$.jGrowl("Form was successfully submitted.", { theme: 'success' });
				$(e).parent().parent().fadeOut();
				v.resetForm();
				v2.resetForm();
				v3.resetForm();
			}
		});
		var v = $("#create-user-form").validate();
		jQuery("#reset").click(function() { v.resetForm(); $.jGrowl("User was not created!", { theme: 'error' }); });

		var v2 = $("#write-message-form").validate();
		jQuery("#reset2").click(function() { v2.resetForm(); $.jGrowl("Message was not sent.", { theme: 'error' }); });

		var v3 = $("#create-folder-form").validate();
		jQuery("#reset3").click(function() { v3.resetForm(); $.jGrowl("Folder was not created!", { theme: 'error' }); });

		var validateform = $("#validate-form").validate();
		$("#reset-validate-form").click(function() {
			validateform.resetForm();
			$.jGrowl("You resetted the form.", { theme: 'error' });
		});

		/*
		 * Datepicker
		 */
		$( "#datepicker_awal" ).datepicker();
		$( "#datepicker_akhir" ).datepicker();
	});
  </script>
  <!-- end scripts-->

  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->
</body>
</html>

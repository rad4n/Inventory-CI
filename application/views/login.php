<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="<?php echo base_url();?>asset/css/style.css"> <!-- Generic style (Boilerplate) -->
	<link rel="stylesheet" href="<?php echo base_url();?>asset/css/960.fluid.css"> <!-- 960.gs Grid System -->
	<link rel="stylesheet" href="<?php echo base_url();?>asset/css/main.css"> <!-- Complete Layout and main styles -->
	<link rel="stylesheet" href="<?php echo base_url();?>asset/css/buttons.css"> <!-- Buttons, optional -->
	<link rel="stylesheet" href="<?php echo base_url();?>asset/css/lists.css"> <!-- Lists, optional -->
	<link rel="stylesheet" href="<?php echo base_url();?>asset/css/icons.css"> <!-- Icons, optional -->
	<link rel="stylesheet" href="<?php echo base_url();?>asset/css/notifications.css"> <!-- Notifications, optional -->
	<link rel="stylesheet" href="<?php echo base_url();?>asset/css/typography.css"> <!-- Typography -->
	<link rel="stylesheet" href="<?php echo base_url();?>asset/css/forms.css"> <!-- Forms, optional -->
	<link rel="stylesheet" href="<?php echo base_url();?>asset/css/tables.css"> <!-- Tables, optional -->
	<link rel="stylesheet" href="<?php echo base_url();?>asset/css/charts.css"> <!-- Charts, optional -->
	<link rel="stylesheet" href="<?php echo base_url();?>asset/css/jquery-ui-1.8.15.custom.css"> <!-- jQuery UI, optional -->
</head>

<body class="special-page">
	<!-- Begin of #container -->
	<div id="container">

	<!-- Begin of LoginBox-section -->
	<section id="login-box">
		<div class="block-border">
			<?php if(!empty($error)){
				 if ($error == 'error'){?>
				<font color="#fff">Username/Password Anda salah, silahkan coba lagi.</font>
			<?php } elseif ($error == 'logout'){?>
				<font color="#fff"><?=$message;?></font>
			<?php }
			}?>

			<div class="block-header">
				<h1>Login</h1>
			</div>
			<form id="login-form" class="block-content form" action="<?=$action;?>" method="post">
			<p class="inline-small-label">
				<label for="username">Username</label>
				<input type="text" name="username" class="required">
			</p>
			<p class="inline-small-label">
				<label for="password">Password</label>
				<input type="password" name="pass" class="required">
			</p>
			<p>
				<label> Copyright &copy; 2015 Krendi Developers<br>Connecting Inovation<br>
					Point of Sales Application Ver 1.0.
				</label>
			</p>

			<div class="clear"></div>

			<!-- Begin of #block-actions -->
			<div class="block-actions">
				<ul class="actions-right">
					<li><input type="submit" class="button" value="Login"></li>
				</ul>
			</div> <!--! end of #block-actions -->
			</form>
		</div>
	</section> <!--! end of #login-box -->
</div> <!--! end of #container -->

</body>
</html>

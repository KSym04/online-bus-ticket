<?php
/**
 * Main Header
 */
?>
<!doctype html>
<html class="no-js" lang="">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title><?php echo $site_title; ?></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato|Montserrat:500">
  <link rel="stylesheet" href="assets/css/normalize.css">
  <link rel="stylesheet" href="assets/css/main.css">
</head>

<body class="<?php echo $active_page; ?>">

	<div id="page">

		<header class="header">
			<div class="header-inner-top">
				<div class="wrap clearfix">

					<div class="contact-info">
						<a href="mailto:roy_dan_saludo@dlsl.edu.ph"><span class="far fa-envelope"></span> roy_dan_saludo@dlsl.edu.ph</a>
					</div><!-- .contact-info -->

					<div class="login">
						<a href="#">Login</a>
						<div id="login-box">
							<form method="post">
								<div class="form-row">
									<label for="email">Email</label>
									<input id="email" type="text" name="user_email" />
								</div>

								<div class="form-row">
									<label for="password">Password</label>
									<input id="password" type="password" name="user_password" />
								</div>

								<div class="form-row">
									<input type="submit" value="Login" />
								</div>
							</form>
						</div>
					</div><!-- .login -->

				</div>
			</div>

			<div class="header-inner-bottom">
				<div class="wrap clearfix">

					<div class="branding">
						<a href="<?php echo BASE_URL; ?>"><img src="assets/img/jam-liner-logo.png" alt="JAM Liner Inc." /></a>
					</div>

					<div class="navigation">
						<nav class="menu">
							<ul>
								<li><a class="menu-home" href="<?php echo BASE_URL; ?>">Home</a></li>
								<li><a class="menu-book-ticket" href="<?php echo BASE_URL; ?>book-ticket.php">Book Ticket</a></li>
							</ul>
						</nav>
					</div>

				</div>
			</div>
		</header><!-- .header -->

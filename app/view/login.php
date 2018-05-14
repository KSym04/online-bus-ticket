<div class="content">

	<div class="login-page-wrap">
		<div class="login-page-inner">
			<h1>Login Account</h1>
			<?php if( isset( $_COOKIE['user_logged_in'] ) ) : ?>
				<div class="form-row">
					<p>You are already logged in.</p>
				</div>
			<?php else : ?>
				<form method="post" action="<?php echo BASE_URL; ?>login.php" class="login-page-form">
					<div class="form-row">
						<input type="text" name="user_name" placeholder="Username" />
					</div>
					<div class="form-row">
						<input type="password" name="user_password" placeholder="Password" />
					</div>
					<div class="form-row">
						<input type="submit" name="submit" value="Login" />
					</div>
				</form>
				<?php echo $error_message; ?>
			<?php endif; ?>
		</div>
	</div>

</div><!-- .content -->

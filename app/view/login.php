<div class="content">

	<div class="login-page-wrap">
		<div class="login-page-inner">
			<h1>Login Account</h1>
			<?php if( isset( $_COOKIE['user_logged_in'] ) ) : ?>
				<div class="form-row">
					<p>You are already logged in.</p>
				</div>
			<?php else : ?>
				<?php echo $error_message; ?>
			<?php endif; ?>
		</div>
	</div>

</div><!-- .content -->

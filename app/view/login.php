<?php
// set message default.
$error_message = '';

if( ! empty( $_POST['submit'] ) ) {

	$user_name = mysqli_real_escape_string( $mysqli, $_POST['user_name'] );
	$user_password = mysqli_real_escape_string( $mysqli, $_POST['user_password'] );

	// checking empty fields
	if( empty($user_name) || empty($user_password) ) {
		$error_message = '<div class="error-message">Cannot process login empty field detected.</div>';
	} else {

		$user_password = substr( md5( $user_password ), 0, 19 );

		// insert data to database.
		$result = mysqli_query( $mysqli, "SELECT * FROM obt_users WHERE user_name = '$user_name' AND user_password = '$user_password'");
		if( $result->num_rows > 0 ) {
			$row_result = mysqli_fetch_assoc( $result );
			setcookie( "user_logged_in", true, time() + 3600 );
			setcookie( "user_name", $row_result['user_name'], time() + 3600 );
			setcookie( "user_fname", $row_result['user_fname'], time() + 3600 );
			setcookie( "user_lname", $row_result['user_lname'], time() + 3600 );
			setcookie( "user_email", $row_result['user_email'], time() + 3600 );
			$error_message = '<div class="success-message">Successfully login.</div>';
		}

	}
}
?>
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
					<?php echo $error_message; ?>
				</form>
			<?php endif; ?>
		</div>
	</div>

</div><!-- .content -->

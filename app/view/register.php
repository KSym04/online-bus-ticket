<?php
// set message default.
$error_message = '';

if( ! empty( $_POST['submit'] ) ) {

	$user_name = mysqli_real_escape_string( $mysqli, $_POST['user_name'] );
	$user_fname = mysqli_real_escape_string( $mysqli, $_POST['user_fname'] );
	$user_lname = mysqli_real_escape_string( $mysqli, $_POST['user_lname'] );
	$user_password = mysqli_real_escape_string( $mysqli, $_POST['user_password'] );
	$user_email = mysqli_real_escape_string( $mysqli, $_POST['user_email'] );

	// checking empty fields
	if( empty($user_name) || empty($user_fname) || empty($user_lname) || empty($user_password) || empty($user_email) ) {
		$error_message = '<div class="error-message">Cannot process registration empty field detected.</div>';
	} else {

		$user_password = substr( md5( $user_password ), 0, 19 );

		//insert data to database.
		$result = mysqli_query( $mysqli, "INSERT INTO obt_users( user_name, user_fname, user_lname, user_password, user_email ) VALUES( '$user_name', '$user_fname', '$user_lname', '$user_password', '$user_email' )");

		//display success message.
		$error_message = '<div class="success-message">Successfully registered.</div>';
	}
}
?>
<div class="content">

	<div class="registration-wrap">
		<div class="registration-inner">
			<h1>Register an Account</h1>
			<form method="post" action="<?php echo BASE_URL . 'register.php'; ?>" class="registration-form">
				<div class="form-row">
					<input type="text" name="user_name" placeholder="Username" />
				</div>
				<div class="form-row half">
					<div class="col">
						<input type="text" name="user_fname" placeholder="First Name" />
					</div>
					<div class="col">
						<input type="text" name="user_lname" placeholder="Last Name" />
					</div>
				</div>
				<div class="form-row">
					<input type="email" name="user_email" placeholder="Email" />
				</div>
				<div class="form-row">
					<input type="password" name="user_password" placeholder="Password" />
				</div>

				<div class="form-row">
					<input type="submit" name="submit" value="Register" />
				</div>

				<?php echo $error_message; ?>
			</form>
		</div>
	</div>

</div><!-- .content -->

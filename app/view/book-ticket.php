<?php
// set message default.
$error_message = '';
?>

<div class="content">

	<form method="post" id="book-ticket-form">
		<div class="book-ticket-wrap">
			<div class="book-ticket-inner">
				<h1>Book a Ticket</h1>
				<div class="book-ticket-form clearfix">
					<div id="seat-list">
						<h3>Bus Seats</h3>
						<ul>
							<?php
								// get all reserved seats if any.
								$current_date = date( "Y-m-j", time() );
								$reserved_seat = mysqli_query( $mysqli, "SELECT seat_num FROM obt_booking WHERE book_date = '{$current_date}' AND ( status = 'On Hold' OR status = 'Paid' )");

								// declare variable.
								$closed_seat = [];
								while( $row = mysqli_fetch_assoc( $reserved_seat ) ) {
									$temp_seat = explode( ",", $row['seat_num'] );
									foreach( $temp_seat as $ts ) {
										$closed_seat[] = $ts;
									}
								}

								// render seat table.
								$seat = 1;
								while( $seat <= 33 ) {
									$seat_rendered =  'S' . $seat;
									if ( in_array( $seat_rendered, $closed_seat, true) ) {
										echo '<li><button class="notavailable" disabled>'.$seat_rendered.'</button></li>';
									} else {
										echo '<li><button type="button" value="'.$seat_rendered.'">'.$seat_rendered.'</button></li>';
									}
									unset( $seat_rendered );
									$seat++;
								}
							?>
						</ul>
						<p><span class="legend-available"></span> Available <span class="legend-reserved"></span> Reserved</p>
					</div>
					<div id="reservation-info">
						<label for="book_date">Date:</label>
						<input id="book_date" type="date" name="date" max="<?php echo date( "Y-m-j", time() ); ?>" min="<?php echo date( "Y-m-j", time() ); ?>" value="<?php echo date( "Y-m-j", time() ); ?>" />

						<label for="destination">Destination:</label>
						<select id="destination" name="destination">
							<option val="bts_to_mnl">Batangas to Manila</option>
						</select>

						<div id="price" data-price="140">Fare Price: 140PHP</div>
						<script async>var farePrice = 140;</script>

						<label for="fare"><strong>Total Fare:</strong></label>
						<div id="fare">-</div>

						<?php if( isset( $_COOKIE['user_logged_in'] ) && isset( $_COOKIE['user_permission'] ) ) : ?>
							<?php if( $_COOKIE['user_permission'] == 0 ) : ?>
								<button id="book-now">Book Now</button>
								<input type="hidden" name="user_id" value="<?php echo $_COOKIE['user_id']; ?>" />
							<?php else: ?>
								<button id="book-now-disable" disabled>Hello admin! you cannot book.</button>
							<?php endif;?>
						<?php else: ?>
							<button id="book-now-disable" disabled>Please Login To Book</button>
						<?php endif; ?>

						<div id="book-result"></div>
					</div>
				</div>
			</div>
		</div>
	</form>

</div><!-- .content -->

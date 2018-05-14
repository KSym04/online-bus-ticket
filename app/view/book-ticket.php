<?php
// set message default.
$error_message = '';
?>

<div class="content">

	<div class="book-ticket-wrap">
		<div class="book-ticket-inner">
			<h1>Book a Ticket</h1>
			<div class="book-ticket-form clearfix">
				<div id="seat-list">
					<h3>Bus Seats</h3>
					<ul>
						<?php $seat = 1; ?>
						<?php
						while( $seat <= 33 ) {
							echo '<li><button>S'.$seat.'</button></li>';
							$seat++;
						}
						?>
					</ul>
					<p><span class="legend-available"></span> Available <span class="legend-reserved"></span> Reserved</p>
				</div>
				<div id="reservation-info">
					<label for="destination">Destination:</label>
					<select id="destination" name="destination">
						<option val="bts_to_mnl">Batangas to Manila</option>
					</select>

					<div id="price">Fare Price: 140PHP</div>
					<script async>var farePrice = 140;</script>

					<label for="fare"><strong>Total Fare:</strong></label>
					<div id="fare">-</div>

					<button id="book-now">Book Now</button>
				</div>
			</div>
		</div>
	</div>

</div><!-- .content -->

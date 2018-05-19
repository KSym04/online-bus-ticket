<div class="content">

	<div class="dashboard-wrap">
		<div class="dashboard-inner">
			<h1>Dashboard</h1>
			<div class="dashboard-form">
				<table>
					<thead>
						<tr>
							<td>Book ID</td>
							<td>Date</td>
							<td>Fare</td>
							<td>Seat Num</td>
							<td>Status</td>
							<td>Payment</td>
						</tr>
					</thead>
					</tbody>
					<?php
						// get user book seats.
						$get_user_id = $_COOKIE['user_id'];
						$user_reserved_seat = mysqli_query( $mysqli, "SELECT * FROM obt_booking WHERE user_id = $get_user_id" );
						if( $user_reserved_seat->num_rows > 0 ) {
							while( $row = mysqli_fetch_assoc( $user_reserved_seat ) ) {
								echo '<tr>';
									echo '<td>' . $row['ticket_id'] . '</td>';
									echo '<td>' . $row['book_date'] . '</td>';
									echo '<td>' . $row['fare'] . ' PHP</td>';
									echo '<td>' . $row['seat_num'] . '</td>';

									if( $row['status'] === 'On Hold' ) {
										echo '<td><span class="warning-label">' . $row['status'] . '<span></td>';
										echo '<td><a href="#" class="btn-pay-now">Pay Now</a></td>';
									}

									if( $row['status'] === 'Cancelled' ) {
										echo '<td><span class="cancel-label">' . $row['status'] . '</span></td>';
										echo '<td><span class="cancel-label">Cancel</span></td>';
									}

									if( $row['status'] === 'Paid' ) {
										echo '<td><span class="success-label">' . $row['status'] . '</span></td>';
										echo '<td><span class="success-label">Completed</span></td>';
									}

								echo '</tr>';
							}
						}
					?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

</div><!-- .content -->

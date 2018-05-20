<div class="content">

	<div class="dashboard-wrap">
		<div class="dashboard-inner">
			<h1>Dashboard</h1>
			<div class="dashboard-form <?php echo ( $_COOKIE['user_permission'] == 1 ) ? 'admin' : ''; ?>">
				<table>
					<thead>
						<tr>
							<?php if( $_COOKIE['user_permission'] == 1 ) : ?>
							<td>UserID</td>
							<?php endif; ?>

							<td>Book ID</td>
							<td>Date</td>
							<td>Fare</td>
							<td>Seat Num</td>
							<td>Status</td>
							<td>Payment</td>

							<?php if( $_COOKIE['user_permission'] == 1 ) : ?>
							<td>Command</td>
							<?php endif; ?>
						</tr>
					</thead>
					</tbody>
					<?php
						// get user book seats.
						$get_user_id = $_COOKIE['user_id'];

						if( $_COOKIE['user_permission'] == 1 ) {
							$user_reserved_seat = mysqli_query( $mysqli, "SELECT * FROM obt_booking" );
							$pay_status = 'disabled';
						} else {
							$user_reserved_seat = mysqli_query( $mysqli, "SELECT * FROM obt_booking WHERE user_id = $get_user_id" );
							$pay_status = '';
						}
						if( $user_reserved_seat->num_rows > 0 ) {
							while( $row = mysqli_fetch_assoc( $user_reserved_seat ) ) {
								echo '<tr>';
									if( $_COOKIE['user_permission'] == 1 ) {
										echo '<td>' . $row['user_id'] . '</td>';
									}
										echo '<td>' . $row['ticket_id'] . '</td>';
										echo '<td>' . $row['book_date'] . '</td>';
										echo '<td>' . $row['fare'] . ' PHP</td>';
										echo '<td>' . $row['seat_num'] . '</td>';

									if( $row['status'] == 'On Hold' ) {
										echo '<td id="status_id'.$row['ticket_id'].'"><span class="warning-label">' . $row['status'] . '<span></td>';
										echo '<td id="payment_id'.$row['ticket_id'].'"><a href="#" class="btn-pay-now" '.$pay_status.'>Pay Now</a></td>';
									}

									if( $row['status'] == 'Cancelled' ) {
										echo '<td><span class="cancel-label">' . $row['status'] . '</span></td>';
										echo '<td><span class="cancel-label">Cancel</span></td>';
									}

									if( $row['status'] == 'Paid' ) {
										echo '<td><span class="success-label">' . $row['status'] . '</span></td>';
										echo '<td><span class="success-label">Completed</span></td>';
									}

									if( $_COOKIE['user_permission'] == 1 ) {
										if( $row['status'] == 'On Hold' ) {
											echo '<td><a href="#" data-book-id="'.$row['ticket_id'].'" class="btn-cancel-now">Cancel</a></td>';
										}

										if( $row['status'] == 'Cancelled' ) {
											echo '<td><span class="cancel-label">-</span></td>';
										}

										if( $row['status'] == 'Paid' ) {
											echo '<td><span class="success-label">-</span></td>';
										}
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

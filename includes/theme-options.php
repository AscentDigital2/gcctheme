<div class="wrap">
	<h1>Edit Theme Options</h1><br>
	<?php if(isset($_GET['success'])){ ?>
		<div id="message" class="updated notice notice-success is-dismissible">
			<p>Options updated.</p>
			<button type="button" class="notice-dismiss">
				<span class="screen-reader-text">Dismiss this notice.</span>
			</button>
		</div>
	<?php } ?>
	<form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post">
		<h1>Social</h1>
		<input type="hidden" name="action" value="gcctheme_update_theme_options">
		<table class="form-table">
			<tbody>
				<tr class="form-field form-required">
					<th scope="row"><label for="facebook">Facebook </label></th>
					<td>
						<input name="facebook" type="text" id="facebook" value="<?php echo get_option('gcctheme_facebook', ''); ?>" aria-required="true" autocapitalize="none" autocorrect="off">
					</td>
				</tr>
				<tr class="form-field form-required">
					<th scope="row"><label for="twitter">Twitter </label></th>
					<td>
						<input name="twitter" type="text" id="twitter" value="<?php echo get_option('gcctheme_twitter', ''); ?>" aria-required="true" autocapitalize="none" autocorrect="off">
					</td>
				</tr>
				<tr class="form-field form-required">
					<th scope="row"><label for="instagram">Instagram </label></th>
					<td>
						<input name="instagram" type="text" id="instagram" value="<?php echo get_option('gcctheme_instagram', ''); ?>" aria-required="true" autocapitalize="none" autocorrect="off">
					</td>
				</tr>
				<tr class="form-field form-required">
					<th scope="row"><label for="youtube">Youtube </label></th>
					<td>
						<input name="youtube" type="text" id="youtube" value="<?php echo get_option('gcctheme_youtube', ''); ?>" aria-required="true" autocapitalize="none" autocorrect="off">
					</td>
				</tr>
			</tbody>
		</table>
		<h1>Tickets</h1>
		<table class="form-table">
			<tbody>
				<tr class="form-field form-required">
					<th scope="row"><label for="ticket">Ticket URL </label></th>
					<td>
						<input name="ticket" type="text" id="ticket" value="<?php echo get_option('gcctheme_ticket', ''); ?>" aria-required="true" autocapitalize="none" autocorrect="off">
					</td>
				</tr>
			</tbody>
		</table>
		<h1>Contact Information</h1>
		<table class="form-table">
			<tbody>
				<tr class="form-field form-required">
					<th scope="row"><label for="ticket">Email Address </label></th>
					<td>
						<input name="email" type="text" id="email" value="<?php echo get_option('gcctheme_email', ''); ?>" aria-required="true" autocapitalize="none" autocorrect="off">
					</td>
				</tr>
				<tr class="form-field form-required">
					<th scope="row"><label for="ticket">Contact Number </label></th>
					<td>
						<input name="contact" type="text" id="contact" value="<?php echo get_option('gcctheme_contact', ''); ?>" aria-required="true" autocapitalize="none" autocorrect="off">
					</td>
				</tr>
				<tr class="form-field form-required">
					<th scope="row"><label for="recipient-email">Recipient <span class="description">(required)</span></label></th>
					<td>
						<input name="recipients" type="text" id="recipient-email" value="<?php echo get_option('gcctheme_recipients', ''); ?>" aria-required="true" autocapitalize="none" autocorrect="off"><br>
						<p class="description">Please enter comma separated values for multiple emails <i>(e.g. john@sample.com, doe@sample.com)</i></p>
					</td>
				</tr>
			</tbody>
		</table>
		<input type="submit" value="Update" name="submit" class="button button-primary">
	</form>
</div>
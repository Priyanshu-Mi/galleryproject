<?php
/* Template Name: Contact Template */
get_header();
?>
<?php
$user_id = get_current_user_id();
$existing_user = ( get_post_meta( $user_id, 'user-name', true ) ) ? get_post_meta( $user_id, 'user-name', true ) : '';
$existing_email = ( get_post_meta( $user_id, 'user-email', true ) ) ? get_post_meta( $user_id, 'user-email', true ) : '';
$existing_phone = ( get_post_meta( $user_id, 'phone', true ) ) ? get_post_meta( $user_id, 'phone', true ) : '';
?>
<div class="section-inner">
	<div class="row">
		<div class="col-md-12" style="margin:20px 0 20px 0;">
			<form action="" method="post" enctype="multipart/form-data">
				<label for="user-name">Name
					<input id="user-name" type="text" name="user-name" value="" required="required">
				</label>
				<label for="user-email">Email
					<input id="user-email" type="text" name="user-email" value="" required="required">
				</label>
				<label for="phone">Phone
					<input id="phone" type="text" name="phone" value="" required="required">
				</label>
				<input type="submit" name="submit" value="Submit">
			</form>
		</div>	
	</div>
</div>
<?php

if ( ! function_exists( 'wf_insert_post_meta' ) ) {
	function wf_insert_post_meta( $user_id, $meta_key, $meta_value ) {

		$meta_key_not_exists = add_post_meta( $user_id, $meta_key, $meta_value, true );

		if ( ! $meta_key_not_exists ) {
			add_post_meta( $user_id, $meta_key, $meta_value );
			return true;
		}
	}
}

if ( isset( $_POST['submit'] ) ) {

	// Get form values.
	$username = ( ! empty( $_POST['user-name'] ) ) ? sanitize_text_field( $_POST['user-name'] ) : '';
	$email = ( ! empty( $_POST['user-email'] ) ) ? sanitize_text_field( $_POST['user-email'] ) : '';
	$phone = ( ! empty( $_POST['phone'] ) ) ? sanitize_text_field( $_POST['phone'] ) : '';

	wf_insert_post_meta( $user_id, 'user-name', $username );
	wf_insert_post_meta( $user_id, 'user-email', $email );
	wf_insert_post_meta( $user_id, 'phone', $phone );

	$user_display_name = wp_get_current_user()->display_name;
	exit;
}
get_footer();?>
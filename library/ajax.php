<?php

function handle_wedding_form_ajax() {
    // Verify nonce
    if ( ! isset( $_POST['security'] ) || ! wp_verify_nonce( $_POST['security'], 'nonce' ) ) {
        wp_send_json_error( 'Security check failed.' );
        wp_die();
    }

    parse_str( $_POST['data'], $form );

    // Sanitize inputs
    $name = sanitize_text_field( $form['name'] );
    $email = sanitize_email( $form['email'] );
    $phone = sanitize_text_field( $form['phone'] );
    $date = sanitize_text_field( $form['date'] );
    $address = sanitize_text_field( $form['address'] );
    $message = sanitize_textarea_field( $form['message'] );
    $service = isset( $form['service'] ) ? sanitize_text_field( $form['service'] ) : '';

    // Compose email content
    $body = "New wedding inquiry:\n";
    $body .= "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Phone: $phone\n";
    $body .= "Wedding Date: $date\n";
    $body .= "Venue Address: $address\n";
    $body .= "Service: $service\n";
    $body .= "Message: $message\n";

    // Send email
    $to = 'denis@kaizen-design.ru'; // Change this to your email
    $subject = 'Wedding Inquiry from ' . $name;
    $headers = array('Content-Type: text/plain; charset=UTF-8');

    $mail_sent = wp_mail( $to, $subject, $body, $headers );

    if ( $mail_sent ) {
        wp_send_json_success( 'Thank you! Your message has been sent.' );
    } else {
        wp_send_json_error( 'Failed to send email. Please try again later.' );
    }

    wp_die();
}
add_action( 'wp_ajax_submit_wedding_form', 'handle_wedding_form_ajax' );
add_action( 'wp_ajax_nopriv_submit_wedding_form', 'handle_wedding_form_ajax' );
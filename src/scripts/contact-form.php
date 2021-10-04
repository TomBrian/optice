<?php
// contact form 

add_action('wp_ajax_entry', 'optisites_fetch_form_data');
add_action('wp_ajax_nopriv_entry', 'optisites_fetch_form_data');
function optisites_fetch_form_data()
{
    //   array to parse form data into
    $formData = array();
    //$_POST returns an object where the form data (string) is stored in the enquiry property
    wp_parse_str($_REQUEST['entry'], $formData);
    $new_entry = array(
        'post_title' => $formData['name'] . ' from ' . $formData['company'],
        'post_content' => $formData['message'],
        'userservices' => $formData['services'],
        'post_type' => 'form_entries',
        'post_status' => 'pending',
        'post_author' => 1,
        'post_category' => array('entry')
    );
    $new_entry_id = wp_insert_post($new_entry);

    //email

    update_post_meta($new_entry_id, "username", $formData['name']);
    update_post_meta($new_entry_id, "email", $formData['email']);
    update_post_meta($new_entry_id, "userphone", $formData['phone']);
    update_post_meta($new_entry_id, "userservices", $formData['services']);
    $to = get_option('admin_email');
    $subject = 'an entry from ' . $formData['name'] .' '. 'phone: (' . $formData['phone'] . ') email: (' . $formData['email'].') company:('.$formData['company'].')';
    $message = $formData['message'];
    $headers[] = 'content-Type:text/html';
    $headers[] = 'From:' . $formData['email'];
    $headers[] = 'Reply-to:' . $formData['email'];
    $mail =   wp_mail($to, $subject, $message, $headers);

    try {
        // wp_mail error
        if ($new_entry_id && $mail) {
            wp_send_json_success($formData['email']);
        } else {
            wp_send_json_error();
        }
    }
    // global error
    catch (Exception $e) {
        wp_send_json_error($e);
    }
}
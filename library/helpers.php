<?php

function getPostFormatedDate($date){
    return date("j. F Y", strtotime($date));
}

function format_phone_number($phone) {
    $cleaned = preg_replace('/[^\d+]/', '', $phone);
    $formatted = ltrim($cleaned, '+');
    return $formatted;
}

function create_whatsapp_link($phone) {
    $cleaned = preg_replace('/[^\d]/', '', $phone);
    return 'https://wa.me/' . $cleaned;
}

<?php
/**
 * Method 1
 * Can be used for: Any storage type
 *
 * page-slug - replace this with your Option Page slug
 * option-name - replace this with your option Name/ID
 */
$value = jet_engine()->listings->data->get_option( 'page-slug::option-name' );

/**
 * Method 2
 * Can be used for: Any storage type
 *
 * page-slug - replace this with your Option Page slug
 * option-name - replace this with your option Name/ID
 */
$page  = jet_engine()->options_pages->registered_pages['page-slug'];
$value = $page->get( 'option-name' );

/**
 * Method 3
 * Can be used for: Default storage type
 *
 * page-slug - replace this with your Option Page slug
 * option-name - replace this with your option Name/ID
 */
$all_options = get_option( 'page-slug', array() );
$value       = isset( $all_options['option-name'] ) ? $all_options['option-name'] : false;

/**
 * Method 4
 * Can be used for: Separate storage type + `Add prefix for separate options` is DISABLED
 *
 * option-name - replace this with your option Name/ID
 */
 $value = get_option( 'option-name' );
 
 /**
 * Method 5
 * Can be used for: Separate storage type + `Add prefix for separate options` is ENABLED
 *
 * page-slug - replace this with your Option Page slug
 * option-name - replace this with your option Name/ID
 */
 $value = get_option( 'page-slug_option-name' );

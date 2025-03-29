<?php
/*
 * Plugin Name: Shoe Care Post Type
 */

add_action('init', 'shoecare_pt');

function shoecare_pt() {
    $labels = array(
        'name'                     => __('Announcements', 'Shoe Care'),
        'singular_name'            => __('Announcement', 'Shoe Care'),
        'add_new'                  => __('Add New', 'Shoe Care'),
        'add_new_item'             => __('Add New Announcement', 'Shoe Care'),
        'edit_item'                => __('Edit Announcement', 'Shoe Care'),
        'new_item'                 => __('New Announcement', 'Shoe Care'),
        'view_item'                => __('View Announcement', 'Shoe Care'),
        'view_items'               => __('View Announcements', 'Shoe Care'),
        'search_items'             => __('Search Announcements', 'Shoe Care'),
        'not_found'                => __('No Announcements found.', 'Shoe Care'),
        'not_found_in_trash'       => __('No Announcements found in Trash.', 'Shoe Care'),
        'parent_item_colon'        => __('Parent Announcements:', 'Shoe Care'),
        'all_items'                => __('All Announcements', 'Shoe Care'),
        'archives'                 => __('Announcement Archives', 'Shoe Care'),
        'attributes'               => __('Announcement Attributes', 'Shoe Care'),
        'insert_into_item'         => __('Insert into Announcement', 'Shoe Care'),
        'uploaded_to_this_item'    => __('Uploaded to this Announcement', 'Shoe Care'),
        'featured_image'           => __('Featured Image', 'Shoe Care'),
        'set_featured_image'       => __('Set featured image', 'Shoe Care'),
        'remove_featured_image'    => __('Remove featured image', 'Shoe Care'),
        'use_featured_image'       => __('Use as featured image', 'Shoe Care'),
        'menu_name'                => __('Announcements', 'Shoe Care'),
        'filter_items_list'        => __('Filter Announcement list', 'Shoe Care'),
        'filter_by_date'          => __('Filter by date', 'Shoe Care'),
        'items_list_navigation'   => __('Announcements list navigation', 'Shoe Care'),
        'items_list'              => __('Announcements list', 'Shoe Care'),
        'item_published'          => __('Announcement published.', 'Shoe Care'),
        'item_published_privately'=> __('Announcement published privately.', 'Shoe Care'),
        'item_reverted_to_draft'  => __('Announcement reverted to draft.', 'Shoe Care'),
        'item_scheduled'          => __('Announcement scheduled.', 'Shoe Care'),
        'item_updated'            => __('Announcement updated.', 'Shoe Care'),
        'item_link'               => __('Announcement Link', 'Shoe Care'),
        'item_link_description'   => __('A link to an announcement.', 'Shoe Care'),
    );

    $args = array(
        'labels'              => $labels,
        'public'              => true,
        'has_archive'         => true,
        'show_in_rest'        => true, 
        'menu_icon'           => 'dashicons-megaphone',
        'capability_type'     => 'post',
        'supports'            => array('title', 'editor', 'thumbnail', 'revisions'),
        'rewrite'             => array('slug' => 'shoe-care')
    );

    register_post_type('shoecare_pt', $args);
}
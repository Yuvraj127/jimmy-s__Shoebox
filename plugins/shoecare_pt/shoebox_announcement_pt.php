<?php
/*
 * Plugin Name: Shoe Care Post Type
 */

 add_action( 'init', 'shoecare_pt' );

function shoecare_pt() {

   $labels = array(

      'name'                     => __( 'Announcements', 'Shoe Care' ),
      'singular_name'            => __( 'Announcement', 'Shoe Care' ),
      'add_new'                  => __( 'Add New', 'Shoe Care' ),
      'add_new_item'             => __( 'Add New Announcement', 'Shoe Care' ),
      'edit_item'                => __( 'Edit Announcement', 'Shoe Care' ),
      'new_item'                 => __( 'New Announcement', 'Shoe Care' ),
      'view_item'                => __( 'View Announcement', 'Shoe Care' ),
      'view_items'               => __( 'View Announcements', 'Shoe Care' ),
      'search_items'             => __( 'Search Announcements', 'Shoe Care' ),
      'not_found'                => __( 'No Announcements found.', 'Shoe Care' ),
      'not_found_in_trash'       => __( 'No Announcements found in Trash.', 'Shoe Care' ),
      'parent_item_colon'        => __( 'Parent Announcements:', 'Shoe Care' ),
      'all_items'                => __( 'All Announcements', 'Shoe Care' ),
      'archives'                 => __( 'Announcement Archives', 'Shoe Care' ),
      'attributes'               => __( 'Announcement Attributes', 'Shoe Care' ),
      'insert_into_item'         => __( 'Insert into Announcement', 'Shoe Care' ),
      'uploaded_to_this_item'    => __( 'Uploaded to this Announcement', 'Shoe Care' ),
      'featured_image'           => __( 'Featured Image', 'Shoe Care' ),
      'set_featured_image'       => __( 'Set featured image', 'Shoe Care' ),
      'remove_featured_image'    => __( 'Remove featured image', 'Shoe Care' ),
      'use_featured_image'       => __( 'Use as featured image', 'Shoe Care' ),
      'menu_name'                => __( 'Announcements', 'Shoe Care' ),
      'filter_items_list'        => __( 'Filter Announcement list', 'Shoe Care' ),
      'filter_by_date'           => __( 'Filter by date', 'Shoe Care' ),
      'items_list_navigation'    => __( 'Announcements list navigation', 'Shoe Care' ),
      'items_list'               => __( 'Announcements list', 'Shoe Care' ),
      'item_published'           => __( 'Announcement published.', 'Shoe Care' ),
      'item_published_privately' => __( 'Announcement published privately.', 'Shoe Care' ),
      'item_reverted_to_draft'   => __( 'Announcement reverted to draft.', 'Shoe Care' ),
      'item_scheduled'           => __( 'Announcement scheduled.', 'Shoe Care' ),
      'item_updated'             => __( 'Announcement updated.', 'Shoe Care' ),
      'item_link'                => __( 'Announcement Link', 'Shoe Care' ),
      'item_link_description'    => __( 'A link to an announcement.', 'Shoe Care' ),

   );

   $args = array(

      'labels'                => $labels,
      'public'                => true,
      'has_archive'           => true,
      'show_in_rest'          => true,
      'menu_icon'             => 'dashicons-megaphone',
      'capability_type'       => 'post',
      'capabilities'          => array(),
      'supports'              => array( 'title', 'editor', 'revisions' ),
      'rewrite'               => array( 'slug' => 'shoe care' ),
   );

   register_post_type( 'shoecare_pt', $args );

}


add_action( 'init', 'shoe_review_pt' );

function shoe_review_pt() {

   $labels = array(

      'name'                     => __( 'Announcements', 'shoe review' ),
      'singular_name'            => __( 'Announcement', 'shoe review' ),
      'add_new'                  => __( 'Add New', 'shoe review' ),
      'add_new_item'             => __( 'Add New Announcement', 'shoe review' ),
      'edit_item'                => __( 'Edit Announcement', 'shoe review' ),
      'new_item'                 => __( 'New Announcement', 'shoe review' ),
      'view_item'                => __( 'View Announcement', 'shoe review' ),
      'view_items'               => __( 'View Announcements', 'shoe review' ),
      'search_items'             => __( 'Search Announcements', 'shoe review' ),
      'not_found'                => __( 'No Announcements found.', 'shoe review' ),
      'not_found_in_trash'       => __( 'No Announcements found in Trash.', 'shoe review' ),
      'parent_item_colon'        => __( 'Parent Announcements:', 'shoe review' ),
      'all_items'                => __( 'All Announcements', 'shoe review' ),
      'archives'                 => __( 'Announcement Archives', 'shoe review' ),
      'attributes'               => __( 'Announcement Attributes', 'shoe review' ),
      'insert_into_item'         => __( 'Insert into Announcement', 'shoe review' ),
      'uploaded_to_this_item'    => __( 'Uploaded to this Announcement', 'shoe review' ),
      'featured_image'           => __( 'Featured Image', 'shoe review' ),
      'set_featured_image'       => __( 'Set featured image', 'shoe review' ),
      'remove_featured_image'    => __( 'Remove featured image', 'shoe review' ),
      'use_featured_image'       => __( 'Use as featured image', 'shoe review' ),
      'menu_name'                => __( 'Announcements', 'shoe review' ),
      'filter_items_list'        => __( 'Filter Announcement list', 'shoe review' ),
      'filter_by_date'           => __( 'Filter by date', 'shoe review' ),
      'items_list_navigation'    => __( 'Announcements list navigation', 'shoe review' ),
      'items_list'               => __( 'Announcements list', 'shoe review' ),
      'item_published'           => __( 'Announcement published.', 'shoe review' ),
      'item_published_privately' => __( 'Announcement published privately.', 'shoe review' ),
      'item_reverted_to_draft'   => __( 'Announcement reverted to draft.', 'shoe review' ),
      'item_scheduled'           => __( 'Announcement scheduled.', 'shoe review' ),
      'item_updated'             => __( 'Announcement updated.', 'shoe review' ),
      'item_link'                => __( 'Announcement Link', 'shoe review' ),
      'item_link_description'    => __( 'A link to an announcement.', 'shoe review' ),

   );

   $args = array(

      'labels'                => $labels,
      'public'                => true,
      'has_archive'           => true,
      'show_in_rest'          => true,
      'menu_icon'             => 'dashicons-megaphone',
      'capability_type'       => 'post',
      'capabilities'          => array(),
      'supports'              => array( 'title', 'editor', 'revisions' ),
      'rewrite'               => array( 'slug' => 'shoe review' ),
   );

   register_post_type( 'shoe_review_pt', $args );

}

add_action( 'init', 'limited_edition_pt' );

function limited_edition_pt() {

   $labels = array(

      'name'                     => __( 'Announcements', 'limited edition' ),
      'singular_name'            => __( 'Announcement', 'limited edition' ),
      'add_new'                  => __( 'Add New', 'limited edition' ),
      'add_new_item'             => __( 'Add New Announcement', 'limited edition' ),
      'edit_item'                => __( 'Edit Announcement', 'limited edition' ),
      'new_item'                 => __( 'New Announcement', 'limited edition' ),
      'view_item'                => __( 'View Announcement', 'limited edition' ),
      'view_items'               => __( 'View Announcements', 'limited edition' ),
      'search_items'             => __( 'Search Announcements', 'limited edition' ),
      'not_found'                => __( 'No Announcements found.', 'limited edition' ),
      'not_found_in_trash'       => __( 'No Announcements found in Trash.', 'limited edition' ),
      'parent_item_colon'        => __( 'Parent Announcements:', 'limited edition' ),
      'all_items'                => __( 'All Announcements', 'limited edition' ),
      'archives'                 => __( 'Announcement Archives', 'limited edition' ),
      'attributes'               => __( 'Announcement Attributes', 'limited edition' ),
      'insert_into_item'         => __( 'Insert into Announcement', 'limited edition' ),
      'uploaded_to_this_item'    => __( 'Uploaded to this Announcement', 'limited edition' ),
      'featured_image'           => __( 'Featured Image', 'limited edition' ),
      'set_featured_image'       => __( 'Set featured image', 'limited edition' ),
      'remove_featured_image'    => __( 'Remove featured image', 'limited edition' ),
      'use_featured_image'       => __( 'Use as featured image', 'limited edition' ),
      'menu_name'                => __( 'Announcements', 'limited edition' ),
      'filter_items_list'        => __( 'Filter Announcement list', 'limited edition' ),
      'filter_by_date'           => __( 'Filter by date', 'limited edition' ),
      'items_list_navigation'    => __( 'Announcements list navigation', 'limited edition' ),
      'items_list'               => __( 'Announcements list', 'limited edition' ),
      'item_published'           => __( 'Announcement published.', 'limited edition' ),
      'item_published_privately' => __( 'Announcement published privately.', 'limited edition' ),
      'item_reverted_to_draft'   => __( 'Announcement reverted to draft.', 'limited edition' ),
      'item_scheduled'           => __( 'Announcement scheduled.', 'limited edition' ),
      'item_updated'             => __( 'Announcement updated.', 'limited edition' ),
      'item_link'                => __( 'Announcement Link', 'limited edition' ),
      'item_link_description'    => __( 'A link to an announcement.', 'limited edition' ),

   );

   $args = array(

      'labels'                => $labels,
      'public'                => true,
      'has_archive'           => true,
      'show_in_rest'          => true,
      'menu_icon'             => 'dashicons-megaphone',
      'capability_type'       => 'post',
      'capabilities'          => array(),
      'supports'              => array( 'title', 'editor', 'revisions' ),
      'rewrite'               => array( 'slug' => 'limited edition' ),
   );

   register_post_type( 'limited_edition_pt', $args );

}



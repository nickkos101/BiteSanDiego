<?php

global $meta_boxes;
$meta_boxes = array();

$meta_boxes[] = array(
    'id' => 'press',
    'title' => 'Press Info',
    'pages' => array('press'),
    'context' => 'normal',
    'priority' => 'high',
    'fields' => array(
        array(
        'name' => 'Article Link',
        'id' => 'artlnk',
        'type' => 'text',
        ),
     ),
    );

$meta_boxes[] = array(
    'id' => 'pages',
    'title' => 'Page Info',
    'pages' => array('page'),
    'context' => 'normal',
    'priority' => 'high',
    'fields' => array(
        array(
        'name'             => 'Background Image',
        'id'               => "bgimg",
        'type'             => 'thickbox_image',
        'max_file_uploads' => 1,
        ),
     ),
    );


$meta_boxes[] = array(
    'id' => 'pages',
    'title' => 'Restauraunt Editor',
    'pages' => array('tours'),
    'context' => 'normal',
    'priority' => 'high',
    'fields' => array(
        array(
        'name'             => 'Restauraunt Content',
        'id'               => "rr",
        'type'             => 'wysiwyg',
        ),
        array(
        'name'             => 'Background Image',
        'id'               => "bgimg",
        'type'             => 'thickbox_image',
        'max_file_uploads' => 1,
        ),
        array(
        'name'             => 'Image Gallery',
        'id'               => "gallery",
        'type'             => 'thickbox_image',
        'max_file_uploads' => 8,
        ),
     ),
    );

/* * ******************* META BOX REGISTERING ********************** */

/**
 * Register meta boxes
 *
 * @return void
 */
function themename_register_meta_boxes() {
    global $meta_boxes;

    // Make sure there's no errors when the plugin is deactivated or during upgrade
    if (class_exists('RW_Meta_Box')) {
        foreach ($meta_boxes as $meta_box) {
            new RW_Meta_Box($meta_box);
        }
    }
}

// Hook to 'admin_init' to make sure the meta box class is loaded before
// (in case using the meta box class in another plugin)
// This is also helpful for some conditionals like checking page template, categories, etc.
add_action('admin_init', 'themename_register_meta_boxes');
?>
<?php
/**
 * Define your repeater fields here.
 *
 * @package WP-SmellyCat
 * @subpackage Repeaters
 */

return array(

	array(

		'ID'          => 'hero-sliders',
		'title'       => 'Hero Sliders',
		'object'      => 'page',
		'restrict_to' => array( 2 ),
		'fields'      => array(

			array(
				'key'  => 'title',
				'type' => 'textarea',
				'col'  => '10',
			),
			array(
				'key'  => 'link',
				'type' => 'text',
				'col'  => '2',
			),
			array(
				'key'  => 'author',
				'type' => 'text',
				'col'  => '4',
			),
			array(
				'key'  => 'image',
				'type' => 'media',
				'col'  => '2',
			),

		),

	),

);

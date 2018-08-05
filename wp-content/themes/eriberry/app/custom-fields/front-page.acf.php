<?php

$group_args = [
	'title'          => 'Home Options',
	'location_is'    => [ 'page_type', 'front_page' ]
];

$fields = [
	[ 'tab', 'Full Width Content', ['placement' => 'left'] ],
	[ 'wysiwyg', 'Optional Full Width Content' ],

	[ 'tab', 'Content & Image', ['placement' => 'left'] ],
	[ 'textarea', 'Text Content' ],
	[ 'image', 'Optional Image', ['return_format' => 'array'] ],

	[ 'tab', 'Call to Action', ['placement' => 'left'] ],
	[ 'text', 'CTA Title' ],
	[ 'text', 'Optional CTA Description' ],
	[ 'link', 'CTA Link', ['return_format' => 'array'] ]
];

$field_group = core_register_field_group( 'homepage-acf', $group_args, $fields );

<?php
// This file is generated. Do not modify it manually.
return array(
	'infobox-block' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'goatscript/infobox-block',
		'version' => '0.1.0',
		'title' => 'Infobox',
		'category' => 'text',
		'icon' => 'admin-plugins',
		'description' => 'This block displays an infobox',
		'example' => array(
			
		),
		'supports' => array(
			'html' => false
		),
		'textdomain' => 'infobox-block',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'attributes' => array(
			'title' => array(
				'type' => 'string',
				'default' => ''
			),
			'content' => array(
				'type' => 'string',
				'source' => 'html',
				'selector' => '.infobox-content',
				'default' => ''
			)
		)
	)
);

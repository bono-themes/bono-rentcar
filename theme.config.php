<?php

/**
 * This file is part of the Bono CMS
 * 
 * Copyright (c) No Global State Lab
 * 
 * For the full copyright and license information, please view
 * the license file that was distributed with this source code.
 */

return [
    'meta' => [
        'name' => 'RentCar',
        'description' => 'Default Rent-Car theme for Bono CMS',
        'version' => '1.0',
        'author' => 'NGS Labs'
    ],

	'plugins' => [
	],

	'theme' => [
		'stylesheets' => [
            '/vendor/bootstrap/css/bootstrap.min.css',
			'/assets/css/styles.css',
		],
		'scripts' => [
            '/vendor/jquery-3.4.1.min.js',
            '/vendor/popper/popper.min.js',
            '/vendor/bootstrap/js/bootstrap.min.js',
		]
	]
];
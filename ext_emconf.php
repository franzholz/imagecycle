<?php
$EM_CONF[$_EXTKEY] = [
	'title' => 'Image Cycle',
	'description' => 'Insert a slideshow into your page or template. Manage the images, captions and hrefs recursively in the pagetree and show it in a jQuery-Cycle, Coin-Slider, Nivo-Slider or Cross-Slider.',
	'category' => 'plugin',
	'version' => '3.3.2',
	'state' => 'stable',
	'uploadfolder' => 0,
	'clearcacheonload' => 1,
	'author' => 'Franz Holzinger, Juergen Furrer',
	'author_email' => 'franz@ttproducts.de',
	'author_company' => '',
	'constraints' => [
		'depends' => [
			'php' => '7.4.0-8.4.99',
			'typo3' => '10.4.0-12.4.99',
		],
		'conflicts' => [
		],
		'suggests' => [
            'lib_jquery' => '2.1.0-0.0.0',
            'typo3db_legacy' => '1.0.0-1.1.99',
		],
	],
	'autoload' => [
		'psr-4' => [
			'TYPO3Extension\\Imagecycle\\' => 'Classes',
		],
	],
];

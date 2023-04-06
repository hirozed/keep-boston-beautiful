<?php

return [
	'production'  => false,
	'baseUrl'     => '',
	'title'       => 'Keep Boston Beautiful',
	'description' => '',
	'siteAuthor'  => 'Josh Konoff',
	'collections' => [
		'pages' => [
			'author' => 'Author Name', // Default author, if not provided in a post
			'path'   => '{filename}',
		],
	],
];

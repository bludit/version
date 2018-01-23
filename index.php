<?php
$version = array(
	'stable'=>array(
		'version'=>'2.2.1',
		'codeName'=>'Pepper',
		'build'=>'20180123',
		'releaseDate'=>'2018-01-23',
		'downloadLink'=>'https://df6m0u2ovo2fu.cloudfront.net/builds/bludit-2-2-1.zip',
		'downloadMirrorLink'=>'',
		'changelogLink'=>'https://github.com/bludit/bludit/releases/tag/2.2.1',
		'github'=>'https://github.com/bludit/bludit/releases/tag/2.2.1',
		'blog'=>'https://blog.bludit.com/bludit-2-2-1'
	),
	'beta'=>array(
		'version'=>'',
		'codeName'=>'',
		'build'=>'',
		'releaseDate'=>'',
		'downloadLink'=>'',
		'downloadMirrorLink'=>'',
		'changelogLink'=>'',
		'github'=>'',
		'blog'=>''
	),
	'night'=>array(
		'version'=>'',
		'codeName'=>'',
		'build'=>'',
		'releaseDate'=>'',
		'downloadLink'=>'',
		'downloadMirrorLink'=>'',
		'changelogLink'=>'',
		'github'=>'',
		'blog'=>''
	)
);
if( !defined('BLUDIT')) {
	header("Content-type:application/json");
	exit( json_encode($version) );
}

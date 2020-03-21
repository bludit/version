<?php
$version = array(
	'stable'=>array(
		'version'=>'3.12.0',
		'codeName'=>'Pizza time',
		'build'=>'20200320',
		'releaseDate'=>'2020-03-20',
		'downloadLink'=>'https://www.bludit.com/releases/bludit-3-12-0.zip',
		'downloadMirrorLink'=>'',
		'changelogLink'=>'https://github.com/bludit/bludit/releases/tag/3.12.0',
		'github'=>'https://github.com/bludit/bludit/releases/tag/3.12.0',
		'blog'=>'https://blog.bludit.com/bludit-3-12-0'
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
	'alpha'=>array(
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

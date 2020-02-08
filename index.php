<?php
$version = array(
	'stable'=>array(
		'version'=>'3.11.0',
		'codeName'=>'Pizza time',
		'build'=>'20200208',
		'releaseDate'=>'2020-02-08',
		'downloadLink'=>'https://www.bludit.com/releases/bludit-3-11-0.zip',
		'downloadMirrorLink'=>'',
		'changelogLink'=>'https://github.com/bludit/bludit/releases/tag/3.11.0a',
		'github'=>'https://github.com/bludit/bludit/releases/tag/3.11.0a',
		'blog'=>'https://blog.bludit.com/bludit-3-11-0'
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

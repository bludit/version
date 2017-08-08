<?php
$version = array(
	'stable'=>array(
		'version'=>'1.6.2',
		'codeName'=>'',
		'build'=>'20170504',
		'releaseDate'=>'2017-05-04',
		'downloadLink'=>'https://s3.amazonaws.com/bludit-s3/bludit-builds/bludit-v1.6.2.zip',
		'downloadMirrorLink'=>'',
		'changelogLink'=>'https://github.com/dignajar/bludit/releases/tag/1.6.2',
		'github'=>'https://github.com/dignajar/bludit/releases/tag/1.6.2'
	),
	'beta'=>array(
		'version'=>'',
		'codeName'=>'',
		'build'=>'',
		'releaseDate'=>'',
		'downloadLink'=>'',
		'downloadMirrorLink'=>'',
		'changelogLink'=>'',
		'github'=>''
	),
	'nigth'=>array(
		'version'=>'2.0 Alpha 3',
		'codeName'=>'',
		'build'=>'',
		'releaseDate'=>'',
		'downloadLink'=>'',
		'downloadMirrorLink'=>'',
		'changelogLink'=>'https://github.com/dignajar/bludit/releases/tag/2.0-alpha3',
		'github'=>'https://github.com/dignajar/bludit/releases/tag/2.0-alpha3'
	)
);
if( !defined('BLUDIT')) {
	header("Content-type:application/json");
	exit( json_encode($version) );
}

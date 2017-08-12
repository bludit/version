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
		'version'=>'2.0',
		'codeName'=>'',
		'build'=>'20170812',
		'releaseDate'=>'2017-08-12',
		'downloadLink'=>'https://github.com/dignajar/bludit/archive/2.0-beta1.zip',
		'downloadMirrorLink'=>'',
		'changelogLink'=>'https://github.com/dignajar/bludit/releases/tag/2.0-beta1',
		'github'=>'https://github.com/dignajar/bludit/releases/tag/2.0-beta1'
	),
	'nigth'=>array(
		'version'=>'',
		'codeName'=>'',
		'build'=>'',
		'releaseDate'=>'',
		'downloadLink'=>'',
		'downloadMirrorLink'=>'',
		'changelogLink'=>'',
		'github'=>''
	)
);
if( !defined('BLUDIT')) {
	header("Content-type:application/json");
	exit( json_encode($version) );
}

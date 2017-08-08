<?php
$version = array(
	'stable'=>array(
		'version'=>'1.6.2',
		'codeName'=>'',
		'build'=>'20170606',
		'releaseDate'=>'2017-06-06',
		'downloadLink'=>'',
		'downloadMirrorLink'=>'',
		'changelogLink'=>'',
		'github'=>''
	),
	'beta'=>array(
		'version'=>'2.0',
		'codeName'=>'',
		'build'=>'20170606',
		'releaseDate'=>'2017-06-06',
		'downloadLink'=>'',
		'downloadMirrorLink'=>'',
		'changelogLink'=>'',
		'github'=>''
	),
	'nigth'=>array(
		'version'=>'2.0',
		'codeName'=>'',
		'build'=>'20170606',
		'releaseDate'=>'2017-06-06',
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

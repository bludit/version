<?php
$version = array(
	'stable'=>array(
		'version'=>'2.3.1',
		'codeName'=>'1-Commit',
		'build'=>'20180309',
		'releaseDate'=>'2018-03-09',
		'downloadLink'=>'https://df6m0u2ovo2fu.cloudfront.net/builds/bludit-2-3-1.zip',
		'downloadMirrorLink'=>'',
		'changelogLink'=>'https://github.com/bludit/bludit/releases/tag/2.3.1',
		'github'=>'https://github.com/bludit/bludit/releases/tag/2.3.1',
		'blog'=>'https://blog.bludit.com/bludit-2-3-1'
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
	'nightly'=>array(
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

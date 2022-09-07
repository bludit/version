<?php
$version = array(
	'stable'=>array(
		'version'=>'3.14.1',
		'codeName'=>'',
		'build'=>'20220807',
		'releaseDate'=>'2022-08-07',
		'downloadLink'=>'https://www.bludit.com/releases/bludit-3-14-1.zip',
		'downloadMirrorLink'=>'',
		'changelogLink'=>'https://github.com/bludit/bludit/releases/tag/3.14.1',
		'github'=>'https://github.com/bludit/bludit/releases/tag/3.14.1',
		'blog'=>'https://blog.bludit.com/bludit-3-14-0'
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

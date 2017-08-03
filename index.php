<?php
$versions = array(
	'stableVersion'=>'2.0',
	'stableCodeName'=>'',
	'stableBuild'=>'20170606',
	'stableReleaseDate=>'2017-06-06',
	'stableDownloadLink=>'',
	'stableDownloadLinkMirror=>'',
	'stableChangelogLink=>'',
	'stableGithub'=>''
);
header("Content-type:application/json");
exit( json_encode($versions) );

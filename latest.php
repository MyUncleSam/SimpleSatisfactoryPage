<?php

$directory = "savegames/";

$files = glob($directory . "*.sav");
array_multisort(
    array_map( 'filemtime', $files ),
    SORT_NUMERIC,
    SORT_DESC,
    $files
);

$latestFile = $files[0];
$filename = basename($latestFile);

header("Content-type: application/octet-stream");
header("Content-disposition: attachment;filename=latest.sav");

readfile($latestFile);
exit;
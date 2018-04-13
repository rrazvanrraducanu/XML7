<?php
$visitor_info = array_key_exists( 'REMOTE_HOST', $_SERVER) ? $_SERVER['REMOTE_HOST'] : gethostbyaddr($_SERVER["REMOTE_ADDR"]);
//if ($_SERVER['REMOTE_HOST'] == "") $visitor_info = $_SERVER['REMOTE_ADDR'];
//else $visitor_info = $_SERVER['REMOTE_HOST'];
$data=date('F jS Y, h:iA');

$xml = simplexml_load_file('track.xml');
$track=$xml->addChild('track');
$track->addChild('data', $data);
$track->addChild('IP', $visitor_info);

file_put_contents('track.xml', $xml->asXML());
?>

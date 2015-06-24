<?php
require_once 'lib/plivo.php';

$r = new Response();

$url = 'http://examples.com/playTrumpet.mp3';
$attributes = array (
    'loop' => 2,
);

$r->addPlay($url, $attributes);

$wait_attribute = array(
    'length' => 3,
);
$r->addWait($wait_attribute);

header('Content-type: text/xml');
echo( $r->toXML());

?>


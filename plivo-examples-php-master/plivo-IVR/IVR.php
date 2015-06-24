<?php
    require_once 'plivo.php';

    $body = 'Hi, Calling from Plivo. Please enter 1 for music and 2 for Speak.';
   // $url = 'http://examples.com/playTrumpet.mp3';
    $attributes = array (
        'loop' => 2,
    );
    $getdigitattributes = array (
	'action'=> 'http://' . $_SERVER["SERVER_NAME"] . '/gather',
    ); // This is the url where 'Digits' parameter would be sent after user's digit press event

    $r = new Response();
    $g = $r->addGetDigits($getdigitattributes);
    $g->addSpeak($body,$attributes);
    $r->addSpeak("Input not recieved",array('language' => 'en-US', 'voice' => 'WOMAN'));
    echo($r->toXML());

?>

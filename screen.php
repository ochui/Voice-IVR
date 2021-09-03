<?php

require __DIR__ . '/vendor/autoload.php';

use SignalWire\LaML\VoiceResponse;

header( 'Content-Type: application/xml' );

$laml = new VoiceResponse;

$gather = $laml->gather( array(
    'action' => 'connect.php',
    'numDigits' => 1,
    'timeout' => 5 // wait for 5 seconds
) );

$message = "You have a call from: {$_POST['From']}";

$gather->say( "{$message}. Press any digit to accept the call." );

$laml->say( 'Hanging up' );

$laml->hangup();

echo $laml;
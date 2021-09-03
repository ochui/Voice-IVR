<?php

require __DIR__ . '/vendor/autoload.php';

use SignalWire\LaML\VoiceResponse;

header( 'Content-Type: application/xml' );

$laml = new VoiceResponse;

$gather = $laml->gather( array(
    'action' => '/ivr.php',
    'numDigits' => 1,
    'timeout' => 5 // wait for 5 seconds
) );

$message = 'Welcome to company xyx. Press 1 to speak with an agent';

$gather->say( $message );

$laml->say( 'We did not receive any input. Goodbye!' );

$laml->hangup();

echo $laml;
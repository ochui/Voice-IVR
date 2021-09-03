<?php

require __DIR__ . '/vendor/autoload.php';

use SignalWire\LaML\VoiceResponse;

header( 'Content-Type: application/xml' );

$laml = new VoiceResponse;

$laml->say( 'Connecting you' );

echo $laml;
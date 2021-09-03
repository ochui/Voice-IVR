<?php

require __DIR__ . '/vendor/autoload.php';

use SignalWire\LaML\VoiceResponse;

$laml = new VoiceResponse;

if ( $_POST['DialCallStatus'] != 'completed' ) {

    $laml->say( 'Please leave a message after the beep. Press the pound key when done.' );
    $laml->record( array(
        'action' => '/store.php',
        'maxLength' => 15,
        'finishOnKey' => '#'
    ) );
} else {
    $laml->hangup();
}

echo $laml;
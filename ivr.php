<?php

require __DIR__ . '/vendor/autoload.php';

use SignalWire\LaML\VoiceResponse;

header( 'Content-Type: application/xml' );

$laml = new VoiceResponse;

$digits = $_POST['Digits'];

switch ( $digits ) {
    case 1:
        $agent_number = '+16192274016';
        $dial = $laml->dial( '', array( 'action' => 'voicemail.php', 'answerOnBridge' => true ) );
        $dial->number( $agent_number, array( 'url' => 'screen.php' ) );
        echo $laml;
        break;

    default:
        echo $laml;
        break;
}

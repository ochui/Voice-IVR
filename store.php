<?php

require __DIR__ . '/vendor/autoload.php';


// saveRecordingSomehow($post['RecordingUrl'], $post['From'], $post['To']);

$AdminEmail = 'ochui.princewill@gmail.com';

$From = $_POST['From'];
$MediaUrl = $_POST['RecordingUrl'];

// $subject = 'My subject';
$subject = 'New Voicemail From '.$From;
$headers = 'From: ivr@sb619.com';

mail( $AdminEmail, $subject, $MediaUrl, $headers );
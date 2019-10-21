<?php

include 'mailing.php';

$to='profgared@gmail.com';
$msg='This is a Test Mail';
$subject='EventGuru.ng';

sendmail($to, $msg, $subject);
?>
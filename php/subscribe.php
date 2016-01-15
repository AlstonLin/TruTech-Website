<?php

    $to = "admin@trutechinnovations.com";
    $from = $_REQUEST['email'];
    $name = $_REQUEST['section'];
    $message = $_REQUEST['message'];
    $headers = "From: $from";
    $subject = "Trutech Bug";

    $body = $name. " has a bug where ". $message;
    $send = mail($to, $subject, $body, $headers);

?>
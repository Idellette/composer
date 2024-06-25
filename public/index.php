<?php

require __DIR__ . '/../src/hello.php';

$message1 = new App\Hello();
$message1->message = 'Hello world!';

$message = [$message1];
       
echo $message1->talk('fr');
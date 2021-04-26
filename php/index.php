<?php

$name = $_POST['name'];
$text = $_POSt['text'];

$file = fopen($name, 'w');
$file = fwrite($file, $_POST['text']);
fclose($file);

?>
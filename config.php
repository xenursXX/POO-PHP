<?php

$db = new PDO('mysql:host=localhost;dbname=tests', 'root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

?>
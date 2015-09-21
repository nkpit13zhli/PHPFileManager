<?php

require_once('PHPFileManager.php');
$fm = new PHPFileManager();

$fm->delete('', 'test.txt');

?>
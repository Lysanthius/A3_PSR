#!/usr/bin/env php
<?php


$length = (isset($argv[1]) && (int)$argv[1] > 0) ? (int)$argv[1] : mt_rand(20, 30);

$char = 'azertyuiopqsdfghjklmwxcvbn!@$€AZERTYUIOPQSDFGHJKLMWXCVBN';

$password = '';

for($i = 0; $i < $length; $i++){
    $password .= mb_substr($char, mt_rand(0, mb_strlen($char)-1), 1);
}

echo $password.PHP_EOL;
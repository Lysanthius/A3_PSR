<?php

//Pour charger tous les vendors
require __DIR__.'/vendor/autoload.php';

/*
 * Pour faire un autoloader en PSR-0 : il faut un dossier par namespace avec la classe dedans (= représentation physique de la classe obligatoire)
 *
 * spl_autoload_register(function($name) {
 * $file = $name.'.php';
 * if(is_file($file))
 *      include $file;
 * });
 */


//On récupère la classe Slugify dans son namespace
//$slugify = new \Cocur\Slugify\Slugify();
//echo $slugify->slugify('L\'histoire de la jolie Licorne Magique ♥');


echo \OKLM\StringGenerator\PasswordGenerator::generate(10, \OKLM\StringGenerator\PasswordGenerator::PASSWORD_EASY).'<br>';
echo \OKLM\StringGenerator\PasswordGenerator::generate(10, \OKLM\StringGenerator\PasswordGenerator::PASSWORD_MEDIUM).'<br>';
echo \OKLM\StringGenerator\PasswordGenerator::generate(10, \OKLM\StringGenerator\PasswordGenerator::PASSWORD_STRONG).'<br>';
echo \OKLM\StringGenerator\PasswordGenerator::generate(10,'lfjlfj"ofj').'<br>';
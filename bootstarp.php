<?php

/**
 * f3 nmini
 */

// Autoload
require __DIR__.'/vendor/autoload.php';

// Kickstart the framework
$f3 = Base::instance();

$f3->config('config.ini');

// $db = new DB\SQL(
//     'mysql:host=localhost;port=3306;dbname=test',
//     'root',
//     'root'
// );

// // models
// $f3->set('m.test', new DB\SQL\Mapper($db,'test'));
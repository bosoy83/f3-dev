<?php

// require
require __DIR__.'/bootstarp.php';

// page start
$f3->route('GET *', function($f3) {
	echo 'hello f3 !';
});

$f3->run();
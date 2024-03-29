<?php
require_once __DIR__ . '/language.php';

require_once('functions.php');

require_once('views/base/header.php');


$sections = [
	'top',
	'composition',
    'recommendation',
    'warning',
];

foreach ($sections as $section) {
	include(__DIR__ . '/views/sections/' . $section . '.php');
}

require_once('views/base/footer.php');
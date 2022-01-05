<?php

$dirInt = "";

define('DIRPAGE', "http://{$_SERVER['HTTP_HOST']}/{$dirInt}");

$bar =(substr($_SERVER['DOCUMENT_ROOT'], -1) == '/') ? "" : "/";

define('DIRREQ', "{$_SERVER['DOCUMENT_ROOT']}{$bar}{$dirInt}");

define('HOST', 'localhost');
define('DB', 'ewti2');
define('USER', 'root');
define('PASS', '12345');

include(DIRREQ.'lib/composer/vendor/autoload.php');
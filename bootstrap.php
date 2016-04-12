<?php
define('APPLICATION_RUNTIME', 'test');
ini_set('display_errors', '1');
ini_set('memory_limit', '2048M');
error_reporting(E_ALL | E_STRICT);

require_once __DIR__ . '/Autoloader.php';

Autoloader::load(__DIR__ . '/FizzBuzz/src')->register();
Autoloader::load(__DIR__ . '/ChapterIterator/src')->register();
Autoloader::load(__DIR__ . '/NumbersOfInterest/src')->register();
Autoloader::load(__DIR__ . '/LexicographicalSorter/src')->register();
Autoloader::load(__DIR__ . '/Anagram/src')->register();

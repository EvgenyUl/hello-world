<?php
error_reporting(-1);
ini_set('display_errors', '1');

require_once 'functions.php';

$person = [
  'name' => 'John',
  'age' => 32,
  'hair' => 'brown',
  'prof' => 'web developer',
  'complete' => false,
];

dd($person);

include_once 'index.view.php';

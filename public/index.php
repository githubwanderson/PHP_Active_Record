<?php

require '../vendor/autoload.php';

use app\database\models\User;
use app\database\activerecord\FindAll;

$user = new User;
// $user->firstName = "Joana";
// $user->lastName = "White";
$r = $user->findAll(['id' => 2]);
var_dump($r);

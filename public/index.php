<?php

require '../vendor/autoload.php';

use app\database\models\User;

$user = new User;
// $user->firstName = "Maria";
// $user->lastName = "Claudia";
$r = $user->findBy('id',1);

var_dump($r);

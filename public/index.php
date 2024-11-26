<?php

require '../vendor/autoload.php';

use app\database\models\User;
use app\database\activerecord\Update;
use app\database\activerecord\Insert;

$user = new User;
$user->firstName = "Wanderson";
$user->lastName = "Martins";
$user->id = 1;
var_dump($user);

$user->insert(new Insert);
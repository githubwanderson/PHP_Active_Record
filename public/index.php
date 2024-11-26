<?php

require '../vendor/autoload.php';

use app\database\models\User;
use app\database\activerecord\Update;
use app\database\activerecord\Insert;
use app\database\activerecord\Find;

$user = new User;
$user->firstName = "Wanderson";
$user->lastName = "Martins";
$user->id = 1;
var_dump($user);

$user->execute(new Find);
// $user->insert();
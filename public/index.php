<?php

require '../vendor/autoload.php';

use app\database\models\User;
use app\database\activerecord\Update;

$user = new User;
$user->firstName = "Wanderson";
$user->lastName = "Martins";

var_dump($user);
$user->execute(new Update('id',1));
// $user->update('id',1);
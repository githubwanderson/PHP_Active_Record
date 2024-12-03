<?php

require '../vendor/autoload.php';

use app\database\models\User;

$user = new User;
$user->firstName = "Maria";
$user->lastName = "Claudia";
echo $user->delete('id',2);

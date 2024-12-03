<?php

require '../vendor/autoload.php';

use app\database\models\User;

$user = new User;
$user->firstName = "Maria";
$user->lastName = "Claudia";

return $user->insert();
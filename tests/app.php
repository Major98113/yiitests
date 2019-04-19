<?php
namespace tests;
use app\models\User;
require __DIR__.'/_bootstrap.php';

$user = new User();

$user->username = 'MisterMax';
$user->email = 'max@max.ru';

print_r($user->getAttributes());

<?php

use Jonnyalexbh\User;

/**
* Uso de los métodos mágicos __get, __set, __isset y __unset con PHP
*/

require '../vendor/autoload.php';

$user = new User();

$user->fill([
  'first_name' => 'Jonny',
  'last_name' => 'Alexander',
]);

$user->nickname = 'jonnyalexbh';

unset($user->nickname);

echo "<p>Bienvenido {$user->first_name} {$user->last_name}</p>";

if (isset ($user->nickname)) {
  echo "<p>Nickname: {$user->nickname}</p>";
}

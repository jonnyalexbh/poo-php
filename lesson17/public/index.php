<?php

use Jonnyalexbh\User;

/**
* Llamadas dinámicas a métodos con PHP
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

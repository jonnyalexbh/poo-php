<?php

namespace Jonnyalexbh;

/**
* Propiedades y métodos estáticos
*/

require '../vendor/autoload.php';

Translator::set([
  'BasicBowAttack' => ':unit dispara una flecha :opponent',
  'BasicSwordAttack' => ':unit ataca con la espada a :opponent',
  'CrossBowAttack' => ':unit dispara una flecha a :opponent',
  'FireBowAttack' => ':unit dispara una flecha de fuego a :opponent',
]);

$jdlopez = new Unit('jdlopez', new Weapons\BasicSword);

$jdlopez->setArmor(new Armors\SilverArmor());

$jabh = new Unit('jabh', new Weapons\FireBow);

$jabh->attack($jdlopez);

$jabh->attack($jdlopez);

$jdlopez->attack($jabh);

<?php

namespace Jonnyalexbh;

/**
* Constructores semánticos e interfaces fluidas
*/

require '../vendor/autoload.php';

Translator::set([
  'BasicBowAttack' => ':unit dispara una flecha :opponent',
  'BasicSwordAttack' => ':unit ataca con la espada a :opponent',
  'CrossBowAttack' => ':unit dispara una flecha a :opponent',
  'FireBowAttack' => ':unit dispara una flecha de fuego a :opponent',
]);

$jdlopez = Unit::createSoldier()
                ->setWeapon(new Weapons\BasicSword())
                ->setArmor(new Armors\SilverArmor())
                ->setShield();

$jabh = new Unit('jabh', new Weapons\FireBow);

$jabh->attack($jdlopez);

$jabh->attack($jdlopez);

$jdlopez->attack($jabh);

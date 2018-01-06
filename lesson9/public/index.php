<?php

namespace Jonnyalexbh;

/**
* Repaso y solución a los ejercicios
*/

require '../vendor/autoload.php';

$armor = new Armors\BronzeArmor();

$jdlopez = new Soldier('jdlopez', new Weapons\BasicSword);

$jdlopez->setArmor(new Armors\BronzeArmor);

$jabh = new Archer('jabh', new Weapons\CrossBow);

$jabh->attack($jdlopez);

$jabh->attack($jdlopez);

$jdlopez->attack($jabh);

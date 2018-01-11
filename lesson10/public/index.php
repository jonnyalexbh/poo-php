<?php

namespace Jonnyalexbh;

/**
* Patrón Factory y Value Objects
*/

require '../vendor/autoload.php';

$jdlopez = new Unit('jdlopez', new Weapons\BasicSword);

$jdlopez->setArmor(new Armors\SilverArmor());

$jabh = new Unit('jabh', new Weapons\FireBow);

$jabh->attack($jdlopez);

$jabh->attack($jdlopez);

$jdlopez->attack($jabh);

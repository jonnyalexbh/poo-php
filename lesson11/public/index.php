<?php

namespace Jonnyalexbh;

/**
* Reducción de uso de condicionales IF y sentencias SWITCH
*/

require '../vendor/autoload.php';

$jdlopez = new Unit('jdlopez', new Weapons\BasicSword);

$jdlopez->setArmor(new Armors\SilverArmor());

$jabh = new Unit('jabh', new Weapons\FireBow);

$jabh->attack($jdlopez);

$jabh->attack($jdlopez);

$jdlopez->attack($jabh);

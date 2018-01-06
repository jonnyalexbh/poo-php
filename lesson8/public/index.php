<?php

namespace Jonnyalexbh;

/**
* Autocarga de clases con Composer y PSR-4
*/

require '../vendor/autoload.php';

$armor = new Armors\BronzeArmor();

$jdlopez = new Soldier('jdlopez');

$jabh = new Archer('jabh');
//$jabh->move('el norte');
$jabh->attack($jdlopez);

$jdlopez->setArmor(new Armors\CursedArmor);

$jabh->attack($jdlopez);

$jdlopez->attack($jabh);

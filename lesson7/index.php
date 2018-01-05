<?php

namespace Jonnyalexbh;

/**
* Autocarga de clases y nombres de espacio con PHP
*/

require 'src/Helpers.php';
require 'vendor/Armor.php';

spl_autoload_register(function ($className) {
  show("Intentando cargar $className");

  if (strpos($className, 'Jonnyalexbh\\') === 0) {
    $className = str_replace('Jonnyalexbh\\', '', $className);

    if (file_exists("src/$className.php")) {
      require "src/$className.php";
    }
  }
});

$armor = new BronzeArmor();

$jdlopez = new Soldier('jdlopez');

$jabh = new Archer('jabh');
//$jabh->move('el norte');
$jabh->attack($jdlopez);

$jdlopez->setArmor(new CursedArmor);

$jabh->attack($jdlopez);

$jdlopez->attack($jabh);

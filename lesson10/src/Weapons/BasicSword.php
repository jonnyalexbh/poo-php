<?php

namespace Jonnyalexbh\Weapons;

use Jonnyalexbh\Weapon;
use Jonnyalexbh\Unit;

class BasicSword extends Weapon
{
  protected $damage = 40;
  protected $description = ":unit ataca con la espada a :opponent";
}

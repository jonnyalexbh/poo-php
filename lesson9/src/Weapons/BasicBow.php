<?php

namespace Jonnyalexbh\Weapons;

use Jonnyalexbh\Weapon;
use Jonnyalexbh\Unit;

class BasicBow extends Bow
{
  protected $damage = 20;

  public function getDescription(Unit $attacker, Unit $opponent)
  {
    return "{$attacker->getName()} dispara una flecha {$opponent->getName()}";
  }

}

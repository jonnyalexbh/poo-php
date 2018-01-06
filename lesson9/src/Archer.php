<?php

namespace Jonnyalexbh;

use Jonnyalexbh\Weapons\Bow;

/**
* Archer
*/
class Archer extends Unit
{
  public function __construct($name, Bow $bow)
  {
    parent::__construct($name, $bow);
  }
}

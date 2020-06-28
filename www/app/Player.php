<?php

namespace App;

class Player
{
  public function __construct(private string | int $name)
  {
    
  }

  /**
   * @return string | int
   */
  public function getName(): string | int
  {
    return $this->name;
  }
}

<?php

namespace App;

use App\Player;

class Team
{
  private array $players;

  public function __construct(
      private string $name,) {
    $this->players = [];
  }

  public function getName(): string
  {
    return $this->name;
  }

  public function addPlayers(Player ...$players,): void
  {   
    $this->players = [...$this->players, ...$players];
  }

  public function getPlayers(): array
  {
    return $this->players;
  }

}

<?php

require __DIR__ . '/vendor/autoload.php';

use App\Team;
use App\Player;
use App\ExampleAttribute;

$team = new Team('The Best Team');

echo "<br> Team Name: " . $team->getName() . "<br>";

$player1 = new Player('player 1');
$player2 = new Player(2);
$player3 = new Player('player 3');

$team->addPlayers($player1, $player2, $player3);

$player4 = new Player('player 4');
$player5 = new Player('player 5');
$player6 = new Player(6);

$team->addPlayers($player4, $player5, $player6);

$player7 = new Player('player 7');
$player8 = new Player('player 8');
$player9 = new Player('player 9');

$team->addPlayers($player7, $player8, $player9);

$players = $team->getPlayers();

foreach($players as $player) {
  echo $player->getName() . "<br>";
}

echo "Test str_containes <br>";

$contains = "Name test";
if(str_contains($contains, 'Name')){
  echo "contains name <br>";
}

echo "Test Exception <br>";
try {
  throw new Exception('test');
} catch (Exception) {
  echo "error";
}
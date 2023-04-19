<?php 
require_once 'vendor/autoload.php';

use App\Mage;
use App\Warrior;
use App\Weapon;
use App\Armor;
use App\Quality;
use App\Equipment;
use App\Generator;
use App\Game;
/*
$mage = new Mage("Gandalf");
$warrior = new Warrior("Conan");

$mage->spell($warrior);
$warrior->slash($mage);


while($mage->isAlive() && $warrior->isAlive()) {
    $mage->spell($warrior);
    $warrior->slash($mage);
}

*/




/*

$weapon = new Weapon("Excalibur", Quality::LEGENDARY, 0, 0, 0, 100);
$armor = new Armor("Dragon Scale", Quality::ARTIFACT, 100, 0, 0, 100);

$Equipment = new Equipment([$weapon, $armor]);

var_dump($Equipment );*/

$game = new Game();

var_dump($game);
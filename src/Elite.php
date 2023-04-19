<?php 

namespace App;

class Elite extends Mob {
    public function __construct(private string $name, private int $health=100) {
        parent::__construct($name, $health);
    }

    public function loot(): void {
        echo "$this->name a été tué et a laissé tomber un objet <br>";
    }

    public function attack(Character $target): void {
        if($this->isAlive() && $target->isAlive()) {
            echo "$this->name attaque $target->name et inglige 10 points de dégats <br>";
            $target->getHurted(10);
        }
    }
}
<?php 

namespace App;

class Mage extends Character implements Playable {
    public function __construct(private string $name, private int $health=100, private int $mana=100) {
        parent::__construct($name, $health);
    }

    public function getMana(): int {
        return $this->mana;
    }

    public function setMana(int $mana): self {
        $this->mana = $mana;
        return $this;
    }

    public function spell(Character $target): void {
        if($this->isAlive() && $this->mana > 0 && $target->isAlive()) {
            $this->mana = $this->mana - 10;
            echo "$this->name lance un sort sur " . $target->getName() . " et inglige 10 points de dégats <br>";
            $target->getHurted(10);
        }
    }

    public function move(): void {
        echo "$this->name se déplace <br>";
    }

    public function jump(): void {
        echo "$this->name saute <br>";
    }

    public function attack(Character $target): void {
        if($this->isAlive() && $target->isAlive()) {
            echo "$this->name attaque $target->name et inglige 10 points de dégats <br>";
            $target->getHurted(10);
        }
    }
}
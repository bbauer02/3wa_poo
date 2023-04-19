<?php 

namespace App;

class Warrior extends Character implements Playable {
    public function __construct(private string $name, private int $health=100, private int $rage=100) {
        parent::__construct($name, $health);
    }

    public function getRage(): int {
        return $this->rage;
    }

    public function setRage(int $rage): self {
        $this->rage = $rage;
        return $this;
    }

    public function slash(Character $target): void {
        if($this->isAlive() && $this->rage > 0 && $target->isAlive()) {
            $this->rage = $this->rage - 10;
            echo "$this->name donne un coup d'épée à " . $target->getName() . " et inglige 10 points de dégats <br>";
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
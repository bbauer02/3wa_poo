<?php 

namespace App;

abstract class Character {

    public function __construct(private string $name, private int $health=100) {
    }

    public function getName(): string {
        return $this->name;
    }

    public function getHealth(): int {
        return $this->health;
    }

    public function setHealth(int $health): self {
        $this->health = $health;
        return $this;
    }

    public function setName(string $name): self {
        $this->name = $name;
        return $this;
    }

    public function isAlive(): bool {
        return $this->health > 0;
    }

    abstract public function attack(Character $target): void;

    public function die() : void {
        echo "$this->name est mort ! <br>";
    }

    protected function getHurted($damage) {
        $this->health = $this->health - $damage;
        if(!$this->isAlive()) {
            $this->die();
        }
    }

}
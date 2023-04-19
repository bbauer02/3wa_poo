<?php

namespace App;

class Weapon extends Item {
    public function __construct(
        string $name, 
        Quality $quality,
        int $bonusHp=0,
        int $bonusRage=0,
        int $bonusMana=0,
        private int $damage=0
    ) {
        parent::__construct($name, $quality, $bonusHp, $bonusRage, $bonusMana);
    }

    public function getDamage(): int {
        return $this->damage;
    }

    public function setDamage(int $damage): self {
        $this->damage = $damage;
        return $this;
    }


    



}
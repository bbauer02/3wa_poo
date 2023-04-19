<?php

namespace App;

class Armor extends Item {
    public function __construct(
        string $name, 
        Quality $quality,
        int $bonusHp=0,
        int $bonusRage=0,
        int $bonusMana=0,
        private int $protection=0
    ) {
        parent::__construct($name, $quality, $bonusHp, $bonusRage, $bonusMana);
    }

    public function getProtection(): int {
        return $this->protection;
    }

    public function setProtection(int $protection): self {
        $this->protection = $protection;
        return $this;
    }
}
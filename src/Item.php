<?php

namespace App;

abstract class Item {

    public function __construct(
        private string $name, 
        private Quality $quality,
        private int $bonusHp=0,
        private int $bonusRage=0,
        private int $bonusMana=0,
    ) {
    }

    public function getName(): string {
        return $this->name;
    }

    public function setName(string $name): self {
        $this->name = $name;
        return $this;
    }

    public function getQuality(): Quality {
        return $this->quality;
    }

    public function setQuality(Quality $quality): self {
        $this->quality = $quality;
        return $this;
    }



}
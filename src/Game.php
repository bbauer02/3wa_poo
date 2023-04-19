<?php

namespace App;


class Game extends Generator {

    private array $tableLootWeaponsMob;
    private array $tableLootWeaponsElite;
    private array $tableLootArmorsMob;
    private array $tableLootArmorsElite;


    public function __construct() {

        // On va générer les armes et armures
        // pour les Mob et les Boss
        for($i=0; $i<5; $i++) {
            $this->tableLootWeaponsMob[] = $this->generateWeapon();
            $this->tableLootWeaponsElite[] = $this->generateWeapon(true);
            $this->tableLootArmorsMob[] = $this->generateArmor();
            $this->tableLootArmorsElite[] = $this->generateArmor(true);
        }
    }
    
 }
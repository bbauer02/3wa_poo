<?php 


namespace App;


// fonction qui permet de générer un nom d'arme aléatoire

class Generator {


    private function skewedRandomNumber($min, $max) {
        $randomFloat = mt_rand() / mt_getrandmax(); // Génère un nombre aléatoire à virgule flottante entre 0 et 1
        $exponentialDistribution = -log(1 - $randomFloat); // Applique la distribution exponentielle
    
        // Convertit la valeur de la distribution en un entier entre $min et $max
        $result = (int)($exponentialDistribution * 10); // Multiplie par 10 pour couvrir la plage 0 à 100
        $result = min($result, $max); // Limite la valeur à $max (100 dans ce cas)
        
        return $result;
    }
    
    public function generateWeapon(bool $isBetterQuality = false)  : Weapon
    {
                // list of weapon medieval type
        $weapon_types = [
            'Sword',
            'Axe',
            'Bow',
            'Hammer',
            'Dagger',
            'Spear',
            'Staff'
        ];
        
        $prefixes = [
            'Eternal',
            'Dark',
            'Cursed',
            'Flaming',
            'Frozen',
            'Thundering',
            'Shadow',
            'Sacred',
            'Vengeful',
            'Whispering',
        ];

        $suffixes = [
            'Gorehowl', // Axe of Grom Hellscream (Warcraft)
            'Frostmourne', // Sword of Arthas Menethil (Warcraft)
            'Doomhammer', // Hammer of Thrall (Warcraft)
            'Ashbringer', // Sword of Tirion Fordring (Warcraft)
            'Ghal Maraz', // Hammer of Sigmar Heldenhammer (Warhammer)
            'Drach\'nyen', // Demon sword (Warhammer 40,000)
            'Widowmaker', // Bow of Kael'thas Sunstrider (Warcraft)
            'Stormrage',
            'Lightbringer',
            'Runeblade',
            'Excalibur',
            'Soulrender',
            'Soulkeeper',
            'Coucy',
            'Glamdring',
            'Sting',
            'Anduril',
            'Orcrist',
            'Gurthang',
            'Anguirel',
            'Narsil',
            'Baruk Khazad',
            'Morgul Blade',
            'Ivanohoe'
        ];

        $isBetterQuality? $randomHP = $this->skewedRandomNumber(0, 100) + rand(0,rand(50,100)) : $randomHP = $this->skewedRandomNumber(0, 100);

        $isBetterQuality? $randomRAGE = $this->skewedRandomNumber(0, 100) + rand(0,rand(50,100)) : $randomRAGE = $this->skewedRandomNumber(0, 100);

        $isBetterQuality? $randomMANA = $this->skewedRandomNumber(0, 100) + rand(0,rand(50,100)) : $randomMANA = $this->skewedRandomNumber(0, 100);

        $isBetterQuality? $randomDAMAGE = $this->skewedRandomNumber(0, 100) + rand(0,rand(50,100)) : $randomDAMAGE = $this->skewedRandomNumber(0, 100);


    

        $qualityRate = $randomHP + $randomRAGE + $randomMANA + $randomDAMAGE;
        $quality = Quality::UNCOMMON;
        if($qualityRate <= 80) {
            $quality = Quality::UNCOMMON;
        }
        else if ( $qualityRate > 80&& $qualityRate <= 160) {
            $quality = Quality::RARE;
        }
        else if (  $qualityRate > 160 && $qualityRate <= 240) {
            $quality = Quality::EPIC;
        }
        else if (  $qualityRate > 240 && $qualityRate <= 320) {
            $quality = Quality::LEGENDARY;
        }
        else if (  $qualityRate > 320 && $qualityRate < 400) {
            $quality = Quality::ARTIFACT;
        }
        else if (  $qualityRate == 400) {
            $quality = Quality::MYTHIC;
        }


        $random_prefix = $prefixes[array_rand($prefixes)];
        $random_weapon_type = $weapon_types[array_rand($weapon_types)];
        $random_suffix = $suffixes[array_rand($suffixes)];
        $name =  ucfirst($quality->value) . ' ' . ucfirst($random_prefix) . ' ' . ucfirst($random_weapon_type) . ' of ' . ucfirst($random_suffix);

        $newWeapon = new Weapon($name,$quality, $randomHP, $randomRAGE, $randomMANA, $randomDAMAGE);

        return $newWeapon;
    }

    public function generateArmor(bool $isBetterQuality= false) : Armor
    {
        $armor_types = [
            'Helmet',
            'Chestplate',
            'Leggings',
            'Boots',
            'Shield',
            'Gloves'
        ];



        $prefixes = [
            'Eternal',
            'Dark',
            'Cursed',
            'Flaming',
            'Frozen',
            'Thundering',
            'Shadow',
            'Sacred',
            'Vengeful',
            'Whispering',
        ];




        $suffixes = [
            'Gorehowl', // Axe of Grom Hellscream (Warcraft)
            'Frostmourne', // Sword of Arthas Menethil (Warcraft)
            'Doomhammer', // Hammer of Thrall (Warcraft)
            'Ashbringer', // Sword of Tirion Fordring (Warcraft)
            'Ghal Maraz', // Hammer of Sigmar Heldenhammer (Warhammer)
            'Drach\'nyen', // Demon sword (Warhammer 40,000)
            'Widowmaker', // Bow of Kael'thas Sunstrider (Warcraft)
            'Stormrage',
            'Lightbringer',
            'Runeblade',
            'Excalibur',
            'Soulrender',
            'Soulkeeper',
            'Coucy',
            'Glamdring',
            'Sting',
            'Anduril',
            'Orcrist',
            'Gurthang',
            'Anguirel',
            'Narsil',
            'Baruk Khazad',
            'Morgul Blade',
            'Ivanohoe'
        ];




        $isBetterQuality? $randomHP = $this->skewedRandomNumber(0, 100) + rand(0,rand(50,100)) : $randomHP = $this->skewedRandomNumber(0, 100);

        $isBetterQuality? $randomRAGE = $this->skewedRandomNumber(0, 100) + rand(0,rand(50,100)) : $randomRAGE = $this->skewedRandomNumber(0, 100);

        $isBetterQuality? $randomMANA = $this->skewedRandomNumber(0, 100) + rand(0,rand(50,100)) : $randomMANA = $this->skewedRandomNumber(0, 100);

        $isBetterQuality? $randomPROTECTION = $this->skewedRandomNumber(0, 100) +rand(0,rand(50,100)) : $randomPROTECTION = $this->skewedRandomNumber(0, 100);


    

        $qualityRate = $randomHP + $randomRAGE + $randomMANA + $randomPROTECTION;
        $quality = Quality::UNCOMMON;
        if($qualityRate <= 80) {
            $quality = Quality::UNCOMMON;
        }
        else if ( $qualityRate > 80&& $qualityRate <= 160) {
            $quality = Quality::RARE;
        }
        else if (  $qualityRate > 160 && $qualityRate <= 240) {
            $quality = Quality::EPIC;
        }
        else if (  $qualityRate > 240 && $qualityRate <= 320) {
            $quality = Quality::LEGENDARY;
        }
        else if (  $qualityRate > 320 && $qualityRate < 400) {
            $quality = Quality::ARTIFACT;
        }
        else if (  $qualityRate == 400) {
            $quality = Quality::MYTHIC;
        }

        $random_prefix = $prefixes[array_rand($prefixes)];
        $random_armor_type = $armor_types[array_rand($armor_types)];
        $random_suffix = $suffixes[array_rand($suffixes)];
        $name =  ucfirst($quality->value) . ' ' . ucfirst($random_prefix) . ' ' . ucfirst($random_armor_type) . ' of ' . ucfirst($random_suffix);

        
        $newArmor = new Armor($name,$quality, $randomHP, $randomRAGE, $randomMANA, $randomPROTECTION);
        return $newArmor;
    }
}
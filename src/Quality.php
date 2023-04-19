<?php
namespace App;

enum Quality: string {
    case UNCOMMON = 'uncommon';
    case RARE = 'rare';
    case EPIC = 'epic';
    case LEGENDARY = 'legendary';
    case ARTIFACT = 'artifact';
    case MYTHIC = 'mythic';
}
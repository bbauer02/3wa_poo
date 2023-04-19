<?php

namespace App;

interface Playable { 
    public function move(): void;
    public function jump(): void;
}